<?php 
    include("../modules/connect.php");
    include("../controllers/User.php");
    include("../controllers/Complain.php");

    $limit = 10;

    $complain = new Complain($con,$_REQUEST['userLoggedIn']);
    $complain->loadComplain($_REQUEST,$limit);
?>