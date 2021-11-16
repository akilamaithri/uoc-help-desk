<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  
require '../helpers/stuStaff_header.php'; 

?>

<div class="container">
<!-- whole body should be within this div -->



	<div class="column-1 box">
        <?php require '../views/pplCard.php'; ?>	  	
    </div>


<div class="column-2 box" >

		<h1>Bursary</h1>

		<div class="inquiry">
		<button  id="defaultOpen" class="inquirylink" onclick="openinq(event, 'functions')">Functions</button>

		<button class="inquirylink" onclick="openinq(event, 'announce')">Announcements</button>

		<button class="inquirylink" onclick="openinq(event, 'contact')">Contact Us</button>
		</div>


		<br>

<!-------------------------------------------------------------------- MenuBar -->

		<meta name="viewport" content="width=device-width, initial-scale=1">

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


<!-------------------------------------------------------------------- MenuBar -->


<!-------------------------------------------------------------------- options -->

	<div id="functions" class="inquirycontent">
        <h2>Choose an option</h2>

		<ul class="cards">
			<li class="cards_item_dep" id="topic1">
				<div class="depCard" >
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Application Form</h3>
						</div>
					</div>
				</div>
			</li>

			
            <li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Report an Issue</h3>
						</div>
					</div>
				</div>
			</li>
		</ul>
        <br><br><br>
        <ul class="cards" style="width:90%">
				<li >

					
						<div class="depCard_content" style=" border-radius:5px; border:1px solid rgb(173, 205, 206);">
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">  Bursary is a financial assistance given to needy students. An Application for Bursary is issued to all freshers selected to the University of Colombo along with the registration forms. The students should furnish the information with the relevant documents related to the details requested and submit the duly perfected application to the GramaNiladhari of the Division.
                          </br></br>
                        After certifying the details, the application will be forwarded to get counter signed by the Divisional Secretary and forward the same to the University by Registered Post. Transferred Students are requested to instruct the earlier University to forward their bursary applications to this University. No duplicate applications are issued except for a loss of an application.</p>
						</div>
	
					
		</ul>
	</div>

<!-------------------------------------------------------------------- options -->

<!------------------------------------------------------------------announcements -->

	<div id="announce" class="inquirycontent">

		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">Calling Applications for Bursary Scholarship For 2nd , 3rd and 4th year students</p>			

				<p class="author">Assistent Registrar</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">Applications are hereby called from students of 2nd, 3rd, and 4th years for the bursary scholarship granted by the University Grants Commission.
                </br></br>
                   Students who are not receiving either Mahapola or Bursary are eligible to apply for the above.
                   </br></br>
                 Students are kindly requested to download the application form from the Undergraduate VLE. The duly completed application forms should be forwarded to the Assistant Registrar/ Academic and Publications UCSC, No. 35, Reid Avenue, Colombo 07, on or before 22nd October 2020.    
				</p>
					<br>

				<a href="#" class="btn-reply">View More</a>		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>

			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">Bursary Payment (First Year Students)</p>			

				<p class="author">Moderator</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">Payment instructions were sent to the Banks, hope all students will receive the first installment on or before 30th November 2020.
					</p>
					<br>

				<a href="#" class="btn-reply">View More</a>
				<!--<a href="#" class="btn-reply btn-other">Forward</a> -->
		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>
		<br><hr>

	</div>

<!------------------------------------------------------------------ announcements -->

<!-------------------------------------------------------------------- contact us -->


	<div id="contact" class="inquirycontent">
		<h2>Contact Us</h2>
		<ul class="cards">
			
			<li class="cards_item_staffpage">
				<div class="staffCard" >
					<?php include '../helpers/people/ssa_monika.php'; ?>
				</div>
			</li>
			
		</ul>
	
	</div>

	<!-------------------------------------------------------------------- contact us -->


<script>
				document.getElementById("defaultOpen").click();
</script>


</div>
        
</div>





    <?php require '../helpers/footer.php';?>
