<?php 
require '../helpers/headerIn.php';
require '../views/complain.php';  
?>
<link rel="stylesheet" type="text/css" href="../../public/css/temp.css">
<link rel="stylesheet" type="text/css" href="../../public/css/style.css">

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
		<?php include('../views/pplCard.php'); ?>     
	</div>


	<div class="box" style="width:100%; padding: 0px 20px 0px 20px">
    
        <!-- <div class="main_column column" id="main_column" style="height:100%"> -->
        <h2>
            Friend Requests
        </h2>

        <div class="card" style="padding: 20px 20px 20px 20px">
        <?php 
            $query = mysqli_query($con,"SELECT * FROM friend_requests WHERE user_to='$userLoggedIn'");
            if(mysqli_num_rows($query)==0)
                echo "You have no friend requests at this time!";
            else{
                while($row = mysqli_fetch_array($query)){
                    $user_from = $row['user_from'];
                    $user_from_obj = new User($con,$user_from);

                    echo "<div class='reqText'>";
                    echo $user_from_obj->getName() . " sent you a friend request!";
                    echo "</div>";
                    
                    $user_from_friend_array = $user_from_obj->getFriendArray();
                    
                    if(isset($_POST['accept_request' . $user_from])){
                        $add_friend_query = mysqli_query($con,"UPDATE user SET friend_array=CONCAT(friend_array, '$user_from,') WHERE name='$userLoggedIn'");
                        $add_friend_query = mysqli_query($con,"UPDATE user SET friend_array=CONCAT(friend_array, '$userLoggedIn,') WHERE name='$user_from'");
                        
                        $deleted_query = mysqli_query($con,"DELETE FROM friend_requests WHERE user_to='$userLoggedIn' AND user_from='$user_from'");
                        echo "You are now friends!";
                        header("Location:requests.php");
                    }

                    if(isset($_POST['ignore_request' . $user_from])){
                        $deleted_query = mysqli_query($con,"DELETE FROM friend_requests WHERE user_to='$userLoggedIn' AND user_from='$user_from'");
                        echo "Request ignored!";
                        header("Location:requests.php");
                    }
                    ?>
                        <form action="requests.php" method="POST">
                            <input type="submit" name="accept_request<?php echo $user_from; ?>" id="accept_button" value="Accept">
                            <input type="submit" name="ignore_request<?php echo $user_from; ?>" id="ignore_button" value="Ignore">
                        </form><hr>
                    <?php
                }
            }
        ?>
        </div>

        </div>
    </div>
    </div>

<?php require '../helpers/footer.php';?>
