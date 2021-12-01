<?php 

require '../modules/connect.php';


if(isset($_POST['submit']))
{
  $yearcnt=$_POST['year'];
  $subdate=$_POST['subdate'];
  $subname=$_POST['name'];
  $streetone=$_POST['streetone'];
  $streettwo=$_POST['streettwo'];
  $city=$_POST['city'];
  $province=$_POST['province'];
  $zip=$_POST['zip'];
  $num=$_POST['num'];
  $mail=$_POST['mail'];
  $male=$_POST['male'];
  $female=$_POST['female'];
  $startdes=$_POST['start'];
  $enddes=$_POST['end'];
  $distance=$_POST['distance'];
  $esign=$_POST['esign'];
  

  $query=mysqli_query($con,"INSERT INTO seasonticket VALUES(NULL,'$yearcnt','$subdate','$subname','$streetone','$streettwo','$city','$province','$zip','$num','$mail','$male','$female','$startdes','$enddes','$distance','$esign')");

  if($query){
    echo "Success";
  }
  else{
    echo "Failed";
  }

}

?>