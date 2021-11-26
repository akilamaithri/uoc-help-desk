<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  
?>

if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($_POST['issuetype'],$_POST['Title'],$_POST['complain_text'],'none');
    header("Location:studentDash.php");
}
?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/pplCard.php'; ?>
        
    </div>


	<div class="column-2 box" style="width:85%; padding: 0px 20px 0px 20px">
        <h2>Department Statistics</h2>
		<br>


		 <ul class="cards"  style="width:110%; margin:2px;">
		 <li class="cards_item_small" >
						<div class="dashCard-topics" style="background-color: #660066; margin-right:20px; ">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;">Complaints Pending</h4>
							</div>
						</div>
				</li>

				<li class="cards_item_small">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:30px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;">Complaints Recieved</h4>
							</div>
						</div>
				</li>

				<li class="cards_item_small">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:30px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;">Complaints Bounced</h4>
							</div>
						</div>
				</li>
				
				<li class="cards_item_small">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:30px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;">Total complaints </h4>
							</div>
						</div>
				</li>
				
		</ul>

		<br>

			<h3 >For me</h3>
			
			<div class="select-box">
			
				<select>
					<option>All Faculties</option>
					<option>UCSC</option>
					
				</select>

				<select>
					<option>Time</option>
					<option></option>
					
				</select>
			</div>
	
			<div class="long-card" id="#long-card" style="width:90%; margin-top:6%;">
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
				
		
                <select class="btn-reply btn-other" style="btn-reply btn-other:hover:display:none;">
                 <option>Pending</option>
                 <option>Recieved</option>
                 </select>
		
				<p class="me-too">12 students have had this issue</p>
				</div>
			</div>

						<div class="long-card" id="#long-card"  style="width:90%;">
				<div class="card-content">

					<p class="status">Status : Received</p>
					<p class="privacy">Private</p>				
					<br>
					
				<p class="title">I didn't receive Mahapola for two months now</p>			

				<p class="author">Lavinka Guruge</p>
				<p class="date">10th of October, 2021</p>
					<br><br>

				<p class="content">Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...</p>
					<br>

				<a href="#" class="btn-reply">Reply</a>
				<a href="#" class="btn-reply btn-other">Forward</a>
				<select class="btn-reply btn-other" style="btn-reply btn-other:hover:display:none;">
                 <option>Pending</option>
                 <option>Recieved</option>
                 </select>
				<p class="me-too">12 students have had this issue</p>
				</div>
				</div>
			</div>
		</div>
		<br><hr><br>	
		
	</div>
        
	

</div>

<div class = "comp_container">
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

                <!-- <script src="../../public/javascript/nicEdit.js" type="text/javascript"></script>
                <script type="text/javascript">
                bkLib.onDomLoaded(function() {
                    new nicEditor().panelInstance('area1');
                    new nicEditor({fullPanel : true}).panelInstance('area2');
                    new nicEditor({iconsPath : '../../public/img/icons/nicEditorIcons.gif'}).panelInstance('area3');
                    new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
                    new nicEditor({maxHeight : 40}).panelInstance('area5');
                });
                </script> -->            
                <br><br>
            
                <!-- <div class="icon">
                    <i class="fas fa-undo-alt"></i>
                    <i class="fas fa-redo"></i>
                    <i class="fas fa-bold"></i>
                    <i class="fas fa-italic"></i>
                    <i class="fas fa-underline"></i>
                    <i class="fas fa-list-ol"></i>
                    <i class="fas fa-align-justify"></i>
                    <i class="fas fa-align-right"></i>
                    <i class="fas fa-align-left"></i>
                    <i class="fas fa-align-center"></i>
                    <i class="fas fa-image"></i>
                    <i class="fas fa-link"></i>
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-at"></i>
                    <i class="far fa-smile-beam"></i>
                </div> -->
                <input type="submit" value="Send" class="mainbtn">
                <br>
            </div>
		</form>
    </div>
</div>
 


<?php require '../helpers/footer.php';?>



