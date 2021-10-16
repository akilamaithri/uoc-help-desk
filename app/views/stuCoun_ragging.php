<?php
require '../modules/connect.php';
require '../controllers/register.php';
require '../controllers/login.php';
require '../helpers/header.php';
?>

<html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>
    </head>

<body>

        <!----------- Department card --------------->

    <div class="depcard">

        <div class="blog-card" onclick="location.href='stuCoun.php';">
            <div class="meta">
                <div class="photo" style="background-image: url(https://cmb.ac.lk/wp-content/uploads/collagehouse.jpg)"></div>
            </div>
        
            <div class="description">
            <h2 onclick="location.href='stuCoun.php';">Student Councellor's Office</h2>
            <h1>Ragging</h1>
            
            <p class="read-more">
                <a href="https://cmb.ac.lk/sco/" target="blank">Know More</a>
            </p>
            </div>
        </div>
    </div>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <div class="card">
          
		  	<div class="user_details column">
				<!-- <a href="<?php echo $userLoggedIn; ?>">  <img src="<?php echo $user['profile_pic']; ?>"> 
				</a> -->

				<br>

					<!-- <a href="<?php echo $userLoggedIn; ?>">
						<?php 
							echo $user['first_name'] . " " . $user['last_name'];
						?> 
					</a> 
					<br>
					<?php echo "Posts: " . $user['num_posts']. "<br>"; 
					echo "Likes: " . $user['num_likes'];

					?>-->

			</div>

            <img src="../../public/img/default/avatar-girl.png" alt="profile-pic" style="width:50%; border-radius: 50%; margin-top: 1rem">

            <h2>Lavinka Guruge</h2>
            <p class="pplTitle">Faculty of Science</p>

			<p><button class="pplButton pplButtonMain">View Profile</button></p>
			<p><button class="pplButton" onclick="openForm()">Add a complaint</button></p>
			<p><button class="pplButton">My Inquiries</button></p>
			<p><button class="pplButton">Messages</button></p>
			<p><button class="pplButton">Help</button></p><br>
			<p></p>

        </div>
        
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

<div class = "comp_container" id="complainBox">
    <div class="complain_box">

        <div class="title">Complaint Form</div>

        <form name = "complaint-form" action="#">

            <div class="comp_details">
            
                <input type ="radio" id="html" name="compType" value="complaint" checked="checked">
                <label for="complaint">Complaint</label>
                
                <input type = "radio" id="html" name="compType" value="notice">
                <label for="notice">Notice |</label>
                
                <input type = "checkbox" id="privacy" name="type" value="public">
                <label for="notice">Private</label>
        
                <div class="comp_box">	
                    <select name="issuetype" id="issuetype">
                        <option value="0">Select the type of the issue</option>
                        <option value="fin">Finance Issues</option>
                        <option value="bur">Bursary Issues</option>
                        <option value="hos">Hostel Issues</option>
                        <option value="med">Medical Issues</option>
                        <option value="lap">Laptop Loan Issues</option>
                        <option value="rag">Ragging and Violance Issues</option>
                        <option value="aca">Academic Issues</option>
                    </select>
                </div>
                
                <input type="text" id="Title" name="Title" placeholder="Title" required= "">

                <textarea name="issue" placeholder="Add description to your issue" required= "" style="height:100px"></textarea>

                <br><br>
                <div class="btn">
                    <input type="submit" value="Send" class="mainbtn">
                </div>
                <div class="btn">
                    <button class="mainbtn" onclick="closeForm()">Close</button>
                </div>
                <br>
                
                
                <br>
            </div>
		</form>
    </div>
</div>



    <?php require '../helpers/footer.php';?>



