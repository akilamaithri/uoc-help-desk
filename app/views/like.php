<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
</head>
<body>

    <style type="text/css">

    form{
	position: absolute;
	top: 0;
}
    </style>

<?php
    require '../modules/connect.php';
    require '../controllers/User.php';
    require '../controllers/Complain.php';
    require '../controllers/Notification.php';

    session_start();

    if(isset($_SESSION['name'])){
        $userLoggedIn = $_SESSION['name'];
        $user_details_query = mysqli_query($con, "SELECT * FROM user WHERE name='$userLoggedIn'");
        $user = mysqli_fetch_array($user_details_query);
    }
    else{
        header("Location:../views/register.php");               //this need to be register.php
    }  
    if(isset($_GET['post_id'])){
        $post_id = $_GET['post_id'];
    }

    $get_likes = mysqli_query($con,"SELECT likes,added_by FROM posts WHERE id='$post_id'");
    $row = mysqli_fetch_array($get_likes);
    $total_likes = $row['likes'];
    $user_liked = $row['added_by'];
    
    $user_details_query = mysqli_query($con,"SELECT * FROM user WHERE name='$user_liked'");
    $row = mysqli_fetch_array($user_details_query);
    
    $total_user_likes = $row['num_likes'];

    if(isset($_POST['like_button'])){
        $total_likes++;
        $query = mysqli_query($con,"UPDATE posts SET likes='$total_likes' WHERE id='$post_id'");
        $total_user_likes++;
        $user_likes = mysqli_query($con, "UPDATE user SET num_likes='$total_user_likes' WHERE name='$user_liked'");
        $insert_user = mysqli_query($con,"INSERT INTO likes VALUES(NULL,'$userLoggedIn','$post_id')");
    
        if($user_liked != $userLoggedIn) {
			$notification = new Notification($con, $userLoggedIn);
			$notification->insertNotification($post_id, $user_liked, "like");
		}
    
    }

    if(isset($_POST['unlike_button'])){
        $total_likes--;
        $query = mysqli_query($con,"UPDATE posts SET likes='$total_likes' WHERE id='$post_id'");
        $total_user_likes--;
        $user_likes = mysqli_query($con, "UPDATE user SET num_likes='$total_user_likes' WHERE name='$user_liked'");
        $insert_user = mysqli_query($con,"DELETE FROM likes WHERE username='$userLoggedIn' AND post_id='$post_id'");
    }

    $check_query = mysqli_query($con,"SELECT * FROM likes WHERE username='$userLoggedIn' AND post_id='$post_id'");
    $num_rows = mysqli_num_rows($check_query);

    if($num_rows > 0){
        echo '<form action="like.php?post_id=' . $post_id . '" method="POST">
            <input type="submit" class="btn-reply" name="unlike_button" value="Unlike">&nbsp;&nbsp;
            <div class="like_value">
                '. $total_likes . ' users have this issue
                </div>
            </form>
        ';
    }
    else{
        echo '<form action="like.php?post_id=' . $post_id . '" method="POST">
            <input type="submit" class="btn-reply" name="like_button" value="Like">
            <div class="like_value">&nbsp;&nbsp;
                '. $total_likes . ' users have this issue
                </div>
            </form>
        ';
    }


    ?>
</body>
</html>