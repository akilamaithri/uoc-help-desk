
<div class="card">
	<img src="../../public/img/default/avatar-girl.png" alt="profile-pic" style="width:50%; border-radius: 50%; margin-top: 1rem">


	<!-- <a href="<?php echo $userLoggedIn; ?>">
			<img src="<?php echo $user['profile_pic']; ?>" style="width:50%; border-radius: 50%; margin-top: 1rem">
	</a> -->
	
	<!-- <?php $user['name'] ?> -->

	<p class="pplTitle">Mrs. Janani Perera</p>
	<p class="pplFac">Assistant Registrar<br>Student & Staff Affairs Division</p>




	<?php 
		// echo "Complains: " . $user['num_posts'] . "<br>"; -->
			// echo "Others Reviews: " . $user['num_likes'];
	// ?> 

	<br>
	<p><button class="pplButton pplButtonMain" onclick="location.href='<?php echo $userLoggedIn; ?>'">View Profile</button></p>
	<p><button class="pplButton" onclick="location.href='staffHome.php';">View my complaints</button></p>
	<p><button class="pplButton" onclick="location.href='staAnnounce.php';">My Announcements</button></p>
	<p><button class="pplButton" onclick="openForm()">Add Announcement</button></p>
	<p><button class="pplButton" onclick="location.href='#';">My Functions</button></p>
	<p><button class="pplButton">Messages</button></p>
	<br>
	<p></p>
</div>