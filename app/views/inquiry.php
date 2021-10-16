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
			<p><button class="pplButton" href="inquiries.php">My Inquiries</button></p>
			<p><button class="pplButton">Messages</button></p>
			<p><button class="pplButton">Help</button></p><br>
			<p></p>

        </div>
        
    </div>


	 <div class="tab" style="width:100%; padding: 0px 20px 0px 20px"> 
        <h1>Inquiries</h1>
   

<meta name="viewport" content="width=device-width, initial-scale=1">


<body>


<p>Click on the buttons inside the inquiry menu:</p>

<div class="inquiry">
  <button class="inquirylink" onclick="openinq(event, 'My Inquiries')">My Inquiries</button>
  <button class="inquirylink" onclick="openinq(event, 'Others Inquiries')">Others Inquiries</button>
  <button class="inquirylink" onclick="openinq(event, 'All')">All</button>
</div>

<div id="My Inquiries" class="inquirycontent">
  <h3>My Inquiries</h3>
  <div class="long-card" id="#long-card">
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
   
</body>			
        
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



