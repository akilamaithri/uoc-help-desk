

<div class="card">
	<!-- <img src="<?php echo $user_array['profile_pic'];?>" alt="profile-pic" style="width:50%; border-radius: 50%; margin-top: 1rem"> -->

		        <img src="<?php echo $user['profile_pic'];?>" style="border-radius:20px; margin-top:10px">


	<!-- <a href="<?php echo $userLoggedIn; ?>">
			<img src="<?php echo $user['profile_pic']; ?>" style="width:50%; border-radius: 50%; margin-top: 1rem">
	</a> -->
	

	<p class="pplTitle"><?php echo $user['name']; ?></p>
	<p class="pplFac">Faculty of Science</p>

	<?php 
		// echo "Complains: " . $user['num_posts'] . "<br>"; -->
			// echo "Others Reviews: " . $user['num_likes'];
	// ?> 

	<br>
	<p><button class="pplButton pplButtonMain" onclick="location.href='<?php echo $userLoggedIn; ?>'">View Profile</button></p>
	<p><button class="pplButton" onclick="openForm()">Add a complaint</button></p>
	
</div>