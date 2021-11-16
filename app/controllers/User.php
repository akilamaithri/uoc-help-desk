<?php
class User{
    private $con;
    private $user;
    public function __construct($con,$user)
    {
        $this->con = $con;
        $user_details_query = mysqli_query($con,"SELECT * FROM user WHERE name='$user'");
        $this->user = mysqli_fetch_array($user_details_query); 
    }

    public function getUserName(){
        return $this->user['name'];
    }

    public function getNumberOfFriendRequests() {
		$username = $this->user['name'];
		$query = mysqli_query($this->con, "SELECT * FROM friend_requests WHERE user_to='$username'");
		return mysqli_num_rows($query);
	}

    public function MsgName(){
        return lcfirst($this->user['name']);
    }

    public function getNumComplains(){
    $username = $this->user['name'];
    $query = mysqli_query($this->con,"SELECT num_posts FROM user WHERE name='$username'");
    $row = mysqli_fetch_array($query);
    return $row['num_posts'];    
    }

    public function getName(){
        $username = $this->user['name'];
        $query = mysqli_query($this->con,"SELECT name FROM user WHERE name='$username'");
        $row = mysqli_fetch_array($query);
        return $row['name'];
    }

    public function getProfilePic(){
        $username = $this->user['name'];
        $query = mysqli_query($this->con,"SELECT profile_pic FROM user WHERE name='$username'");
        $row = mysqli_fetch_array($query);
        return $row['profile_pic'];
    }

    public function getFriendArray(){
        $username = $this->user['name'];
        $query = mysqli_query($this->con,"SELECT friend_array FROM user WHERE name='$username'");
        $row = mysqli_fetch_array($query);
        return $row['friend_array'];
    }


    public function isClosed() {
		$username = $this->user['name'];
		$query = mysqli_query($this->con, "SELECT user_closed FROM user WHERE name='$username'");
		$row = mysqli_fetch_array($query);

		if($row['user_closed'] == 'yes')
			return true;
		else 
			return false;
	}

    public function isFriend($username_to_check){
             $nameComma = "," . $username_to_check . ",";
             if((strstr($this->user['friend_array'],$nameComma) || $username_to_check == $this->user['name'])){
                 return true;
         } 
             else{
                 return false;
             }
        
    }


    public function didReceiveRequest($user_from){
        $user_to = $this->user['name'];
        $check_request_query = mysqli_query($this->con,"SELECT * FROM friend_requests WHERE user_to ='$user_to' AND user_from='$user_from'");
        if(mysqli_num_rows($check_request_query) > 0){
            return true;
        }
        else{
            return false;
        }
    }


    public function didSendRequest($user_to){
        $user_from = $this->user['name'];
        $check_request_query = mysqli_query($this->con,"SELECT * FROM friend_requests WHERE user_to ='$user_to' AND user_from='$user_from'");
        if(mysqli_num_rows($check_request_query) > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function removeFriend($user_to_remove) {
		$logged_in_user = $this->user['name'];

		$query = mysqli_query($this->con, "SELECT friend_array FROM user WHERE name='$user_to_remove'");
		$row = mysqli_fetch_array($query);
		$friend_array_username = $row['friend_array'];

		$new_friend_array = str_replace($user_to_remove . ",", "", $this->user['friend_array']);
		$remove_friend = mysqli_query($this->con, "UPDATE user SET friend_array='$new_friend_array' WHERE name='$logged_in_user'");

		$new_friend_array = str_replace($this->user['name'] . ",", "", $friend_array_username);
		$remove_friend = mysqli_query($this->con, "UPDATE user SET friend_array='$new_friend_array' WHERE name='$user_to_remove'");
	}

    public function sendRequest($user_to) {
		$user_from = $this->user['name'];
		$query = mysqli_query($this->con, "INSERT INTO friend_requests VALUES (NULL, '$user_to', '$user_from')");
	}

    public function getMutualFriends($user_to_check){
        $mutualFriends = 0;
        $user_array = $this->user['friend_array'];
        $user_array_explode = explode(",",$user_array);

        $query = mysqli_query($this->con,"SELECT friend_array FROM user WHERE name='$user_to_check'");
        $row = mysqli_fetch_array($query);
        $user_to_check_array = $row['friend_array'];
        $user_to_check_array_explode = explode(",",$user_to_check_array);

        foreach($user_array_explode as $i){
            foreach($user_to_check_array_explode as $j){
                if($i == $j && $i != ""){
                    $mutualFriends++;
                }

            }
        }
        return $mutualFriends;
    }

}
?>