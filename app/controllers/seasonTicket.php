<?php 

require '../modules/connect.php';

if(isset($_POST['submit']))
{
  $yearcnt=$_POST['year'];
  $subdate=$_POST['subdate'];
  $subname=$_POST['initialName'];
  $streetone=$_POST['streetone'];
  $streettwo=$_POST['streettwo'];
  $city=$_POST['city'];
  $province=$_POST['province'];
  $zip=$_POST['zipCode'];
  $num=$_POST['conNo'];
  $mail=$_POST['mailAddress'];
  $gender=$_POST['genderType'];
  $startdes=$_POST['startPoint'];
  $enddes=$_POST['endPoint'];
  $distance=$_POST['distance'];
  $esign=$_POST['esign'];
  
  $sql = "INSERT INTO seasonticket (year, subdate, name, streetone, streettwo, city, province, zip, num, mail, gender, start, end, distance, esign) 
  
  VALUES('$yearcnt','$subdate','$subname','$streetone','$streettwo','$city','$province','$zip','$num','$mail','$gender','$startdes','$enddes','$distance','$esign')";


 if (mysqli_query($con, $sql)) 
 {
    header("Location:../views/ssa_seasonticket.php");
 } else {
    echo "Error: " . $sql . ":-" . mysqli_error($con);
 }

   $email_check = mysqli_query($con, "SELECT * FROM user WHERE email='$email'");
	$row = mysqli_fetch_array($email_check);
	$matched_user = $row['name'];

 mysqli_close($con);
 
}

?>