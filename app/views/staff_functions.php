<?php
require '../helpers/headerIn.php';
require '../views/announcement.php'; 
require '../controllers/login.php';
require '../controllers/ssa_seasonGET.php';
require '../controllers/ssa_vehicleGET.php';
require '../modules/connect.php';

?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/staCard.php'; ?>
        
    </div>

	<div class="column-2 box" style="width:100%">
        
        <h2>Received Applications</h2>

		<div class="inquiry">

				<button class="inquirylink" onclick="openinq(event, 'hostel')">Hostel</button>

                <button class="inquirylink" onclick="openinq(event, 'laptop')">Laptop Loan</button>

                <button id="defaultOpen" class="inquirylink" onclick="openinq(event, 'season')">Season Ticket</button>

				<button class="inquirylink" onclick="openinq(event, 'vehicle')">Vehicle Pass</button>

				<button class="inquirylink" onclick="openinq(event, 'bursary')">Bursary</button>

				<button class="inquirylink" onclick="openinq(event, 'All')">All applications</button>
		</div>


		<script>


			function openinq(evt, InqName) 
			{
				// Declare all variables
				var i, inquirycontent, inquirylink;

				// Get all elements with class="inquirycontent" and hide them
				inquirycontent = document.getElementsByClassName("inquirycontent");
				for (i = 0; i < inquirycontent.length; i++) {
					inquirycontent[i].style.display = "none";
				}

				// Get all elements with class="inquirylink" and remove the class "active"
				inquirylink = document.getElementsByClassName("inquirylink");
				for (i = 0; i < inquirylink.length; i++) {
					inquirylink[i].className = inquirylink[i].className.replace(" active", "");
				}

				document.getElementById(InqName).style.display = "block";
				evt.currentTarget.className += " active";
			}

		
		</script>


        <!----------------------- Season Ticket ------------------------>
        <style>


.agree a:visited {
    color: #f00;
  
}

</style>
        <div id="season" class="inquirycontent">

		    <h3>Season Ticket Applications</h3>

                    <table class="dataTable">
                        <thead>
                        <tr>
                            <th>Posted</th>
                            <th>Name</th>
                            <th>Academic Year</th>
                            <th>Category</th>
                            <th>View</th>
                            <th >State</th>
                        </tr>
                        </thead>
                        
                        <?php 

                            while($row = mysqli_fetch_array($seasonTicketGET)) 
                                {         
                                    echo '
                                    
                                    <tr>
                                    <td>'.$row['subdate'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['year'].'</td>
                                    <td>Season Ticket</td>
                            
                                    <td class="agree" id="agree"><a href="ssa_app_season.php?id='.$row['id'].'" id="agree">View</a></td>
                                    
                                </tr>
                               
                                    ';       
                                                
                                }
                        ?>

                       

                    </table>
        </div>
        

        <!----------------------- Vehicle Pass ------------------------>

        <div id="vehicle" class="inquirycontent">

		    <h3>Vehicle Pass Applications</h3>

                    <table class="dataTable">
                        <thead>
                        <tr>
                            <th>Posted</th>
                            <th>Name</th>
                            <th>Vehicle</th>
                            <th>Category</th>
                            <th>View</th>
                            <th>State</th>
                        </tr>
                        </thead>

                        <?php 

                            while($row = mysqli_fetch_array($vehicleGET)) 
                                {         
                                    echo '
                                        <tr>
                                            <td>'.$row['date'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['vehicle'].'</td>
                                            <td>Vehicle Pass</td>
                                            <td class="agree" id="agree"><a href="ssa_app_vehicle.php?id='.$row['id'].'" id="agree">View</a></td>
                                    
                                            <td></td>
                                            </td>
                                            </tr>
                                    ';     
                                                
                                }
                        ?>

                       

                    </table>
        </div>

        
        <!----------------------- Bursary ------------------------>

        <div id="bursary" class="inquirycontent">

		    <h3>Bursary Applications</h3>

                    <table class="dataTable">
                        <thead>
                        <tr>
                            <th>Posted</th>
                            <th>Name</th>
                            <th>Vehicle</th>
                            <th>Category</th>
                            <th>View</th>
                            <th>State</th>
                        </tr>
                        </thead>

                        <?php 

                            while($row = mysqli_fetch_array($vehicleGET)) 
                                {         
                                    echo '
                                        <tr>
                                            <td>'.$row['date'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['bursary'].'</td>
                                            <td>Bursary</td>
                                            <td class="agree" id="agree"><a href="ssa_app_vehicle.php?id='.$row['id'].'" id="agree">View</a></td>
                                    
                                            <td></td>
                                            </td>
                                            </tr>
                                    ';     
                                                
                                }
                        ?>

                       

                    </table>
        </div>

	</div>
        
	

</div>

<script>
	document.getElementById("defaultOpen").click();
</script>

<?php require '../helpers/footer.php';?>



