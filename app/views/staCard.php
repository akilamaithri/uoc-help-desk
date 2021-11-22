
<div class="card">
	
<img src="<?php echo $user['profile_pic']; ?>" style="width:50%; border-radius: 50%; margin-top: 1rem">
	<!-- <a href="<?php echo $userLoggedIn; ?>">
			
	</a>
	 <?php $user['name'] ?> 

	<p class="pplTitle">Mrs. Janani Perera</p>
	<p class="pplFac">Assistant Registrar<br>Student & Staff Affairs Division</p> -->


	<p class="pplTitle"><?php echo $user['name']; ?></p>
	<p class="pplFac">Faculty of Science</p>
	<p class="pplFac">2018/19</p>


	<?php 
		// echo "Complains: " . $user['num_posts'] . "<br>"; -->
			// echo "Others Reviews: " . $user['num_likes'];
	// ?> 

	<br>
	<p><button class="pplButton pplButtonMain" onclick="location.href='<?php echo $userLoggedIn; ?>'">View Profile</button></p>
	<p><button class="pplButton" onclick="location.href='staffHome.php';">View my complaints</button></p>
	<p><button class="pplButton" onclick="location.href='staAnnounce.php';">My Announcements</button></p>
	<p><button class="pplButton" onclick="addAnnounce()">Add Announcement</button></p>
	<p><button class="pplButton" onclick="location.href='#';">My Functions</button></p>
	<p><button class="pplButton">Messages</button></p>
	<br>
	<p></p>
</div>