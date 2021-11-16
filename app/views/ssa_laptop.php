<?php
require '../helpers/headerIn.php';
require '../views/complain.php'; 
require '../helpers/stuStaff_header.php'; 
?>


<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
        <?php require '../views/pplCard.php'; ?>	  	
    </div>


	<div class="column-2 box" >
		<h1>Laptop Loan</h1>

<div class="inquiry">
		<button  id="defaultOpen" class="inquirylink" onclick="openinq(event, 'functions')">Functions</button>

		<button class="inquirylink" onclick="openinq(event, 'announce')">Announcements</button>

		<button class="inquirylink" onclick="openinq(event, 'contact')">Contact Us</button>
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
	<div id="functions" class="inquirycontent">

        <h2>Choose an option</h2>

		<ul class="cards">
        <li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Application Form</h3>
						</div>
					</div>
				</div>
			</li>

			<li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Submission Link</h3>
						</div>
					</div>
				</div>
			</li>

            <li class="cards_item_dep" id="topic2">
				<div class="depCard">
					<div class="depCard_content">
						<div class="makeCenter">
							<h3>Report an Issue</h3>
						</div>
					</div>
				</div>
			</li>
		</ul>
        <br><br><br>
        <ul class="cards" style="width: 90%">
				<li >

                <div class="depCard_content" style=" border-radius:5px; border:1px solid rgb(173, 205, 206);">
					      <p class="depCard_text" style="font-size:14px; line-height:1.5">An Interest-Free Loan facility up to Rs. 75,000/- is offered for the University Undergraduates to purchase Laptop Computers, in accordance with the Budget Proposals – 2016.  The loan amount should be repaid by 36 interest free equal installments. The Bank of Ceylon and Peoples Bank are offered this laptop loan. 
                          </br></br>
                          The students who wish to utilize this facility should submit the following correspondence with a duly filled application.
                     </p>
                     <ol class="depCard_text" style="font-size:14px; line-height:1.5">
                         <li>A quotaion</li>
                         <ol type="i">
                             <li>Should be obtained from the following companies recommended by the Ministry    of Higher Education (Should be issued under a letterhead with signature and the official seal).</li>
                             <ul>
                                 <li>Abans</li>
                                 <li>Metropolitan</li>
                                 <li>John Keells</li>
                                 <li>Softlogic</li>
                                 <li>Singer</li>
                                 <li>E-wis</li>
                                 <li>Singhagiri</li>
                             </ul></br>
                             <li>The following features should be mentioned in the quotation.</li>
                             <ul>
                                 <li>Model of the laptop</li>
                                 <li>Processor (Minimum Core i3, 9th Generation)</li>
                                 <li>Memory Ram (Minimum 4 GB DDR4)</li>
                                 <li>Hard Disk (Minimum 500GB)</li>
                                 <li>Warranty (3 years comprehensive warranty)</li>
                                 <li>All-inclusive Selling Price</li>
                             </ul>
                         </ol><br>
                         <li>A letter from the DR/SAR/AR of relevant faculties certifying the studentship.</li>
                     </ol>
				</div>
		</ul>
	
	</div>

<!-------------------------------------------------------------------- options -->

<!------------------------------------------------------------------announcements -->
			


	<div id="announce" class="inquirycontent">
		<h2> Announcements</h2>
		
			<div class="long-card" id="#long-card" style="width:85%;">
				<div class="card-content">

					<!-- <p class="status">Status : Received</p>
					<p class="privacy">Public</p>				 -->
					

                    <p class="title"> Laptop Loan Scheme (Interest Free)</p>			

                    <p class="author">Assistant Registrar</p>
                    <p class="date">25th of October, 2021</p>
                     <!-- <br><br><br> -->

               <p class="content">
              Ministry of Higher Education has informed us that UCSC students could apply a computer loan supported by the Ministry. Details and conditions of the loan scheme is given here.
               </br></br>
              <a href="#" >Details and conditions</a>

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

                    <p class="title">Deadline for laptop loans</p>			

                     <p class="author">Moderator</p>
                     <p class="date">10th of October, 2021</p>
                      <!-- <br><br><br> -->

                    <p class="content">The last day of submit applications for laptop loan is 25th of November 2021. Please submit relevant documents before due date.
        

                      </p>
                   <br>

				<a href="#" class="btn-reply">View More</a>

				</div>
			</div>
	</div>

		
		

<!------------------------------------------------------------------ announcements -->

<!-------------------------------------------------------------------- contact us -->

<div id="contact" class="inquirycontent">

	<br>
		<h2>Contact Us</h2>

		<ul class="cards">
			
			<li class="cards_item_staffpage" >
				<div class="staffCard" >
					<?php include '../helpers/people/ssa_monika.php'; ?>
				</div>
			</li>
			
		</ul>
	
</div>


	<!-------------------------------------------------------------------- contact us -->


<script>
				document.getElementById("defaultOpen").click();
</script>
        
</div>

</div>

<?php require '../helpers/footer.php';?>
