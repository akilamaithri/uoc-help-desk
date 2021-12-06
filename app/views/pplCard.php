

<div class="card">

	<img src="<?php echo $user['profile_pic'];?>" style="border-radius:20px; margin-top:10px;">

	<p class="pplTitle"><?php echo $user['name']; ?></p>
	<p class="pplFac">
		<?php
		$ni = new User($con,$userLoggedIn);
		$ni2 = $ni->getFaculty();
		echo $ni2;
		?></p>
	<p class="pplFac">2018/19</p>

	<p><button class="pplButton pplButtonMain" onclick="location.href='<?php echo $userLoggedIn; ?>'">View Profile</button></p>
	<p><button class="pplButton" onclick="openForm()">Add a complaint</button></p>
	<p><button class="pplButton" onclick="location.href='inquiry.php';">My Complains</button></p>
	<p><button class="pplButton" onclick="location.href='messages.php';">Messages</button></p>
	<p><button class="pplButton" onclick="location.href='studentHelp.php';">Help</button></p>
	<p><button class="pplButton" onclick="location.href='settings.php';">Settings</button></p>
</div>