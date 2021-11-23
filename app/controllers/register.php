<?php
require 'MailConfig.php';
require '../modules/connect.php';


// USER NOT CONFIRMED (PENDING) - P
// USER ACCOUNT ACTIVATED - A
// USER ACCOUNT CLOSE - C
 

function keyGenerater($length=30){
    return substr(str_shuffle("abcdefghijklmnopqrst0123456789AZMLIYUQCXPTNSX"),0,$length);
}


$name = "";
$em = "";
$em2 = "";
$password = "";
$password2 = "";
$date = "";
$error_array = array();

if(isset($_POST['register_button'])){
    $name = strip_tags($_POST['reg_name']);

    $name = str_replace(' ','',$name);
    $name = ucwords(strtolower($name));
    $_SESSION['reg_name'] = $name;

    $em = strip_tags($_POST['reg_email']);
    $em = str_replace(' ','',$em);
    $em = ucwords(strtolower($em));
    $_SESSION['reg_email'] = $em;

    $em2 = strip_tags($_POST['reg_email2']);
    $em2 = str_replace(' ','',$em2);
    $em2 = ucwords(strtolower($em2));
    $_SESSION['reg_email2'] = $em2;

    $password = strip_tags($_POST['reg_password']);

    $password2 = strip_tags($_POST['reg_password2']);

    $date = date("Y-m-d");
    if($em == $em2){
        if(filter_var($em, FILTER_VALIDATE_EMAIL)){
            $em = filter_var($em, FILTER_VALIDATE_EMAIL);
            $e_check = mysqli_query($con,"SELECT email FROM user WHERE email ='$em'");
            $num_rows = mysqli_num_rows($e_check);
            if($num_rows > 0){
                array_push($error_array,"Email is already Used<br>");
                echo '<script>alert("Error")</script>';
            }
        }
        else{
            array_push($error_array,"Invalid Format<br>");
        }
    }
    else{
        array_push($error_array,"Emails don't match<br>");
    }
    if(strlen($name)>25 || strlen($name) < 2){
        array_push($error_array,"Your Name must be between 2 and 25 characters<br>");
    }
    if($password != $password2){
        
        array_push($error_array,"Your Password do not match<br>");
    }
    else{
        if(preg_match('/[^A-Za-z0-9]/',$password)){
            array_push($error_array,"Your password can only have english characters or numbers<br>");
        }
        if(strlen($password > 30 || strlen($password) < 5)){
            array_push($error_array,"Your password must be between 5 and 30 characters<br>");
        }

        if(empty($error_array)){
            $password = md5($password);
        }
        $rand = rand(1,2);
        if($rand==1)
        {$profile_pic = "../../public/img/profile_pics/defaults/head_emerald.png";}
        elseif($rand==2){
        $profile_pic = "../../public/img/profile_pics/defaults/head_deep_blue.png";}
        $date = date("Y-m-d H:i:s");
        $value = keyGenerater();
        $sql = "INSERT INTO user VALUES (NULL,'$name','$em','$password','$date','$profile_pic','0','0','P',',','user'); ";
        mysqli_query($con,$sql);
        $sql = "SELECT LAST_INSERT_ID()";
        $query = mysqli_query($con,$sql);
        $data = mysqli_fetch_assoc($query);
        $stdId = $data['LAST_INSERT_ID()'];
        $sql = "INSERT INTO resetpass(stdId,createdTime,valueIdentity) VALUE($stdId,'$date','$value');";
        $test = "<a href='http://localhost/uochelpdesk/app/views/confirm.php?value=".$value."&id=".$stdId."'>click</a>";
        mysqli_query($con,$sql);
        EmailContentBody("UOC-HELP-DESK Configuration","Welocme Undergraduate!","This is regarding the Confirmation of your university email.<br>".$test,$em);
        array_push($error_array,"<span style='color:#14c800;'> You are all set! Goahead and login!</span><br>");
        $_SESSION['reg_name'] = "";
        $_SESSION['reg_email'] = "";
        $_SESSION['reg_email2'] = "";
    }
}

//header('location:../views/register.php');
?>