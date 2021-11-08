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
		<h1 style=" text-transform:uppercase;">Student union</h1>
		
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
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">  The Student and Staff Welfare Branch of the University conducts the elections under the guidance of the Deans of the respective Faculties. The Commission considered the request of CVCD and agreed with the CVCD proposal to hold the Students’ Union Elections at the end of each academic year. Accordingly, elections are conducted at the end of each academic year. Each Faculty decides the dates for receiving nominations and holding elections and informs the Student and Staff Welfare Branch. The relevant Notices and Letters are prepared and forward to each faculty at their request to hold an election according to the Students’ Union By-Laws No.1 of 1989.</p>
</div>

					
</ul>
		<br><br><hr><br>
		<div>
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

				<p class="title">ELECTION FOR SELECTION OF THE OFFICE BEARERS TO THE STUDENT’S UNION - UCSC - 2021</p>			

				<p class="author">Assistant Registrar</p>
				<p class="date">10th of October, 2020</p>
					<!-- <br><br><br> -->

				<p class="content">If there are any errors or omissions in the list of Nominations they should be informed to the Election Officer on or before 03.00 p.m. on 18.05.2021 using following Zoom credentials.

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
