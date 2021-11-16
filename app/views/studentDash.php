<?php

require '../modules/connect.php';
require '../controllers/register.php';
require '../controllers/login.php';
require '../helpers/header.php';
?>

<html>

require '../helpers/headerIn.php';
require '../views/complain.php';  
// require '../controllers/User.php';
// require '../controllers/Complain.php';
// mekata pahalin ekk enna one (5)-(2)
//session_destroy();
// require '../views/complain.php';   


if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($_POST['complain_text'],'none');
    header("Location:studentDash.php");
}
?>

<!-- <html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>
    </head>


<body>

<body> -->



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

			<p><button class="mainbtn pplButtonMain">View Profile</button></p>
			<p><button class="pplButton" onclick="openForm()">Add a complaint</button></p>
			<p><button class="pplButton">My Inquiries</button></p>
			<p><button class="pplButton">Messages</button></p>
			<p><button class="pplButton">Help</button></p><br>
			<p></p>

        </div>
        
    </div>


	<div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">
        <h1>Dashboard</h1>
		<br>

		<?php include('../views/pplCard.php'); ?>     
	</div>


	<div class="column-2 box" >

		

        <h2>Dashboard</h2>


		 <ul class="cards">
				<li class="cards_item" id="SSA">

					<div class="dashCard" style="background-color: #7dff9e">
						<div class="dashCard_content">
							<h2 class="dashCard_title">Student & Staff Affairs</h2>
							<p class="dashCard_text">Bursary, Scholarships, Laptop Load, Societies & Services</p>
							<!-- <button class="btn card_btn">View Services</button> -->
						</div>
					</div>
				</li>

				<li class="cards_item" id="SCO">
					<div class="dashCard" style="background-color: #ff7d7d">

					<div class="ssaCard">
					<div class="dashCard" onclick="location.href='ssa_home.php';">
						<div class="dashCard_content">
							<h2 class="dashCard_title">Student & Staff Affairs</h2>
							<p class="dashCard_text">Student bursary, Scholarships, Laptop Loan, Hostels, Societies</p>
							<!-- <button class="btn card_btn">View Services</button> -->
						</div>
					</div>
					</div>
				</li>

				<li class="cards_item" id="SCO">
					<div class="counCard">
					<div class="dashCard" onclick="location.href='stuCoun.php';">

						
						<div class="dashCard_content">
						<h2 class="dashCard_title">Student Councellor</h2>
						<p class="dashCard_text">Counselling, Personal / Academic problems, Stress, Health</p>
						<!-- <button class="btn card_btn">Read More</button> -->
						</div>
					</div>

				</li>

				<li class="cards_item" id="SCHOL">
					<div class="dashCard" style="background-color: #839aff">

					</div>
				</li>

				<li class="cards_item" id="SCHOL">
					<div class="scholCard">
					<div class="dashCard">

						<div class="dashCard_content">
						<h2 class="dashCard_title">Scholarships</h2>
						<p class="dashCard_text">Mahapola, Bursary and all kinds of scholarships</p>
						<!-- <button class="btn card_btn">Read More</button> -->
						</div>
					</div>

					</div>

				</li>	
		</ul>

		<br>


		<h1>Popular Topics</h1>

		<h2>Popular Topics</h2>

		<br>
		<!-- auto generating topics from database data -->

		<ul class="cards">
				
				<li class="cards_item_small">

						<button class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Laptop Loans</h4>
							</div>
						</button>

						<div class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Laptop Loans</h4>
							</div>
						</div>

				</li>

				<li class="cards_item_small">
						<div class="dashCard-topics">
							<div class="dashCard_content">

								<h4>mahapola</h4>

								<h4>Mahapola</h4>

							</div>
						</div>
				</li>


				<li class="cards_item_small">
						<div class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Student ID</h4>
							</div>
						</div>
				</li>


				<li class="cards_item_small" >
						<div class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Bursary</h4>
							</div>
						</div>
				</li>

				<li class="cards_item_small">
						<div class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Exam</h4>
							</div>
						</div>
				</li>
		</ul>


		<br><hr><br>
		<div>
		<h1> Announcements</h1>
		
			<div class="long-card" id="#long-card">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Public</p>				
					<br>

				<p class="title">I didn't receive Mahapola for two months now</p>			

				<p class="author">Lavinka Guruge</p>
				<p class="date">10th of October, 2021</p>
					<br><br>

		<br><br><hr><br>
		<h2>Public Complaints</h2>
		<h5></h5>
		<!---------------------------- New Add -->
		<!-- <div class="main_column column"> -->
			
			<!-- <form class="complain_form" action="studentDash.php" method="POST">
				<textarea name="complain_text" id="complain_text" placeholder="Add a Public Complain "></textarea> 

				<input type="submit" name="complain" id="complain_button" value="Publish"><hr>
			</form> -->


			<div class="complain_area"></div>
			<img id="loading" src="../../public/img/loading.gif">

		<!-- </div> -->

		<script>

			var userLoggedIn = '<?php echo $userLoggedIn; ?>';
			$(document).ready(function(){
				$('#loading').show();
				$.ajax({
					url: "../libraries/ajax_load_complain.php",
					type: "POST",
					data: "page=1&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(data){
						$('#loading').hide();
						$('.complain_area').html(data);
					}
				});
				$(window).scroll(function(){
					var height = $('.complain_area').height();
					var scroll_top = $(this).scrollTop();
					var page = $('.complain_area').find('.nextPage').val();
					var noMoreComplain = $('.complain_area').find('.noMoreComplain').val();

					if((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMoreComplain == 'false'){
					$('#loading').show();

					var ajaxReq = $.ajax({
					url: "../libraries/ajax_load_complain.php",
					type: "POST",
					data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
					cache:false,

					success: function(response){
						$('.complain_area').find('.nextPage').remove();
						$('.complain_area').find('.noMoreComplain').remove();

						$('#loading').hide();
						$('.complain_area').append(response);
					}
				});

			}
			return false;
				});

			});

		</script>


	


		<div>

		<br>
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card">
				<div class="card-content">
					<p class="privacy">Public</p>				
					

				<p class="title">Launch of the UOC_HelpDesk System to ease the communication</p>			

				<p class="author">HelpDesk Admin</p>
				<p class="date">10th of October, 2021</p>
					<!-- <br><br><br> -->


				<p class="content">Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...</p>
					<br>
		
				<p class="me-too">12 students have had this issue</p>

				<a href="#" class="btn-reply">View More</a>
				<a href="#" class="btn-reply btn-other">Forward</a>
		

				</div>
			</div>

						<div class="long-card" id="#long-card">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Public</p>				
					<br>
					
				<p class="title">I didn't receive Mahapola for two months now</p>			
			
        <p class="title">Guidelines for Students</p>			

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



		<h3> Departments</h3>

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

		<br><br>


			<!-- <div class="main_column column"> -->
			<form class="post_form" action="index.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload">
				<textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
				<input type="submit" name="post" id="post_button" value="Post" class="mainbtn">
				<hr>

			</form>

			<div class="posts_area"></div>
			<!-- <button id="load_more">Load More Posts</button> -->
			<img id="loading" src="assets/images/icons/loading.gif">


		<!-- </div> -->
	

		<!-- <div class="user_details column">

			<h4>Popular</h4>

			<div class="trends">
				<?php 
				$query = mysqli_query($con, "SELECT * FROM trends ORDER BY hits DESC LIMIT 9");

				foreach ($query as $row) {
					
					$word = $row['title'];
					$word_dot = strlen($word) >= 14 ? "..." : "";

					$trimmed_word = str_split($word, 14);
					$trimmed_word = $trimmed_word[0];

					echo "<div style'padding: 1px'>";
					echo $trimmed_word . $word_dot;
					echo "<br></div><br>";


				}

				?>
			</div>


		</div> -->

		


		

		
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

<iframe name="myframe1" id="myframe1" width="100%" height="100%" src="about:blank"></iframe>





<?php require '../helpers/footer.php';?>
>>>>>> main



