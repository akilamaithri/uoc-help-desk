<?php

require '../modules/connect.php';
 
if(isset($_POST['submit']))
        {    
        $year = $_POST['year'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $zip = $_POST['zip'];
        $contact = $_POST['contact'];
        $id_no = $_POST['id_no'];
        $faculty = $_POST['faculty'];
        $gender = $_POST['gender'];
        $vehicle = $_POST['vehicle'];
        $vehi_no = $_POST['vehi_no'];
        $date = $_POST['date'];
        $sql = "INSERT INTO vehi_form (year,name,address,city,province,zip,contact,id_no,faculty,gender,vehicle,vehi_no,date) VALUES('$year','$name','$address','$city','$province','$zip','$contact','$id_no','$faculty','$gender','$vehicle','$vehi_no','$date')";
     
             if (mysqli_query($con, $sql)) {
                header("Location:../views/ssa_vehipass.php");
             } else {
                echo "Error: " . $sql . ":-" . mysqli_error($con);
             }
             mysqli_close($con);
        }
    
        ?>