<?php
// require '../modules/connect.php';
// require '../controllers/register.php';
// require '../controllers/login.php';
require '../helpers/headerIn.php';
require '../views/complain.php';  
?>

<html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>
    </head>

<body>

<!------------------- Department card -------------------->

    <div class="depcard">
                <?php require '../helpers/stuStaff_header.php'; ?>
    </div>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
                <?php require '../views/pplCard.php'; ?>

        
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





    <?php require '../helpers/footer.php';?>



					 <!-- <a href="<?php echo $userLoggedIn; ?>">  -->
						<!-- <?php echo $user['first_name'] . " " . $user['last_name']; ?>  -->
					</a> 
					<br>
					<!-- <?php echo "Posts: " . $user['num_posts']. "<br>"; 
					echo "Likes: " . $user['num_likes']; 

					?> 
