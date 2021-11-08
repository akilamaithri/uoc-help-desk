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
				<li class="cards_item_dep" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Contacts</h4>

							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione itaque cum officiis. Quos nesciun</p>
						</div>

					</div>

					
				</li>

				<li class="cards_item_dep" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Staff Addressing</h4>

							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione</p>
						</div>
					</div>		
				</li>

				<li class="cards_item_dep" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Adding Complains</h4>

							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione itaque cum officiis. Quos nesciunt voluptatibus aperiam? Lorem ipsum dolor sit</p>
						</div>
					</div>		
				</li>

				<li class="cards_item_dep" id="topic1">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Filling Forms</h4>
							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione itaque cum officiis. Quos nesciunt voluptatibus aperiam? Lorem ipsum dolor sit</p>
						</div>
					</div>		
				</li>
			</ul>

			<ul class="cards">
				<li class = "cards_item_dep" id="topic2">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Socializing</h4>
							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione itaque cum officiis. Quos nesciunt voluptatibus aperiam? Lorem ipsum dolor sit</p>
						</div>
					</div>		
				</li>

				<li class = "cards_item_dep" id="topic2">

					<div class="depCard">
						<div class="depCard_content">
							<p class="depCard_title">Messaging</h4>
							<p class="depCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum ullam voluptate explicabo, voluptatibus consequatur dolores similique ratione itaque cum officiis. Quos nesciunt voluptatibus aperiam? Lorem ipsum dolor sit</p>
						</div>
					</div>		
				</li>
			</ul>

			
		

		<h2 style="margin-top:8%;">Guidelines for sending a complain</h2>

		<div class="help-content">

			
			<div class="help-box">
			<ul >
				<li class="help-cards" id="topic1">
				
					<div class="helpbox-content">
					<p class="helpCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum</p>
				</div>
				
				</li>
			</ul>

			
			<ul >
				<li class="help-cards" id="topic1">
				
					<div class="helpbox-content">
					<p class="helpCard_text"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum</p>
				</div>
				
				</li>
			</ul>

			<ul >
				<li class="help-cards" id="topic1">
				
					<div class="helpbox-content">
					<p class="helpCard_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est ipsum eos saepe, provident repellendus rerum</p>
				</div>
				
				</li>
			</ul>
			
			
			
		</div>
	</div>
	
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



