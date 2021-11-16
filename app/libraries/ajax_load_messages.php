<?php 
require '../modules/connect.php';
require '../controllers/User.php';
require '../controllers/Message.php';

$limit = 7;

$message = new Message($con,$_REQUEST['userLoggedIn']);
echo $message->getConvosDropdown($_REQUEST,$limit);
?>