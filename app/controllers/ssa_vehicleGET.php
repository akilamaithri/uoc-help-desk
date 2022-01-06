<?php 

require '../modules/connect.php';

$vehicleGET = mysqli_query($con, "SELECT * FROM vehi_form ORDER BY id ASC");

$row = mysqli_fetch_array($vehicleGET);

// assigning variables to table attributes

$id = $row['id'];

// $state = $row['state'];

$acaYear = $row['year'];

$submitDate = $row['date'];

$name = $row['name'];

$address = $row['address'];

$city = $row['city'];

$province = $row['province'];

$zipCode = $row['zip'];

$telephone = $row['contact'];

$id_no = $row['id_no'];

$faculty = $row['faculty'];

$gender = $row['gender'];

$vehicle = $row['vehicle'];

$vehicleNo = $row['vehi_no'];

$date = $row['date'];


mysqli_close($con);
 


?>