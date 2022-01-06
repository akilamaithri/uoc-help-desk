<?php
require '../helpers/headerIn.php';
require '../views/announcement.php'; 
// require '../views/staff_functions.php'; 
require '../controllers/login.php';
require '../controllers/ssa_vehicleGET.php';
require '../controllers/formHandler.php';
require '../modules/connect.php';

$thisTable = 'vehi_form';

$id = $_GET['id'];

// $result = mysqli_query($con, "SELECT * FROM vehi_form WHERE id=$id");

$result = returnQuery($thisTable, $id);

if($row = mysqli_fetch_array($result))
{
    $id = $row['id'];
    $acaYear = $row['year'];
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
}

?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/staCard.php'; ?>
        
    </div>

	<div class="column-2 box" style="width:98%;">
        
        <h2>Received Applications</h2>

        <?php
        
            // echo prevButton($id);
            // echo nextButton($id);

            // $previous= mysqli_query($con, "SELECT * FROM vehi_form WHERE id<$id order by id DESC");

            $previous = previousBtnQuery($thisTable, $id);

            if($row = mysqli_fetch_array($previous))
            {
                    echo '<a href="staff_dataShow.php?id='.$row['id'].'"><button type="button" class="navBtn">Previous</button></a>'; 
            }  

            // $next= mysqli_query($con, "SELECT * FROM vehi_form WHERE id>$id order by id ASC");

            $next = nextBtnQuery($thisTable, $id);

            if($row = mysqli_fetch_array($next))
            {
                    echo '<a href="staff_dataShow.php?id='.$row['id'].'"><button type="button" class="navBtn">Next</button></a>'; 
            }  

        ?>

        <br>

        <div class="userData">
            
            <div class="layout">

			    <div class="col-45">

                    <span>ID</span>
                    <p><?php echo $id ?></p>

                    <span>Submitted Date</span>
                    <p><?php echo $submitDate ?></p>

                    <span>Name</span>
                    <p><?php echo $name ?></p>

                    <span>Academic Year</span>
                    <p><?php echo $acaYear ?></p>

                    <span>Address</span>
                    <p><?php echo $address ?></p>

                   <span>Address: City</span>
                    <p><?php echo $city ?></p>

                    <span>Address: Province</span>
                    <p><?php echo $province ?></p>
                </div>

                <div class="col-1"></div>

                <div class="col-45">
                    <span>Address: ZipCode</span>
                    <p><?php echo $zipCode ?></p>

                    <span>Telephone</span>
                    <p><?php echo $telephone ?></p>

                    <span>NIC</span>
                    <p><?php echo $id_no ?></p>

                    <span>Gender</span>
                    <p><?php echo $gender ?></p>

                    <span>Vehicle</span>
                    <p><?php echo $vehicle ?></p>

                    <span>Vehicle No</span>
                    <p><?php echo $vehicleNo ?></p>

                    <span>Submission Date</span>
                    <p><?php echo $date?></p>
                   

                </div>

            </div>
           
            


 

        </div>

	</div>
        
	

</div>

<?php require '../helpers/footer.php';?>



