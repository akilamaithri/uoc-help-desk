
<?php 
require '../helpers/headerIn.php';
require '../views/complain.php';  
require '../views/askFriend.php';  


if(isset($_GET['profile_name'])){
    $username = $_GET['profile_name'];
    $user_details_query = mysqli_query($con,"SELECT * FROM user WHERE name='$username'");
    $user_array = mysqli_fetch_array($user_details_query); 

    $num_friends = (substr_count($user_array['friend_array'],",")) - 1;
}

if(isset($_POST['remove_friend'])){
    $user = new User($con,$userLoggedIn);
    $user->removeFriend($username);
}

if(isset($_POST['add_friend'])){
    $user = new User($con,$userLoggedIn);
    $user->sendRequest($username);
}

if(isset($_POST['respond_request'])){
    header("Location:requests.php");
}

?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../../public/javascript/bootstrap.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.css"> -->



<div class="container">

    <div class="column-1 box">
         
      <?php
        $logged_in_user_obj = new User($con,$userLoggedIn);
        if($userLoggedIn != $username)
        {
              include('../views/friendCard.php');
            
        }
        else{
              include('../views/pplCard.php');

        }

      ?>

    </div>

    <div class="column-2 box" style="width:90%">
        <h2>Profile</h2>
        
        <!-------------------------- Statsitics -->

        <ul class="cards">	
				<li class="cards_item">
						<div class="dashCard-topics">
								<h4 class="profileCard_title"><?php echo "Complains:" .  $user_array['num_posts'];?></h4>
						</div>
				</li>

                <li class="cards_item">
                    <div class="dashCard-topics">
                            <h4 class="profileCard_title"><?php echo "Likes:" .  $user_array['num_likes'];?></h4>
                    </div>
				</li>

                <li class="cards_item">
                    <div class="dashCard-topics">
                            <h4 class="profileCard_title"><?php echo "Friends: " . $num_friends;?></h4>
                    </div>
				</li>                
	
        </ul>

        

        <!-- <h2>Functions</h2> -->

        <!----------------------- Buttons --------------------->
        
        <!-- <p style="margin-left:10px"><button class="pplButton" onclick="askFriend()" style="width:200px;">Ask From Friend</button></p> -->

         


            <!-- <li class="cards_item">
                    <div class="dashCard-topics">
                            <h4 class="profileCard_title">
                // if($userLoggedIn != $username){
                //     echo '<div class="profile_info_button">';
                //     echo $logged_in_user_obj->getMutualFriends($username) . " Mutual Friends";
                //     echo '</div>';

                }
            ?></h4>
                    </div>
				</li>     -->

            
        <!---------------------- COmplains -------------------->

        <h2>Complains</h2>

        <div>
        
        <!-- <div class="long-card" id="#long-card"> -->
            <div class="complain_area"></div>
        <!-- </div> -->

        <img id="loading" src="../../public/img/loading.gif">            

        <!---------------------- Modal ---------------------->

       <!-- Modal -->
<div class="modal fade" id="post_form" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ask Here!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <p>This will appear on the user's profile page and also their newfeed for your friends to see!</p>
            <form class="profile_post" action="" method="POST">
                <div class="form-group">
                    <textarea class="form-control" name="post_body"></textarea>
                    <input type="hidden" name="user_from" value="<?php echo $userLoggedIn?>">
                    <input type="hidden" name="user_to" value="<?php echo $username?>">
                </div>
            </form>
    
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="post_button" id="submit_profile_post">Publish</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
        <!-- Modal -->
</div>
<script>

			var userLoggedIn = '<?php echo $userLoggedIn; ?>';
			$(document).ready(function(){
				$('#loading').show();
				$.ajax({
					url: "../libraries/ajax_load_complain.php",
					type: "POST",
					data: "page=1&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(data){
						$('#loading').hide();
						$('.complain_area').html(data);
					}
				});
				$(window).scroll(function(){
					var height = $('.complain_area').height();
					var scroll_top = $(this).scrollTop();
					var page = $('.complain_area').find('.nextPage').val();
					var noMoreComplain = $('.complain_area').find('.noMoreComplain').val();

					if((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMoreComplain == 'false'){
					$('#loading').show();

					var ajaxReq = $.ajax({
					url: "../libraries/ajax_load_complain.php",
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response){
						$('.complain_area').find('.nextPage').remove();
						$('.complain_area').find('.noMoreComplain').remove();

						$('#loading').hide();
						$('.complain_area').append(response);
					}
				});

			}
			return false;
				});

			});

		</script>
    </div>

</div>
</div>



<?php require '../helpers/footer.php';?>