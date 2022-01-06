<?php  
include("../modules/connect.php");
include("../controllers/User.php");


$query = $_POST['query'];
$userLoggedIn = $_POST['userLoggedIn'];

$names = explode(" ", $query);

//If query contains an underscore, assume user is searching for username
if(strpos($query, '_') !== false) 
	$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE name LIKE '$query%' AND user_closed='no' LIMIT 8");

else if(count($names) == 2)
	$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '$names[0]%' AND name LIKE '$names[1]%') AND user_closed='no' LIMIT 8");
 
else 
	$usersReturnedQuery = mysqli_query($con, "SELECT * FROM user WHERE (name LIKE '$names[0]%' OR name LIKE '$names[0]%') AND user_closed='no' LIMIT 8");

if($query != "")
{

	while($row = mysqli_fetch_array($usersReturnedQuery)) 
	{
		$user = new User($con, $userLoggedIn);

		if($row['name'] != $userLoggedIn)
			$mutual_friends = $user->getMutualFriends($row['name']) . " friends in common";
		else 
			$mutual_friends = "";

		echo "<div class='resultDisplay'>
				<a href='" . $row['name'] . "' style='color: #1485BD'>
					<div class='liveSearchProfilePic'>
						<img src='" . $row['profile_pic'] ."'>
					</div>

					<div class='liveSearchText'>
						
						<p>" . $row['name'] ."</p>
						<p id='grey'>" . $mutual_friends ."</p>
					</div>
				</a>
				</div>";
	}
}


?>