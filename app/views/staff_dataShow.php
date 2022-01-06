<?php
require '../helpers/headerIn.php';
require '../views/announcement.php'; 
// require '../views/staff_functions.php'; 
require '../controllers/login.php';
require '../controllers/ssa_seasonGET.php';
require '../controllers/formHandler.php';
require '../modules/connect.php';

$thisTable = 'seasonticket';

$id = $_GET['id'];

// $result = mysqli_query($con, "SELECT * FROM seasonticket WHERE id=$id");

$result = returnQuery($thisTable, $id);

if($row = mysqli_fetch_array($result))
{
    $id = $row['id'];
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

            // $previous= mysqli_query($con, "SELECT * FROM seasonticket WHERE id<$id order by id DESC");

            $previous = previousBtnQuery($thisTable, $id);

            if($row = mysqli_fetch_array($previous))
            {
                    echo '<a href="staff_dataShow.php?id='.$row['id'].'"><button type="button" class="navBtn">Previous</button></a>'; 
            }  

            // $next= mysqli_query($con, "SELECT * FROM seasonticket WHERE id>$id order by id ASC");

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

                    <span>Address: Street-1</span>
                    <p><?php echo $street1 ?></p>

                    <span>Address: Street-2</span>
                    <p><?php echo $street2 ?></p>

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

                    <span>Email</span>
                    <p><?php echo $email ?></p>

                    <span>Gender</span>
                    <p><?php echo $gender ?></p>

                    <span>Start Station</span>
                    <p><?php echo $startStation ?></p>

                    <span>End Station</span>
                    <p><?php echo $endStation ?></p>

                    <span>Distance between stations</span>
                    <p><?php echo $distance ?></p>
                </div>

            </div>

        </div>

	</div>
        
	

</div>

<?php require '../helpers/footer.php';?>



