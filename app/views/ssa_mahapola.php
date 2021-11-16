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
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">It’s a Financial assistance is given to students in the form of Mahapola Scholarships and the University Grants Commission selects the students every academic year who are eligible to receive the Mahapola according to the selection criteria. The selected List of names for each academic year is forwarded to Mahapola Trust Fund to make the payment. Awards are given to students by conducting Awards Ceremony at University /District Levels every year. The scholarships will be cancelled to those who fail to collect the certificates of awards at the awards ceremony.</p>
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
					

				<p class="title">MAHAPOLA SCHOLARSHIP INCOMPLETE APPLICATIONS - 2020/2021</p>			

				<p class="author">Assistent Registrar</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">As informed by the Mahapola Scholarship Trust Fund, the following students have submitted incomplete applications to the Mahapola Trust Fund. Therefore please be good enough to complete the appropriate details by using www.mahapola.lk link on or before 31.08.2021.</p>
					<br>

				<a href="#" class="btn-reply">View More</a>		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>

			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">Mahaphola Payment (First Year Students) - Please verify bank details</p>			

				<p class="author">Moderator</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">	
We have published the list of eligible students for the Mahapola/Bursary and kindly request those students to verify their bank details on or before 20th April 2020. Please click here to see the details.

Since it takes time to pay the Mahaphola scholarship installments, all eligible students will be paid Bursary until we receive the confirmation from the Mahapola Trust Fund.</p>
					<br>

				<a href="#" class="btn-reply">View More</a>
				<!--<a href="#" class="btn-reply btn-other">Forward</a> -->
		
				<!-- <p class="me-too">12 students have had this issue</p> -->
				</div>
			</div>
	</div>
<!------------------------------------------------------------------ announcements -->

<!-------------------------------------------------------------------- contact us -->

	<div id="contact" class="inquirycontent">
		
		<h2>Contact Us</h2>
		
		<ul class="cards">
			
			<li class="cards_item_staff">
				<div class="staffCard" >
		
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
