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
				<div class="depCard" style="background-color:#f1e496;">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Application Form</h3>
						</div>
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic2">
				<div class="depCard" style="background-color:#f1e496;">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Submission link</h3>
						</div>
					</div>
				</div>
			</li>

            <li class="cards_item_dep" id="topic2">
				<div class="depCard" style="background-color:#f1e496;">
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
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">  Student & Staff Affairs branch maintains 12 hostels for the undergraduate students in the following locations. 
     Students from the families in the lower-income group and from distant residences are given preference. Rs.2,000/- is charged as the hostel fee for an academic year and Rs.1,000/- is charged as a hostel admission fee. The warden is the senior member of the Academic Staff and he/she is responsible for the disciplinary matters in hostels under the guidance and control of the Vice-Chancellor.
     The Sub – Warden is a resident fulltime sub-warden resides in each hostel.</p>
					</div>
				</li>
					
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
					

				<p class="title">Undergraduate students’ hostel accommodation – 2020/2021 Intake</p>			

				<p class="author">Assistant Registrar</p>
				<p class="date">10th of October, 2020</p>
					<!-- <br><br><br> -->

				<p class="content">This is to inform you that, according to the evaluation criteria of selection and accommodation of students for UCSC hostels, applications were called from the students who registered from out of Colombo and requisite financial support to continue their studies. According to the recommendation of the Public Health Inspector of the University of Colombo, UCSC can accommodate only 12 students for the Boys’ hostel and 10 students for the Girls’ hostel due to the current Covid-19 pandemic situation.
                </br></br>
                   see the attachment for a list of student details.
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
					

				<p class="title">Google Form </p>			

				<p class="author">Moderator</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">The selected students for the hostel bursary are kindly requested to fill the following google form to obtain their account details.<br><br><br>

					</p>
					<br>

				<a href="#" class="btn-reply">View More</a>
				<!--<a href="#" class="btn-reply btn-other">Forward</a> -->
		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>
	</div>

<!------------------------------------------------------------------ announcements -->

<!-------------------------------------------------------------------- contact us -->

	<div id="contact" class="inquirycontent" >
	
	<div>
	<br>
	</div>
		<h2>Contact Us</h2>
		
		<ul class="cards">
			
			<li class="cards_item_staff" >
				<div class="staffCard">
		
					<img src="../../public/img/default/avatar-girl.png" alt="Senior Student Councellor">
					<h2>Ms Monika Bamunuarachchi</h2><hr>
					<p class="title">MA -Bursary, laptop loans</p>
					<p class="title">moni@ssa.cmb.ac.lk</p>
				</div>
			</li>
			
		</ul>

		<ul class="cards">
			
			<li class="cards_item_staff" >
				<div class="staffCard">
		
					<img src="../../public/img/default/avatar-girl.png" alt="Senior Student Councellor">
					<h2>Ms Monika Bamunuarachchi</h2><hr>
					<p class="title">MA -Bursary, laptop loans</p>
					<p class="title">moni@ssa.cmb.ac.lk</p>
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
