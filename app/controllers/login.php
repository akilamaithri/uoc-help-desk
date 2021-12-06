<?php
    if(session_status()===PHP_SESSION_NONE) {session_start();}
 

if(isset($_POST['log_button'])){
    $email = filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL);
    $_SESSION['log_email'] =$email;
    $password = md5($_POST['log_password']);
    $check_database_query = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if($check_login_query == 1)
    {
        $row = mysqli_fetch_array($check_database_query);
        $username = $row['name'];

        $user_closed_query = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND user_closed='yes'");
        if(mysqli_num_rows($user_closed_query) == 1){
            $reopen_account = mysqli_query($con,"UPDATE user SET user_closed='no' WHERE email='$email'");
        }
        
       if($row['user_roll']=="user"){
        $_SESSION['name'] = $username;
        header("Location:../views/studentDash.php");
        exit();
        }
        else if($row['user_roll']=="Admin"){
        $_SESSION['name'] = $username;
        header("Location:../views/staffHome.php");
        exit(); 
        }
        else{
            echo "Invalid Username or Password <br> Please check it out";
        }

    }
    else{
        array_push($error_array,"Email or password was incorrect<br>");
    }
}

?>