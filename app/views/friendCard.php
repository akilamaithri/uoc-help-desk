

<div class="card">

		        <img src="<?php echo $user['profile_pic'];?>" style="border-radius:20px; margin-top:10px">

	<p class="pplTitle"><?php echo $username; ?></p>
	<p class="pplFac">Faculty of Science</p>
    <br>

    <p><button class="pplButton" onclick="askFriend()">Ask Friend</button></p>
    
    <form action="<?php echo $username; ?>" method="POST">
          <?php  $profile_user_obj = new User($con, $username);
            if($profile_user_obj->isClosed())
            {
                header("Location:user_closed.php");
            }

            $logged_in_user_obj = new User($con,$userLoggedIn);
            if($userLoggedIn != $username){

            //    echo '<input type="submit" class="pplButton pplButtonMain" data-toggle="modal" data-target="#post_form" value="Ask From Friend">';

 

                if($logged_in_user_obj->isFriend($username)){
                    echo '<p><input type="submit" name="remove_friend" class="pplButton" style="background-color:red; color:white" value="Remove Friend"></p><br>';
                }
                else if ($logged_in_user_obj->didReceiveRequest($username)){
                    echo ' <p><input type="submit" name="respond_request" class="pplButton" value="Respond to Request" ></p>';
                }
                else if ($logged_in_user_obj->didSendRequest($username)){
                    echo ' <p><input type="submit" name="" class="pplButton" value="Request Sent"></p>';
                }
                else{
                    echo ' <p><input type="submit" name="add_friend" class="pplButton" value="Add friend"></p>';
                }
            }

          ?>
    </form>
</div>