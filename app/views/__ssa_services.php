<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  
?>

        <!----------- Department card --------------->

<div class="depcard">

	<div class="blog-card" onclick="location.href='ssa_home.php';">
		<div class="meta">
			<div class="photo" style="background-image: url(https://cmb.ac.lk/wp-content/uploads/collagehouse.jpg)"></div>
		</div>
	
		<div class="description">
		<h2 onclick="location.href='ssa_home.php';">Student and Staff Affairs Division</h2>
		<h1 style=" text-transform:uppercase;">Services</h1>
		
		<p class="read-more">
			<a href="https://cmb.ac.lk/student-staff-affairs/" target="blank">Know More</a>
		</p>
		</div>
	</div>
</div>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
        <?php require '../views/pplCard.php'; ?>	  	
    </div>


	<div class="column-2 box" >

		<br>

        <h2>Choose an option</h2>

		<ul class="cards">
			<li class="cards_item_dep" id="topic1">
				<div class="depCard">
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
							<h3>Submission link</h3>
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
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">  Season Tickets at concession rates for Students to be used for the train services and public transport operated by Sri Lanka Transport Board are issued only for a limited distance.</p>
</div>

					
</ul>
		<br><br><hr><br>
		<div>
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title"></p>			

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

		<br><hr><br>
			</div></ul></li>
		<h2>Contact Us</h2>
		
		<ul class="cards">
			

			<li class="cards_item_staff">
				<div class="staffCard" >
					
					<img src="../../public\img\profile_pics\defaults\head_deep_blue.png" alt="Senior Student Councellor">
		
					<p class="title" style="line-height:1.3;">Assistant Registrar,</br>
					College House, 94,</br>
				    Cumaratunga Munidasa Mawatha,</br>
				    Colombo 03.</br>
					Email: ar@ssa.cmb.ac.lk</br>
					Tel/Fax: +94 112582336 | Ext: 7035</p>
					<!-- <p><button>Contact</button></p> -->
				</div>
			</li>

			
		</ul>
		
	</div>
        
	</div>

</div>





    <?php require '../helpers/footer.php';?>
