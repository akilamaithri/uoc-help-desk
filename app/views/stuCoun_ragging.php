<?php

require '../helpers/headerIn.php';
require '../views/complain.php';  
require '../helpers/stuCoun_header.php'; 

?>


<body>

        <!----------- Department card --------------->



<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
		<?php include('../views/pplCard.php'); ?>     

        
    </div>


	<div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">

		<br>

        <h2>Choose an option</h2>

		<ul class="cards">
			<li class="cards_item_dep" id="topic1">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Report a Ragging</h3>
						</div>
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Government Policies</h3>
						</div>
					</div>
				</div>
			</li>
		</ul>

		<br><br><hr><br>
		<div>
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">Article 144/A of Ragging & Violencce</p>			

				<p class="author">Senior Student Councellor</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">The following tasks are undertaken by the Office of the Student Counsellor: issuing of identity cards; allocation of permission of lecture halls for extra-curricular activities of students such as get-togethers, and meetings; issuing of permits for trips, display posters and cut-outs; providing temporary hostel facilities; assisting students facing emergencies; hold special language classes for students; and most importantly, to intervene and take necessary action with regard to student conflicts, within the University and outside and to stop acts of and take steps to prevent ragging. However, it is vital to emphasize that the main service of this office is to counsel students.
				<br><br><br>
				The following tasks are undertaken by the Office of the Student Counsellor: issuing of identity cards; allocation of permission of lecture halls for extra-curricular activities of students such as get-togethers, and meetings; issuing of permits for trips, display posters and cut-outs; providing temporary hostel facilities; assisting students facing emergencies; hold special language classes for students; and most importantly, to intervene and take necessary action with regard to student conflicts, within the University and outside and to stop acts of and take steps to prevent ragging. However, it is vital to emphasize that the main service of this office is to counsel students.
				
				</p>
					<br>

				<a href="#" class="btn-reply">View More</a>		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>

			<div class="long-card" id="#long-card">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">Cyber bullying in the New Normal</p>			

				<p class="author">Moderator</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">The following tasks are undertaken by the Office of the Student Counsellor: issuing of identity cards; allocation of permission of lecture halls for extra-curricular activities of students such as get-togethers, and meetings; issuing of permits for trips, display posters and cut-outs; providing temporary hostel facilities; assisting students facing emergencies; hold special language classes for students; and most importantly, to intervene and take necessary action with regard to student conflicts, within the University and outside and to stop acts of and take steps to prevent ragging. However, it is vital to emphasize that the main service of this office is to counsel students.
				<br><br><br>

				<img src="https://www.telethonkids.org.au/contentassets/65bcdc7825d64cbc9ba3048a5893731f/2.the-signs-of-bullying-1200-optimised.jpg" class="fitPhoto">
				</p>
					<br>

				<a href="#" class="btn-reply">View More</a>
				<!--<a href="#" class="btn-reply btn-other">Forward</a> -->
		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>

		<br><hr><br>
			</div></ul></li>
		<h2>Contact Us</h2>
		
		<ul class="cards">
			<li class="cards_item_staff">
				<div class="staffCard">
					
					<img src="https://cmb.ac.lk/wp-content/uploads/grp-silva-100x100.jpg" alt="Senior Student Councellor">
					<h2>Dr. Rajitha Silva</h2><hr>
					<p class="title">SENIOR STUDENT COUNSELLOR</p>
					<p class="title">grpriyankara@hrm.cmb.ac.lk</p>
					<p class="title">0773635218</p>
					<!-- <p><button>Contact</button></p> -->
				</div>
			</li>

			<li class="cards_item_staff">
				<div class="staffCard">
					
					<img src="../../public\img\profile_pics\defaults\head_deep_blue.png" alt="Senior Student Councellor">
					<h2>Mr. Nimesh Deshan</h2><hr>
					<p class="title">Technical Staff</p>
					<p class="title">grpriyankara@hrm.cmb.ac.lk</p>
					<p class="title">0773635218</p>
					<!-- <p><button>Contact</button></p> -->
				</div>
			</li>

			<li class="cards_item_staff">
				<div class="staffCard">
					
					<img src="../../public\img\profile_pics\defaults\head_emerald.png" alt="Senior Student Councellor">
					<h2>Mrs. Hiruni Weerasinghe</h2><hr>
					<p class="title">Staff</p>
					<p class="title">grpriyankara@hrm.cmb.ac.lk</p>
					<p class="title">0773635218</p>
					<!-- <p><button>Contact</button></p> -->
				</div>
			</li>
		</ul>
		
	</div>
        
	</div>

</div>





    <?php require '../helpers/footer.php';?>



