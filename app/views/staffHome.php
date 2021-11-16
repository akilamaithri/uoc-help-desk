<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  

if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($_POST['complain_text'],'none');
    header("Location:staAnnounce.php");
}
?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/staCard.php'; ?>
        
    </div>


	<div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">
        <h2>Department Statistics</h2>
		<br>


		 <ul class="cards"  style="width:110%; margin:2px;">
		 <li class="cards_item_small" style="margin-right:20px;">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:20px; ">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;display:inline-block">Complaints Pending</h4>
								<h2 style=" display:inline-block; float:right; padding-right:15px; color:white">12</h2>
							</div>
						</div>
				</li>

				<li class="cards_item_small" style="margin-right:20px;">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:30px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%; display:inline-block">Complaints Recieved</h4>
								<h2 style=" display:inline-block; float:right; padding-right:15px; color:white">23</h2>
							</div>
						</div>
				</li>

				<li class="cards_item_small" style="margin-right:20px;">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:50px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;display:inline-block">Complaints Forwarded</h4>
								<h2 style=" display:inline-block; float:right; padding-right:15px; color:white">5</h2>
							</div>
						</div>
				</li>
				
				<li class="cards_item_small">
						<div class="dashCard-topics" style="background-color: #660066; margin-right:50px;">
							<div class="dashCard_content" style="text-align:left; ">
								<h4 style="color:white; font-size:14px; padding-left:12px; width:1%;display:inline-block">Total complaints </h4>
								<h2 style=" display:inline-block; float:right; padding-right:15px; color:white">54</h2>
							</div>
						</div>
				</li>
				
		</ul>

		<br>

		<h2>For me</h2>

		<div class="inquiry" style="width:93%">
				<button  id="defaultOpen" class="inquirylink" onclick="openinq(event, 'My Inquiries')">Received to me</button>

				<button class="inquirylink" onclick="openinq(event, 'Others Inquiries')">Department iInquiries</button>

				<button class="inquirylink" onclick="openinq(event, 'All')">All Inquiries</button>
		</div>

		<script>
				document.getElementById("defaultOpen").click();
		</script>
			
			<br>
			<div class="select-box">
			
				<select>
					<option>All Faculties</option>
					<option>UCSC</option>
					<option>Science</option>
					<option>Arts</option>
					<option>FMF</option>
					<option>Medicine</option>
					<option>Law</option>
					<option>Sri Pali Campus</option>
					<option>Technology</option>
					<option>Nursing</option>
					<option>Education</option>
					<option>Graduation Studies</option>
					
				</select>

				<select>
					<option>Time</option>
					<option>Status</option>
					
				</select>
			</div>
			<br><br><br><br>

			<!-------------------------------------------- Complains from DB -->


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
                 <option>Priority</option>                 
				 <option>Attended</option>

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



<?php require '../helpers/footer.php';?>



