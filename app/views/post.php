<?php  
include("../helpers/headerIn.php");

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}
else {
	$id = 0;
}
?>

<div class="container">
<!-- whole body should be within this div -->

	<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
		<?php include('../views/pplCard.php'); ?>     
	</div>


	<div class="column-2 box" style="width:100%; padding: 0px 20px 0px 20px">

		<h2>Notifications</h2>
		<div class="card" style="text-align:left; padding:20px 10px 10px 20px">
			<div class="posts_area">
						<?php 
							$post = new Complain($con, $userLoggedIn);
							$post->getSinglePost($id);
						?>
			</div>
		</div>
	</div>
</div>

<?php require '../helpers/footer.php';?>
