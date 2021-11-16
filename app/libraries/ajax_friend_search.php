<?php  
include("../modules/connect.php");
include("../controllers/User.php");

$query = $_POST['query'];
$userLoggedIn = $_POST['userLoggedIn'];

$names = explode(" ", $query);

if(strpos($query, "_") !== false) {
	$usersReturned = mysqli_query($con, "SELECT * FROM user WHERE name LIKE '$query%' AND user_closed='no' LIMIT 8");
}
else {
	$usersReturned = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '%$names[0]%' OR name LIKE '%$names[0]%') AND user_closed='no' LIMIT 8");
}
if($query != "") {
	while($row = mysqli_fetch_array($usersReturned)) {

		$user = new User($con, $userLoggedIn);

		if($row['name'] != $userLoggedIn) {
			$mutual_friends = $user->getMutualFriends($row['name']) . " friends in common";
		}
		else {
			$mutual_friends = "";
		}

		if($user->isFriend($row['name'])) {
			echo "<div class='resultDisplay'>
					<a href='../views/messages.php?u=" . $row['name'] . "'>


						<div class='liveSearchText'>
							<img src='". $row['profile_pic'] . "'>

							<p style='margin: 0;'>". $row['name'] . "</p>
							<p id='grey'>".$mutual_friends . "</p>
						</div>
				
					</a>
				</div>";


		}


	}
}

?>


