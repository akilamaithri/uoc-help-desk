
<?php

class Complain{
    private $con;
    private $user_obj;
    public function __construct($con,$user)
    {
        $this->con = $con;
        $this->user_obj = new User($con,$user); 
    }

    public function submitComplain($category,$complainTitle,$body,$user_to){
        $category = nl2br($category);

        $complainTitle = strip_tags($complainTitle);
        $complainTitle = mysqli_real_escape_string($this->con,$complainTitle);
        $complainTitle = str_replace('\r\n','\n',$complainTitle);
        $complainTitle = nl2br($complainTitle);
        
        $body = strip_tags($body);
        $body = mysqli_real_escape_string($this->con,$body);
        $body = str_replace('\r\n','\n',$body);
        $body = nl2br($body);

        $check_empty = preg_replace('/\s+/','',$body);
        
        if($check_empty != ""){
            $date_added = date("Y-m-d H:i:s");
            $added_by = $this->user_obj->getUserName();

            if($user_to == $added_by){
                $user_to = "none";
            }



            $query =mysqli_query($this->con,"INSERT INTO posts VALUES(NULL, '$category', '$complainTitle', '$body', '$added_by', '$user_to', '$date_added', 'no', 'no', '0')");
            $returned_id = mysqli_insert_id($this->con);  
            
            if($user_to != 'none'){
                $notification = new Notification($this->con,$added_by);
                $notification->insertNotification($returned_id, $user_to, "profile_complain");
            }
            
            $num_posts = $this->user_obj->getNumComplains();
            $num_posts++;
            $update_query = mysqli_query($this->con,"UPDATE user SET num_posts='$num_posts' WHERE name='$added_by'");
        }
    }

    public function loadComplain($data, $limit){
        $page = $data['page'];
        $userLoggedIn = $this->user_obj->getUserName();
        if($page==1)
            $start = 0;
        else
            $start = ($page-1) * $limit;

        $str = "";
        $data_query = mysqli_query($this->con,"SELECT * FROM posts WHERE deleted='no' ORDER BY id DESC");
        
        if(mysqli_num_rows($data_query)> 0){
            $num_iterations = 0;
            $count = 1;
        
        while($row = mysqli_fetch_array($data_query)){
            $id = $row['id'];
            $category = $row['category'];
            $complainTitle = $row['complainTitle'];
            $body = $row['body'];
            $added_by = $row['added_by'];
            $date_time = $row['date_added'];

            if($row['user_to'] == 'none'){
                $user_to = "";
            }
            else{
                $user_to_obj = new User($this->con,$row['user_to']);
                $user_to_name = $user_to_obj->getName();
                $user_to = "to <a href='" . $row['user_to'] . "'>" . $user_to_name . "</a>";
            }

            $added_by_obj = new User($this->con,$added_by);
            if($added_by_obj->isClosed()){
                continue;
            }

            $user_logged_obj = new User($this->con,$userLoggedIn);
            if($user_logged_obj->isFriend($added_by)){

            if($num_iterations++ < $start)
            continue;

            if($count > $limit){
                break;
            }
            else{
                $count++;
            }

            if($userLoggedIn == $added_by)
                $delete_button = "<button class='delete_button btn-danger' id='post$id'>X</button>";
            else
                $delete_button = "";  

            $user_details_query = mysqli_query($this->con,"SELECT name, profile_pic FROM  user WHERE name='$added_by'");
            $user_row = mysqli_fetch_array($user_details_query);
            $name = $user_row['name'];
            $profile_pic = $user_row['profile_pic'];
        
            ?>
            <script>
                function toggle<?php echo $id;?>() {
                var target = $(event.target);
                    if(!target.is("a")){
                        var element = document.getElementById("toggleComment<?php echo $id; ?>");
                        if(element.style.display == "block") 
                            element.style.display = "none";
                        else 
                            element.style.display = "block";
                    }
                }

            </script>
            <?php

            
            $comment_check = mysqli_query($this->con,"SELECT * FROM comments WHERE post_id='$id'");
            $comments_check_num = mysqli_num_rows($comment_check);


            $date_time_now = date("Y-m-d H:i:s");
            $start_date = new DateTime($date_time); //Time of post
            $end_date = new DateTime($date_time_now); //Current time
            $interval = $start_date->diff($end_date); //Difference between dates 
            if($interval->y >= 1) {
                if($interval->y == 1)
                    $time_message = $interval->y . " year ago"; //1 year ago
                else 
                    $time_message = $interval->y . " years ago"; //1+ year ago
            }
            else if ($interval->m >= 1) {
                if($interval->d == 0) {
                    $days = " ago";
                }
                else if($interval->d == 1) {
                    $days = $interval->d . " day ago";
                }
                else {
                    $days = $interval->d . " days ago";
                }


                if($interval->m == 1) {
                    $time_message = $interval->m . " month ". $days;
                }
                else {
                    $time_message = $interval->m . " months ". $days;
                }

            }
            else if($interval->d >= 1) {
                if($interval->d == 1) {
                    $time_message = "Yesterday";
                }
                else {
                    $time_message = $interval->d . " days ago";
                }
            }
            else if($interval->h >= 1) {
                if($interval->h == 1) {
                    $time_message = $interval->h . " hour ago";
                }
                else {
                    $time_message = $interval->h . " hours ago";
                }
            }
            else if($interval->i >= 1) {
                if($interval->i == 1) {
                    $time_message = $interval->i . " minute ago";
                }
                else {
                    $time_message = $interval->i . " minutes ago";
                }
            }
            else {
                if($interval->s < 30) {
                    $time_message = "Just now";
                }
                else {
                    $time_message = $interval->s . " seconds ago";
                }
            }



            
            $str .= "<div class='status_complain' >
                        <div class='status_content'>
                            <article>
                                  
                                <span class='compCategory'>$category</span>

                                <span class='compPrivacy'><img src='../../public\img\icons\public.svg'>Public</span>

                                <br><br>
                                <span class='compTitle'>$complainTitle</span>

                                <ul>
                                
                                    <li><img src='../../public/img/icons/date.svg'><span class='compName'>$time_message</span></li>

                                    <li class='outline'><img src='../../public/img/icons/person.svg'><span class='compName outline'><a href='$added_by'>$name</a>$user_to</span></li>

                                    <li><img src='../../public/img/icons/faculty.svg'><span class='compName'>UCSC</span></li>
                                
                                </ul>

                                <p>$body</p>
                                            
                            </article>
                        

                            <div class='newsfeedcomplainOptions'>
                                <span class='btn-reply' onClick='javascript:toggle$id()'>Reply&nbsp($comments_check_num) </span>
                            
                                <iframe src='../views/like.php?post_id=$id' scrolling='no'></iframe>

                                
                               
                            </div>
                        </div>    
                    
                        
                    </div>
                    
                    <div class='post_comment' id='toggleComment$id' style='display:none;'>
                    <iframe src='../views/comment.php?post_id=$id' id='comment_iframe' frameborder='0'></iframe>
                
                    </div>
                    </div>
                    ";
                    
        }

        ?>
                <script>
                        $(document).ready(function()
                        {
                            $('#post<?php echo $id; ?>').on('click', function()
                            {
                                bootbox.confirm("Are you sure you want to delete this complain?", function(result)
                                {
                                    $.post("delete_complain.php?post_id=<?php echo $id; ?>", {result:result});
                                    if(result)
                                        location.reload();                        
                                });
                            });
                        });
                    </script>

        <?php
        }
        if($count > $limit)
            $str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'><input type='hidden' class='noMoreComplain' value='false'>";
        else
        "<input type='hidden' class='noMoreComplain' value='true'><p style='text-align:center;'> No more complains to show! </p>";
    }

        echo $str;
        
    }
    
    
    public function loadProfileComplain($data, $limit){
        $page = $data['page'];
        $profileUser = $data['profileUsername'];
        $userLoggedIn = $this->user_obj->getUserName();
        if($page==1)
            $start = 0;
        else
            $start = ($page-1) * $limit;

        $str = "";
        $data_query = mysqli_query($this->con,"SELECT * FROM posts WHERE deleted='no' AND ((added_by='$profileUser' AND user_to='none') OR user_to='$profileUser') ORDER BY id DESC");
        
        if(mysqli_num_rows($data_query)> 0){
            $num_iterations = 0;
            $count = 1;
        
        while($row = mysqli_fetch_array($data_query)){
            $id = $row['id'];
            $category = $row['category'];
            $complainTitle = $row['complainTitle'];
            $body = $row['body'];
            $added_by = $row['added_by'];
            $date_time = $row['date_added'];


            if($num_iterations++ < $start)
            continue;

            if($count > $limit){
                break;
            }
            else{
                $count++;
            }

            if($userLoggedIn == $added_by)
                $delete_button = "<button class='delete_button btn-danger' id='post$id'>X</button>";
            else
                $delete_button = "";  

            $user_details_query = mysqli_query($this->con,"SELECT name, profile_pic FROM  user WHERE name='$added_by'");
            $user_row = mysqli_fetch_array($user_details_query);
            $name = $user_row['name'];
            $profile_pic = $user_row['profile_pic'];
        
            ?>
            <script>
                function toggle<?php echo $id;?>() {
                var target = $(event.target);
                    if(!target.is("a")){
                        var element = document.getElementById("toggleComment<?php echo $id; ?>");
                        if(element.style.display == "block") 
                            element.style.display = "none";
                        else 
                            element.style.display = "block";
                    }
                }

            </script>
            <?php

            $comment_check = mysqli_query($this->con,"SELECT * FROM comments WHERE post_id='$id'");
            $comments_check_num = mysqli_num_rows($comment_check);


            $date_time_now = date("Y-m-d H:i:s");
            $start_date = new DateTime($date_time); //Time of post
            $end_date = new DateTime($date_time_now); //Current time
            $interval = $start_date->diff($end_date); //Difference between dates 
            if($interval->y >= 1) {
                if($interval->y == 1)
                    $time_message = $interval->y . " year ago"; //1 year ago
                else 
                    $time_message = $interval->y . " years ago"; //1+ year ago
            }
            else if ($interval->m >= 1) {
                if($interval->d == 0) {
                    $days = " ago";
                }
                else if($interval->d == 1) {
                    $days = $interval->d . " day ago";
                }
                else {
                    $days = $interval->d . " days ago";
                }


                if($interval->m == 1) {
                    $time_message = $interval->m . " month ". $days;
                }
                else {
                    $time_message = $interval->m . " months ". $days;
                }

            }
            else if($interval->d >= 1) {
                if($interval->d == 1) {
                    $time_message = "Yesterday";
                }
                else {
                    $time_message = $interval->d . " days ago";
                }
            }
            else if($interval->h >= 1) {
                if($interval->h == 1) {
                    $time_message = $interval->h . " hour ago";
                }
                else {
                    $time_message = $interval->h . " hours ago";
                }
            }
            else if($interval->i >= 1) {
                if($interval->i == 1) {
                    $time_message = $interval->i . " minute ago";
                }
                else {
                    $time_message = $interval->i . " minutes ago";
                }
            }
            else {
                if($interval->s < 30) {
                    $time_message = "Just now";
                }
                else {
                    $time_message = $interval->s . " seconds ago";
                }
            }



            
            $str .= "<div class='status_complain' onClick='javascript:toggle$id()'>
                    <div class='complain_profile_pic'>
                    <img src='$profile_pic' width='50'>
                    </div>
                    <div class='complain_by' style='color:#ACACAC;'>
                    <a href='$added_by'>$name</a>  &nbsp;&nbsp;&nbsp;$time_message
                    $delete_button
                    </div>
                    <div id='complain_body'>
                    $category<br>
                    $complainTitle<br>
                    $body<br>
                    <br>
                    <br>
                    
                    </div>
                    <div class='newsfeedcomplainOptions'>
                        Comments($comments_check_num)&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>

                    </div>
                    
                    <div class='post_comment' id='toggleComment$id' style='display:none;'>
                    <iframe src='../views/comment.php?post_id=$id' id='comment_iframe' frameborder='0'></iframe>
                    </div>
                    </div>
                    ";
                    ?>

                    <script>
                        $(document).ready(function(){
                            $('#post<?php echo $id; ?>').on('click', function(){
                                bootbox.confirm("Are you sure you want to delete this complain?", function(result){
                                    $.post("delete_complain.php?post_id=<?php echo $id; ?>", {result:result});
                                    if(result)
                                        location.reload();                        
                            });
                        });
                    });
                    </script>
        
                <?php    
        

        }
        if($count > $limit)
            $str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'><input type='hidden' class='noMoreComplain' value='false'>";
        else
        "<input type='hidden' class='noMoreComplain' value='true'><p style='text-align:center;'> No more complains to show! </p>";
    
    }
        echo $str;
        
    }



    public function getSinglePost($post_id){



        $userLoggedIn = $this->user_obj->getUsername();

		$opened_query = mysqli_query($this->con, "UPDATE notifications SET opened='yes' WHERE user_to='$userLoggedIn' AND link LIKE '%=$post_id'");

		$str = ""; //String to return 
		$data_query = mysqli_query($this->con, "SELECT * FROM posts WHERE deleted='no' AND id='$post_id'");

		if(mysqli_num_rows($data_query) > 0) {


			$row = mysqli_fetch_array($data_query); 
				$id = $row['id'];
                $category = $row['category'];
                $complainTitle = $row['complainTitle'];
				$body = $row['body'];
				$added_by = $row['added_by'];
				$date_time = $row['date_added'];

				//Prepare user_to string so it can be included even if not posted to a user
				if($row['user_to'] == "none") {
					$user_to = "";
				}
				else {
					$user_to_obj = new User($this->con, $row['user_to']);
					$user_to_name = $user_to_obj->getName();
					$user_to = "to <a href='" . $row['user_to'] ."'>" . $user_to_name . "</a>";
				}

				//Check if user who posted, has their account closed
				$added_by_obj = new User($this->con, $added_by);
				if($added_by_obj->isClosed()) {
					return;
				}

				$user_logged_obj = new User($this->con, $userLoggedIn);
				if($user_logged_obj->isFriend($added_by)){


					if($userLoggedIn == $added_by)
						$delete_button = "<button class='delete_button btn-danger' id='post$id'>X</button>";
					else 
						$delete_button = "";


					$user_details_query = mysqli_query($this->con, "SELECT name, profile_pic FROM user WHERE name='$added_by'");
					$user_row = mysqli_fetch_array($user_details_query);
					$name = $user_row['name'];
					$profile_pic = $user_row['profile_pic'];


					?>
					<script> 
						function toggle<?php echo $id; ?>(e) {

 							if( !e ) e = window.event;

							var target = $(e.target);
							if (!target.is("a")) {
								var element = document.getElementById("toggleComment<?php echo $id; ?>");

								if(element.style.display == "block") 
									element.style.display = "none";
								else 
									element.style.display = "block";
							}
						}

					</script>
					<?php

					$comments_check = mysqli_query($this->con, "SELECT * FROM comments WHERE post_id='$id'");
					$comments_check_num = mysqli_num_rows($comments_check);


					//Timeframe
					$date_time_now = date("Y-m-d H:i:s");
					$start_date = new DateTime($date_time); //Time of post
					$end_date = new DateTime($date_time_now); //Current time
					$interval = $start_date->diff($end_date); //Difference between dates 
					if($interval->y >= 1) {
						if($interval == 1)
							$time_message = $interval->y . " year ago"; //1 year ago
						else 
							$time_message = $interval->y . " years ago"; //1+ year ago
					}
					else if ($interval->m >= 1) {
						if($interval->d == 0) {
							$days = " ago";
						}
						else if($interval->d == 1) {
							$days = $interval->d . " day ago";
						}
						else {
							$days = $interval->d . " days ago";
						}


						if($interval->m == 1) {
							$time_message = $interval->m . " month". $days;
						}
						else {
							$time_message = $interval->m . " months". $days;
						}

					}
					else if($interval->d >= 1) {
						if($interval->d == 1) {
							$time_message = "Yesterday";
						}
						else {
							$time_message = $interval->d . " days ago";
						}
					}
					else if($interval->h >= 1) {
						if($interval->h == 1) {
							$time_message = $interval->h . " hour ago";
						}
						else {
							$time_message = $interval->h . " hours ago";
						}
					}
					else if($interval->i >= 1) {
						if($interval->i == 1) {
							$time_message = $interval->i . " minute ago";
						}
						else {
							$time_message = $interval->i . " minutes ago";
						}
					}
					else {
						if($interval->s < 30) {
							$time_message = "Just now";
						}
						else {
							$time_message = $interval->s . " seconds ago";
						}
					} 

					$str .= "<div class='status_post' onClick='javascript:toggle$id()'>
								<div class='post_profile_pic'>
									<img src='$profile_pic' width='50'>
								</div>

								<div class='posted_by' style='color:#ACACAC;'>
									<a href='$added_by'> $name </a> $user_to &nbsp;&nbsp;&nbsp;&nbsp;$time_message
									$delete_button
								</div>
								<div id='post_body'>
                                    $category<br>
                                    $complainTitle<br>
                                    $body<br>
									<br>
									<br>
									<br>
								</div>

								<div class='newsfeedPostOptions'>
									Comments($comments_check_num)&nbsp;&nbsp;&nbsp;
								</div>

							</div>
							<div class='post_comment' id='toggleComment$id' style='display:none;'>
								<iframe src='comment_frame.php?post_id=$id' id='comment_iframe' frameborder='0'></iframe>
							</div>
							<hr>";


				?>
				<script>

					$(document).ready(function() {

						$('#post<?php echo $id; ?>').on('click', function() {
							bootbox.confirm("Are you sure you want to delete this post?", function(result) {

								$.post("includes/form_handlers/delete_post.php?post_id=<?php echo $id; ?>", {result:result});

								if(result)
									location.reload();

							});
						});


					});

				</script>
				<?php
				}
				else {
					echo "<p>You cannot see this post because you are not friends with this user.</p>";
					return;
				}
		}
		else {
			echo "<p>No post found. If you clicked a link, it may be broken.</p>";
					return;
		}

		echo $str;
	



    }



}

?>


            