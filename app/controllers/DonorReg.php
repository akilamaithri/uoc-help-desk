<?php
require 'MailDonor.php';
require '../modules/connect.php';

if(isset($_POST['accept'])){
    // $date = date("Y-m-d H:i:s");
    //     $value = keyGenerater();
    //     $sql = "INSERT INTO user VALUES (NULL,'$name','$em','$password','$date','$profile_pic','0','0','P','','user',NULL,'');";
    //     mysqli_query($con,$sql);
    //     $sql = "SELECT LAST_INSERT_ID()";
    //     $query = mysqli_query($con,$sql);
    //     $data = mysqli_fetch_assoc($query);
    //     $stdId = $data['LAST_INSERT_ID()'];
    // $sql = "INSERT INTO resetpass(stdId,createdTime,valueIdentity) VALUES($stdId,'$date','$value');";
    //     $test = "<a href='http://localhost/uochelpdesk/app/views/confirm.php?value=".$value."&id=".$stdId."'>click</a>";
        mysqli_query($con,$sql);
        EmailContentBody("UOC-HELP-DESK Configuration","Welcome donors!","Donnaaaaattteeeeeeee.<br>");
       
}

?>