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

        <div class="blog-card">
            <div class="meta">
                <div class="photo" style="background-image: url(https://cmb.ac.lk/wp-content/uploads/collagehouse-wide.jpg)"></div>
            </div>
        
            <div class="description">
            <h1>Student & Staff Affairs Unit</h1>
            <h2>Bursary, scholarships. Laptop Loan, Societies & Services</h2>
            
            <p class="read-more">
                <a href="https://cmb.ac.lk/student-staff-affairs/" target="blank">Know More</a>
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

        <h2>Services Offered</h2>

		<ul class="cards">
			<li class="cards_item_dep" id="topic1">
				<div class="depCard">
					<div class="depCard_content">
						<p class="depCard_title">Exam Issues</p>
						<p class="depCard_text">How to apply, appeal and check your eligibility</p>
						<!-- <button class="btn">View Services</button> -->
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<p class="depCard_title">Ragging / Violence</p>
						<p class="depCard_text">Privately log a complaint about harrsement etc.</p>
						<!-- <button class="btn">View Services</button> -->
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic3">
				<div class="depCard">
					<div class="depCard_content">
						<p class="depCard_title">Counselling Support</p>
						<p class="depCard_text">Seek the assistant of a professional counsellor</p>
						<!-- <button class="btn">View Services</button> -->
					</div>
				</div>
			</li>


			<li class="cards_item_dep" id="topic4">
				<div class="depCard">
					<div class="depCard_content">
						<p class="depCard_title">Other</p>
						<p class="depCard_text">See all other services</p>
						<!-- <button class="btn">View Services</button> -->
					</div>
				</div>
			</li>
		</ul>

		<br><br><hr><br>
		<div>
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Public</p>				
					

				<p class="title">I didn't receive Mahapola for two months now</p>			

				<p class="author">Lavinka Guruge</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->

				<p class="content">Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...</p>
					<br>

				<a href="#" class="btn-reply">Reply</a>
				<a href="#" class="btn-reply btn-other">Forward</a>
		
				<p class="me-too">12 students have had this issue</p>
				</div>
			</div>

						<div class="long-card" id="#long-card">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Public</p>				
					<br>
					
				<p class="title">I didn't receive Mahapola for two months now</p>			

				<p class="author">Lavinka Guruge</p>
				<p class="date">10th of October, 2021</p>
					<br><br>

				<p class="content">Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...</p>
					<br>

				<a href="#" class="btn-reply">Reply</a>
				<a href="#" class="btn-reply btn-other">Forward</a>
		
				<p class="me-too">12 students have had this issue</p>
				</div>
			</div>
		</div>
		<br><hr><br>


		

		<br><br>



		
		
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



