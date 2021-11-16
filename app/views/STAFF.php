<?php
 if(session_status()===PHP_SESSION_NONE) {session_start();}

if(isset($_POST['log_button'])){
    $stfemail = filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL);
    $_SESSION['log_email'] =$email;
    $stfpassword = md5($_POST['log_password']);
    $check_database_query = mysqli_query($con,"SELECT * FROM admin WHERE email='$stfemail' AND password='$stfpassword'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if($check_login_query == 1){
        $row = mysqli_fetch_array($check_database_query);
        $adminname = $row['name'];

        $admin_closed_query = mysqli_query($con,"SELECT * FROM admin WHERE email='$stfemail' AND admin_closed='yes'");
        if(mysqli_num_rows($admin_closed_query) == 1){
            $reopen_account = mysqli_query($con,"UPDATE admin SET admin_closed='no' WHERE email='$stfemail'");
        }
        
        $_SESSION['name'] = $adminname;
        header("Location:../views/studentDash.php");
        exit();
    }
    else{
        array_push($error_array,"Email or password was incorrect<br>");
    }
}

?>