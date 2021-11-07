<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  
require '../controllers/settingHandler.php';
?>

<div class="container">
<!-- whole body should be within this div -->

<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->
        
    <div class="profileCard" style="width:100%">
		<div class="tab" style="width:100%">

			<button class="tablinks" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button>
			<button class="tablinks" onclick="openCity(event, 'Password')">Password</button>
			<button class="tablinks" onclick="openCity(event, 'Close Account')">Close Account</button>
		</div>
        
    </div>
</div>

<div class="column-2 box" style="height:100%">

	<h2>Account Settings</h2>
	
	
	<div id="Profile" class="tabcontent">
 

	<?php
		$user_data_query = mysqli_query($con, "SELECT name, email, teleNumber, address FROM user WHERE name='$userLoggedIn'");
		$row = mysqli_fetch_array($user_data_query);

		$name = $row['name'];
		$email = $row['email'];
		$teleNumber = $row['teleNumber'];
		$address = $row['address'];
	?>

	<ul class="settingCard" style="width:100%">
	<li class="setting_item"  style="width:100%">
		<form action="settings.php" class="settings_form" method="POST">

			Name <input type="text"  name="name" value="<?php echo $name; ?>" id="settings_input"><br>
			Email <input type="text" readonly name="email" value="<?php echo $email; ?>" id="settings_input"><br>
			Telephone Number <input type="text"  name="teleNumber" value="<?php echo $teleNumber; ?>" id="settings_input"><br>
			Address <input type="text"  name="address" value="<?php echo $address; ?>" id="settings_input"><br>
			<?php echo $message; ?>

			<input type="submit" name="update_details" id="save_details" value="Update Details" class="info settings_submit"><br>
		</form>
		</li>


		<div class="sameline_left">
	<?php
	echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic' style=' border-radius:50%; display:inline-block'>";
	?>
	<br><br><br>
	<a href="upload.php"><span id="pro-pic" style="margin-left:25%;" >Upload</span></a> <br><br><br>
	</div>
</div>

<!-------------------------------------------- Password -->

<div id="Password" class="tabcontent"  style="height:100%; width:100%">
<li class="setting_item"   style="height:100%; width:100%">
		<h4>Change Password</h4>
		</li>
	</ul>
  <li class="setting_item"  style="height:100%; width:100%">
			<form action="settings.php" class="settings_form" method="POST">
				Old Password: <input type="password" name="old_password" id="settings_input"><br>
				New Password: <input type="password" name="new_password_1" id="settings_input"><br>
				New Password Again: <input type="password" name="new_password_2" id="settings_input"><br>

				<?php echo $password_message; ?>

				<input type="submit" name="update_password" id="save_details" value="Update Password" class="info settings_submit"><br>
			</form>
		</li>
	</ul>

	<br><br><br>
</div>
	
<div id="Close Account" class="tabcontent" >
<li class="setting_item"  style="display:block; float:left;" >
		<h4 >Close Account</h4>
		<p >Remove your account from here</p>
		</li>
		
		
	</ul>
  <li class="setting_item" >
  <form action="settings.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="Close Account" class="danger settings_submit">
	</form>
		</li>
	</ul>

	<br><br><br>
</div>	

	

</div>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<?php require '../helpers/footer.php';?>