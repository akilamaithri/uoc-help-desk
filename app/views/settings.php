<?php
require '../helpers/headerIn.php';
require '../controllers/settingHandler.php';
?>

<div class="container">
<!-- whole body should be within this div -->

<div class="column-1 box">
	<!-- use the column layout to divide the content to ratio -->

    <div class="profileCard" style="width:100%" >
		<div class="tab" style="width:100%">
	    
			<span class="makeCenter">
				<h2>Account Settings</h2> 
			</span>

			<p><button class="pplButton" onclick="openCity(event, 'Profile')" id="defaultOpen">Profile</button></p>
			<p><button class="pplButton" onclick="openCity(event, 'Password')">Password</button></p>
			<p><button class="pplButton" onclick="openCity(event, 'Close Account')">Close Account</button></p>
		</div>
        
    </div>
</div>

<div class="column-2 box" style="height:100%; width:100%">


	
	
	<div id="Profile" class="tabcontent">
 
		<div class="layout">

			<div class="col-main" >
				<!-- profile pic -->

						<h3>Update Profile Picture</h3>
					
					<?php
						echo "<img src='" . $user['profile_pic'] ."' class='small_profile_pic' style=' border-radius:50%; display:inline-block'>";
					?>
				
					<br><br>
					&nbsp &nbsp
					<button class="setting_btn" onclick="location.href='upload.php';">Upload</button> 

				<br><br><br>
			</div>

			<div class="col-sub">
				<h3>Update Basic Details</h3>
				<?php
					$user_data_query = mysqli_query($con, "SELECT name, email, teleNumber, address FROM user WHERE name='$userLoggedIn'");
					$row = mysqli_fetch_array($user_data_query);

					$name = $row['name'];
					$email = $row['email'];
					$teleNumber = $row['teleNumber'];
					$address = $row['address'];
				?>

				<ul class="settingCard" >
					<li class="setting_item"  style="width:100%;">

						
						<form action="settings.php" class="settings_form" method="POST">

							Name <br><input type="text"  name="name" value="<?php echo $name; ?>" id="settings_input"><br>

							Email <br><input type="text" readonly name="email" value="<?php echo $email; ?>" id="settings_input"><br>

							Telephone Number <br><input type="text"  name="teleNumber" value="<?php echo $teleNumber; ?>" id="settings_input"><br>

							Address <br><input type="text"  name="address" value="<?php echo $address; ?>" id="settings_input"><br>

							<?php echo $message; ?>
							<br>
							<input type="submit" name="update_details" value="Update Details" class="setting_btn">
						</form>
					</li>
				</ul>

			</div>
		
		</div>
	</div>

	<!-- Text fields -->

	




	<!-------------------------------------------- Password -->

	<div id="Password" class="tabcontent" >
			<li class="setting_item"   style="height:100%; width:100%">
				<h3>Change Password</h3>
			</li>
		</ul>
	<li class="setting_item"  style="height:100%; width:100%">
				<form action="settings.php" class="settings_form" method="POST">

					Old Password: <br><input type="password" name="old_password" id="settings_input"><br>

					New Password: <br><input type="password" name="new_password_1" id="settings_input"><br>

					New Password Again: <br><input type="password" name="new_password_2" id="settings_input"><br>

					<?php echo $password_message; ?>
					<br>
					<input type="submit" name="update_password" value="Update Password" class="setting_btn"><br>
				</form>
			</li>
		</ul>

		<br><br><br>
	</div>

	<!------------------------Close account----------------->
		
	<div id="Close Account" class="tabcontent" style="height:70vh">
		<li class="setting_item">
			<h3>Close Account</h3>
			<p>Permanantly Remove Your Account</p>			
		</li>
				
		<br>
		<li class="setting_item" style="width:60%">

			<form action="settings.php" method="POST">
				<input type="submit" name="close_account" value="Close Account" class="setting_btn btn_red">
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