<?php 

require '../modules/connect.php';


$seasonTicketGET = mysqli_query($con, "SELECT * FROM seasonticket ORDER BY subdate ASC");

$row = mysqli_fetch_array($seasonTicketGET);

// assigning variables to table attributes

$id = $row['id'];

$state = $row['state'];

$acaYear = $row['year'];

$submitDate = $row['subdate'];

$name = $row['name'];

$street1 = $row['streetone'];

$street2 = $row['streettwo'];

$city = $row['city'];

$province = $row['province'];

$zipCode = $row['zip'];

$telephone = $row['num'];

$email = $row['mail'];

$gender = $row['gender'];

$startStation = $row['start'];

$endStation = $row['end'];

$distance = $row['distance'];


mysqli_close($con);
 


?>