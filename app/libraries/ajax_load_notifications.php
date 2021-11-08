<?php
require '../modules/connect.php';
require '../controllers/User.php';
require '../controllers/Notification.php';

$limit = 7; //Number of messages to load

$notification = new Notification($con, $_REQUEST['userLoggedIn']);
echo $notification->getNotifications($_REQUEST, $limit);

?>