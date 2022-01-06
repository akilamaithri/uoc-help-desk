<?php
require '../helpers/headerIn.php';
require '../views/complain.php';  

if(isset($_GET['q'])) {
	$query = $_GET['q'];
}
else {
	$query = "";
}

if(isset($_GET['type'])) {
	$type = $_GET['type'];
}
else {
	$type = "name";
}
?>

<div class="container">

		<div class="column-1 box">
			
   		</div>

	<div class="columnEqual box" >
		<div class="card" style="padding-bottom:40px">
			<?php 
			if($query == "")
				echo "<h2 class='makeCenter'>You must enter something in the search box.</h2>";
			else {
				
				if($type == "name") 
					$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE name LIKE '$query%' AND user_closed='no' LIMIT 8");
				
				else {

					$names = explode(" ", $query);

					if(count($names) == 3)
						$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '$names[0]%' AND name LIKE '$names[2]%') AND user_closed='no'");
					else if(count($names) == 2)
						$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '$names[0]%' AND name LIKE '$names[1]%') AND user_closed='no'");
					else 
						$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '$names[0]%' OR name LIKE '$names[0]%') AND user_closed='no'");
				}

				//Check if results were found 
				if(mysqli_num_rows($usersReturnedQuery) == 0)
					echo "<h3>We can't find anyone with a " . $type . " like: " .$query . "</h3>";
				else 
					echo "<h3>" . mysqli_num_rows($usersReturnedQuery) . " result/s found: </h3>";


				echo "<p id='grey'>Try searching for:</p>";
				echo "<a href='search.php?q=" . $query ."&type=name' class='mainbtn'>Names</a> <a href='search.php?q=" . $query ."&type=username' class='mainbtn'>Usernames</a><br><br>";

				while($row = mysqli_fetch_array($usersReturnedQuery)) 
				{
					$user_obj = new User($con, $user['name']);

					$button = "";
					$mutual_friends = "";

					if($user['name'] != $row['name']) {

						//Generate button depending on friendship status 
						if($user_obj->isFriend($row['name']))
							$button = "<input type='submit' id='ignore_button' name='" . $row['name'] . "' value='Remove Friend'>";

						else if($user_obj->didReceiveRequest($row['name']))
							$button = "<input type='submit' name='" . $row['name'] . "'value='Respond to request'>";

						else if($user_obj->didSendRequest($row['name']))
							$button = "<input type='submit' value='Request Sent'>";

						else 
							$button = "<input type='submit' name='" . $row['name'] . "'  value='Add Friend'>";

						$mutual_friends = $user_obj->getMutualFriends($row['name']) . " friends in common";


						//Button forms
						if(isset($_POST[$row['name']])) {

							if($user_obj->isFriend($row['name'])) {
								$user_obj->removeFriend($row['name']);
								header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
							}
							else if($user_obj->didReceiveRequest($row['name'])) {
								header("Location: requests.php");
							}
							else if($user_obj->didSendRequest($row['name'])) {

							}
							else {
								$user_obj->sendRequest($row['name']);
								header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
							}

						}



					}

					echo "<div class='searchCard'>
							<a href='" . $row['name'] ."'><img src='". $row['profile_pic'] ."' alt='Profile Picture' ></a>

							<a href='" . $row['name'] ."'><h4>" . $row['name'] ."</h4></a>
							<p>" . $mutual_friends ."</p>
							<br>
						</div>";

				} //End while
			}


			?>


		</div>
	</div>
</div>
</div>


<?php require '../helpers/footer.php';?>


