<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  

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

<body> -->


<div class="container">
	<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/pplCard.php'; ?>
    </div>


	<div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">
	
	 <div class="comp_box_short">	
                    <select name="issuetype" id="issuetype">
                        <option value="0">English</option>
                        <option value="fin">Sinhala</option>
                        <option value="bur">Tamil</option>
                    </select>
    </div>
				
		<h2 style="text-align:left;">Learning the basics</h2>




						<ul class="cards">
				<li class="cards_item_dep2" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Contacts</h4>

							<p class="depCard_text"> Through this UOC Help Desk system you can find out the business email addresses and contact numbers of the staff members who work inside the student and staff affairs division,
student counsellors office and  assistant registrars of the particular faculties. </p>

<p class="depCard_text">If you are in a urgent situation you can directly contact the relevant person via mobile phone without any delay.
</p>
						</div>

					</div>

					
				</li>

				<li class="cards_item_dep2" id="topic1">

					<div class="depCard2">
						<div class="depCard_content">
							<p class="depCard_title">Staff Addressing</h4>

							<p class="depCard_text"> We added all the contact details of staff members with their current designation. Therefore, as a University student it will be easy for you to find out the name and the contact details of 
the person that you wish to contact. </p>

<p class="depCard_text">Also be responsible for every point that you are going to ask from staff member and address them respectfully.</p>
						</div>
					</div>		
				</li>

				<li class="cards_item_dep2" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Adding Complaints</h4>

							<p class="depCard_text"> We have seperately allocated area to submit your private and public complaints and you have a chance to view all the public complaints that your colleagus have submitted.</p>
							<p class="depCard_text"> Through that you can have an overall idea of the problems and know how many students are facing for the same issue ?. This will really beneficial for every student who have already 
								submitted and expect to submiting the same problems.</p>
						</div>
					</div>		
				</li>
				</ul>
               
				<ul class="cards">
				<li class="cards_item_dep2" id="topic1">

					<div class="depCard2">
						<div class="depCard_content">
							<p class="depCard_title">Filling Forms</h4>
							<p class="depCard_text"> This would be a main advantange that you can gain through this UOC Help Desk System. You can directly send your forms without any crushing or a delay to the relevant staff member.</p>
							<p class="depCard_text">
Therefore you don't need to waste time or pay any postal charges to send your forms to relevant authorities in University of Colombo (except student bursary and mahapola). Simply you can access through the system and submit your forms to the respective links.
</p>
						</div>
					</div>		
				</li>
			

			
				<li class = "cards_item_dep2" id="topic2">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Socializing</h4>
							<p class="depCard_text"> In this UOC help desk system we provide an oppurtunity to communicate the undergraduates in other faculties. Therefore, students can build up a good relationship between each other.</p>
							<p class="depCard_text">Also they can message with the staff memvers (if that person accept the requet) and build up a good interaction between each other. </p>
						</div>
					</div>		
				</li>

				<li class = "cards_item_dep2" id="topic2">

					<div class="depCard2">
						<div class="depCard_content">
							<p class="depCard_title">Messaging</h4>
							<p class="depCard_text"> We provided a chance to all the registered undergraduates in University of Colombo to chat with students of other faculties and update with the latest information. </p>
							<p class="depCard_text"> Before If any student faced the same issue  which you are facing currently you can directly put a message through this
                             system and ask how he/she handled it and the solution he/she got.</p>
						</div>
					</div>		
				</li>
			</ul>

			
		
		<h2 style="margin-top:8%;">FAQ</h2>

    	<div class="section1">
      
                
			<div class="container8">
				<div class="accordion">
					<div class="accordion-item" id="q1">
						<a class="accordion-link" href="#q1">
							Can I change my personal details ?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>
						<div class="answer">
							<p>Yes you can.Go to the account settings, edit to change personal details.</p>
						</div>
					</div>

					<div class="accordion-item" id="q2">
						<a class="accordion-link" href="#q2">
							How do I delete my account?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>
						<div class="answer">
							<p>In order to delete your account, via this UOC help desk platform you need to contact Assistant registrar of your faculty.
								After get his approval you can go to the settings and delete your account by clicking close account.
								Important: When we delete your account, we will no longer hold any information about your account</p>
						</div>
					</div>

					<div class="accordion-item" id="q3">
						<a class="accordion-link" href="#q3">
							How do I contact a Assistant registrar of our faculty?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>
						<div class="answer">
							<p>It is possible to be connected with their personal Emails.<br> You can find those emails addresses from Contact Us page  </p>
						</div>
					</div>

					<div class="accordion-item" id="q4">
						<a class="accordion-link" href="#q4">
							What do I do if I didn't get any reply for my complaint?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>
						<div class="answer">
							<p>Normally all the members who are in the student and staff affairs division and student counsellors office are responsible to 
									look into every problem that you have submitted.If you did't get any reply within 4 days you can send a reminder to them.</p>
						</div>
					</div>

					<div class="accordion-item" id="q5">
						<a class="accordion-link" href="#q5">
							How long does it take to have the reply for the problem?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>
						<div class="answer">
							<p>You will get a reply within 2-3 days. It can be less than this range. Actually it is depend on the depth of the question.</p>
						</div>
					</div>
					<div class="accordion-item" id="q6">
						<a class="accordion-link" href="#q6">
							How do I get to know about scholarship details?
							<img src=../../public/img/default/click.png width="25" height="30">
						</a>

						<div class="answer">
							<p>You need to access for the seperate function which we have included in the student dash board name Scholarship.</p>
						</div>
					</div>
				</div>
			</div>

							</div>
							</div>
			
			</div>

			


	</div>
	
	</div>
			
	</div>

</div>



<?php require '../helpers/footer.php';?>



