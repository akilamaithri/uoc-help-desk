
<div class="card">
	<img src="<?php echo $user['profile_pic'];?>" style="border-radius:20px; margin-top:10px;">

	<p class="pplTitle"><?php echo $user['name']; ?></p>
	<p class="pplFac">Assistant Registrar<br>Student & Staff Affairs Division</p>


	<?php 
		// echo "Complains: " . $user['num_posts'] . "<br>"; -->
			// echo "Others Reviews: " . $user['num_likes'];
	// ?> 

	<br>
	<p><button class="pplButton pplButtonMain" onclick="location.href='<?php echo $userLoggedIn; ?>'">View Profile</button></p>
	<p><button class="pplButton" onclick="location.href='staffHome.php';">View my complaints</button></p>
	<p><button class="pplButton" onclick="location.href='staff_functions.php';">My Functions</button></p>
	<p><button class="pplButton" onclick="location.href='staAnnounce.php';">My Announcements</button></p>
	<p><button class="pplButton" onclick="openAnnouncement()">Add Announcement</button></p>
	<p><button class="pplButton">Messages</button></p>
	
</div>