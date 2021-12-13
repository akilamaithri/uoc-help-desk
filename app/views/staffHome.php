<?php
require '../helpers/headerIn.php';
require '../views/announcement.php'; 
require '../controllers/login.php';


if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($_POST['issuetype'],$_POST['Title'],$_POST['complain_text'],'none');
    header("Location:staffHome.php");
}
?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
        <?php require '../views/staCard.php'; ?>
        
    </div>

	<div class="column-2 box">
        <h2>Department Statistics</h2>

		<!---------------------------------- Chart -->

		<div class="chartCanvas">
      		<canvas id="myChart"></canvas>
      	</div>

      	<script>
			const ctx = document.getElementById('myChart');
			const myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ['Replied To', 'Pending'],
					datasets: [{
						label: '# of Votes',
						data: [21, 13],
						backgroundColor: [
							'#66006650',
							'rgba(54, 162, 235, 0.2)',
							
						],
						borderColor: [
							'#660066',
							'#660066',
							
						],
						borderWidth: 0.5
					}]
				},
				options: {
					// animation:{
					// 	animation.animateRotate: true,
					// 	duration:5
					// }
					plugins:{
						title:{
							display: true,
							text:'Complaint Statsitics'
						}
					}

					
				}
			});
      	</script>

		<!------------------------------Stat boxes  -->

<ul class="cards">
		 	<li class="cards_item">
				<div class="dashCard-topics">
					<h4 class="profileCard_title">Complaints Received</h4>
						<h2 class="dashCount" id="compReceivedCount">0</h2>
				</div>
			</li>

		 	<li class="cards_item">
				<div class="dashCard-topics">
					<h4 class="profileCard_title">Complaints Replied</h4>
						<h2 class="dashCount" id="compRepliedCount">0</h2>
				</div>
			</li>	

		 	<li class="cards_item">
				<div class="dashCard-topics">
					<h4 class="profileCard_title">Complaints Pending</h4>
						<h2 class="dashCount" id="compPendingCount">0</h2>
				</div>
			</li>	

		 	<!-- <li class="cards_item_small">
				<div class="dashCard-topics">
					<h4 class="profileCard_title">Monthly Complaints</h4>
						<h2 class="dashCount">32</h2>
				</div>
			</li>	 -->
				
		</ul>

		<script>
			//complains received
			const count1 = document.getElementById("compReceivedCount");
			animateValue(count1, 0, 34, 1500);

			//Complaints Replied
			const count2 = document.getElementById("compRepliedCount");
			animateValue(count2, 0, 21, 2000);

			//complains pneding
			const count3 = document.getElementById("compPendingCount");
			animateValue(count3, 0, 13, 2500);
		</script>

		<!-------------------------------------------------------------------- Testing Complains ---->

		<script>
			$(function(){

				var userLoggedIn = '<?php echo $userLoggedIn; ?>';
				var inProgress = false;

				loadComplain(); //Load first complain

				$(window).scroll(function() {
					var bottomElement = $(".status_complain").last();
					var noMorecomplain = $('.complain_area').find('.noMoreComplain').val();

					// isElementInViewport uses getBoundingClientRect(), which requires the HTML DOM object, not the jQuery object. The jQuery equivalent is using [0] as shown below.
					if (isElementInView(bottomElement[0]) && noMoreComplain == 'false') {
						loadComplain();
					}
				});

				function loadComplain() {
					if(inProgress) { //If it is already in the process of loading some complain, just return
						return;
					}
					
					inProgress = true;
					$('#loading').show();

					var page = $('.complain_area').find('.nextPage').val() || 1; //If .nextPage couldn't be found, it must not be on the page yet (it must be the first time loading complain), so use the value '1'

					$.ajax({
						url: "includes/handlers/ajax_load_complain.php",
						type: "POST",
						data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
						cache:false,

						success: function(response) {
							$('.complain_area').find('.nextPage').remove(); //Removes current .nextpage 
							$('.complain_area').find('.noMorecomplain').remove(); //Removes current .nextpage 
							$('.complain_area').find('.noMorecomplainText').remove(); //Removes current .nextpage 

							$('#loading').hide();
							$(".complain_area").append(response);

							inProgress = false;
						}
					});
				}

				//Check if the element is in view
				function isElementInView (el) {
					var rect = el.getBoundingClientRect();

					return (
						rect.top >= 0 &&
						rect.left >= 0 &&
						rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && //* or $(window).height()
						rect.right <= (window.innerWidth || document.documentElement.clientWidth) //* or $(window).width()
					);
				}
			});

		</script>
		

		<!-------------------------------------------------------------------------- Ending test -->

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




		<h2>Public Complaints</h2>

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

		<!-- testing new -->
		<h3>testgin</h3>
		<script>
			$(function(){

				var userLoggedIn = '<?php echo $userLoggedIn; ?>';
				var inProgress = false;

				loadComplain(); //Load first complain

				$(window).scroll(function() {
					var bottomElement = $(".status_complain").last();
					var noMorecomplain = $('.complain_area').find('.noMorecomplain').val();

					// isElementInViewport uses getBoundingClientRect(), which requires the HTML DOM object, not the jQuery object. The jQuery equivalent is using [0] as shown below.
					if (isElementInView(bottomElement[0]) && noMorecomplain == 'false') {
						loadComplain();
					}
				});

				function loadComplain() {
					if(inProgress) { //If it is already in the process of loading some complain, just return
						return;
					}
					
					inProgress = true;
					$('#loading').show();

					var page = $('.complain_area').find('.nextPage').val() || 1; //If .nextPage couldn't be found, it must not be on the page yet (it must be the first time loading complain), so use the value '1'

					$.ajax({
						url: "includes/handlers/ajax_load_complain.php",
						type: "POST",
						data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
						cache:false,

						success: function(response) {
							$('.complain_area').find('.nextPage').remove(); //Removes current .nextpage 
							$('.complain_area').find('.noMorecomplain').remove(); //Removes current .nextpage 
							$('.complain_area').find('.noMorecomplainText').remove(); //Removes current .nextpage 

							$('#loading').hide();
							$(".complain_area").append(response);

							inProgress = false;
						}
					});
				}

				//Check if the element is in view	
				function isElementInView (el) {
					var rect = el.getBoundingClientRect();

					return (
						rect.top >= 0 &&
						rect.left >= 0 &&
						rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && //* or $(window).height()
						rect.right <= (window.innerWidth || document.documentElement.clientWidth) //* or $(window).width()
					);
				}
			});

		</script>

		<!-- testing new -->


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



