<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  
// require '../controllers/User.php';
// require '../controllers/Complain.php';
// mekata pahalin ekk enna one (5)-(2)
//session_destroy();
// require '../views/complain.php';   


if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($_POST['issuetype'],$_POST['Title'],$_POST['complain_text'],'none');
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

<body> -->


<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
		<?php include('../views/pplCard.php'); ?>     
	</div>


	<div class="column-2 box" >

		

        <h2>Dashboard</h2>
		


		 <ul class="cards">
				<li class="cards_item" id="SSA">
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

		<h2>Popular Topics</h2>
		<br>
		<!-- auto generating topics from database data -->

		<ul class="cards">
				
				<li class="cards_item_small">
						<div class="dashCard-topics">
							<div class="dashCard_content">
								<h4>Laptop Loans</h4>
							</div>
						</div>
				</li>

				<li class="cards_item_small">
						<div class="dashCard-topics">
							<div class="dashCard_content">
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

	<br><br><hr><br>

	<div class="inquiry">
			<button  id="defaultOpen" class="inquirylink" onclick="openinq(event, 'complain')">Public Complaints</button>

			<button class="inquirylink" onclick="openinq(event, 'announce')">Announcements</button>
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

	<div id="complain" class="inquirycontent">


		<h2>Public Complaints</h2>
		<h5></h5>
		<!---------------------------- New Add -->
		<!-- <div class="main_column column"> -->
			
			<!-- <form class="complain_form" action="studentDash.php" method="POST">
				<textarea name="complain_text" id="complain_text" placeholder="Add a Public Complain "></textarea> 

				<input type="submit" name="complain" id="complain_button" value="Publish"><hr>
			</form> -->

			<?php require '../views/complain.php'; ?>  


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


	</div>

<!-------------------------------------------------------------------- options -->

<!------------------------------------------------------------------announcements -->

	<div id="announce" class="inquirycontent">

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

				<a href="#" class="btn-reply">View More</a>
				<a href="#" class="btn-reply btn-other">Forward</a>
		
				</div>
			</div>

						<div class="long-card" id="#long-card">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Public</p>				
					<br>
					
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


		


		
		
	</div>

<script>
				document.getElementById("defaultOpen").click();
</script>
        
</div>

</div>







<?php require '../helpers/footer.php';?>



