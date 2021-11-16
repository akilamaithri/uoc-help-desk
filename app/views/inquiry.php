<?php
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

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
    	<?php require '../views/pplCard.php'; ?>

        
    </div>

	<div class="column-2 box" >
	<div class="tab"> 
        <h1>Sent Complaints</h1>
   

		<meta name="viewport" content="width=device-width, initial-scale=1">





		<p>Click on the buttons inside the inquiry menu:</p>
		<!-- <script>
  		document.getElementById("defaultOpen").click();
		</script> -->

		<div class="inquiry">
		<button  id="defaultOpen" class="inquirylink" onclick="openinq(event, 'My Inquiries')">My Complaints</button>

		<button class="inquirylink" onclick="openinq(event, 'Others Inquiries')">Others Complaints</button>

		<button class="inquirylink" onclick="openinq(event, 'All')">All Complaints</button>
		</div>

		


		<div id="My Inquiries" class="inquirycontent">
		<h3>My Inquiries</h3>
		<div class="long-card" id="#long-card" >
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">I didn't receive Mahapola for two months now</p>			

						<p class="author">Lavinka Guruge</p>
						<p class="date">10th of October, 2021</p>
						<p class="content">Dear sir/madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">12 students have had this issue</p>
						</div>
					</div>

					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Private</p>				
							<br>

						<p class="title">Curretly I am facing a finance problem</p>			

						<p class="author">Lavinka Guruge</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir, Currently my father is not working due to this pandemic situtation. Therefore I am facing financial difficulties.I would like to request you to consider about this matter. Thank You !!</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						
						</div>
					</div>

					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">Still I didn't receive Bursary for last four months</p>			

						<p class="author">Lavinka Guruge</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear sir/madam, me along with many of my firend havent received bursary for four months now.  As of the current situation, its much hard to pay for all bills and staff. Please consider about this problem.</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">15 students have had this issue</p>
						</div>
					</div>

					
		</div>

		<div id="Others Inquiries" class="inquirycontent">
		<h3>Others Inquiries</h3>


					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">Health Issue</p>			

						<p class="author">Akila Fernando</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear sir We have affected from Covid 19 pandemic in ast week and we are quaratined right nw. Therefore I am unable to participate for the mid exam and Can I know the process of submitting medical leave?</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">3 students have had this issue</p>
						</div>
					</div>

					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">Didn't receive Mahapola for three months </p>			

						<p class="author">Gayeshi Weerasekara</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir, me along with many of my firend havent received mahapola scholarship for three months now. It is really difficult for us to manage our financial stuff. Can we have a response regarding this issue ?.</p>
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

						<p class="author">Nishamal Athnayake</p>
						<p class="date">10th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir/Madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stff. Also some of my firends at University of Sri Jayawardanapura have received mahapola...</p>
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

						<p class="author">Nimesh Perera</p>
						<p class="date">10th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir/Madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stff. Also some of my firends at University of Sri Jayawardanapura have received mahapola</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">12 students have had this issue</p>
						</div>
					</div>
		</div>

		<div id="All" class="inquirycontent">
		<h3>All</h3>
		<div class="long-card" id="#long-card">
				<div class="card-content">

						<p class="status">Status : Received</p>
						<p class="privacy">Public</p>				
						<br>

					<p class="title">I didn't receive Mahapola for two months now</p>			

					<p class="author">Lavinka Guruge</p>
					<p class="date">10th of October, 2021</p>
						<br><br>

					<p class="content">Dear sir/madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stuff. Also some of my firends at unveisity of japura have received mahapola...</p>
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

						<p class="title">Still I didn't receive Bursary for last four months</p>			

						<p class="author">Lavinka Guruge</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear sir/madam, me along with many of my firend havent received bursary for four months now.  As of the current situation, its much hard to pay for all bills and stuff. Please consider about this problem.</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">15 students have had this issue</p>
						</div>
					</div>


					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">Health Issue</p>			

						<p class="author">Akila Fernando</p>
						<p class="date">10th of October, 2021</p>
							<br><br>

						<p class="content">Dear sir We have affected from Covid 19 pandemic in ast week and we are quaratined right now. Therefore I am unable to participate for the mid exam and Can I know the process of submitting medical leave?.</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">3 students have had this issue</p>
						</div>
					</div>


					<div class="long-card" id="#long-card">
						<div class="card-content">

							<p class="status">Status : Received</p>
							<p class="privacy">Public</p>				
							<br>

						<p class="title">Didn't receive Mahapola for three months </p>			

						<p class="author">Gayeshi Weerasekara</p>
						<p class="date">10th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir, me along with many of my firend havent received mahapola scholarship for three months now. It is really difficult for us to manage our financial stuff. Can we have a response regarding this issue ?</p>
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

						<p class="title">Mahapola</p>			

						<p class="author">Hiruni Perera</p>
						<p class="date">10th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir/Madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stff. Also some of my firends at University of Sri Jayawardanapura have received mahapola</p>
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

						<p class="title">Still didn't receive Mahapola </p>			

						<p class="author">Nimesh Athnayake</p>
						<p class="date">11th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir/Madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stff. Also some of my firends at University of Sri Jayawardanapura have received mahapola</p>
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

						<p class="author">Nimesh Perera</p>
						<p class="date">12th of October, 2021</p>
							<br><br>

						<p class="content">Dear Sir/Madam, me along with many of my firend havent received mahapola scholarship for two months now. That is jue and july. As of the current situation, its much hard to pay for all bills and stff. Also some of my firends at University of Sri Jayawardanapura have received mahapola</p>
							<br>

						<a href="#" class="btn-reply">Reply</a>
						<a href="#" class="btn-reply btn-other">Forward</a>
				
						<p class="me-too">12 students have had this issue</p>
						</div>
					</div>
		</div>
	
			<script>
				document.getElementById("defaultOpen").click();
			</script>
			
	</div>
	</div>

</div>





    <?php require '../helpers/footer.php';?>



