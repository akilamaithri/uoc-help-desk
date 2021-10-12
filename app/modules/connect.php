<?php
ob_start();          //Turns on output buffering
$con = mysqli_connect("localhost", "root", "", "uochelpdesk"); 
$timezone = date_default_timezone_set("Asia/Colombo");
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>