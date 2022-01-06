<?php 
require '../helpers/headerIn.php';
require '../views/complain.php';  

$message_obj = new Message($con,$userLoggedIn);

if(isset($_GET['u']))
    $user_to = $_GET['u'];
else{
    $user_to = $message_obj->getMostRecentUser();
    if($user_to == false)
        $user_to = 'new';
}

if($user_to != "new")
	$user_to_obj = new User($con, $user_to);

if(isset($_POST['post_message'])) {

    if(isset($_POST['message_body'])) {
            $body = mysqli_real_escape_string($con, $_POST['message_body']);
            $date = date("Y-m-d H:i:s");
            $message_obj->sendMessage($user_to, $body, $date);
        }
    
    }

?>

<div class="container">

    <div class="column-1 box">
        <?php include('../views/pplCard.php'); ?>   
    </div>

    <div class="column-2 box" style="width:100%;">

    <ul class="cards">
				<li class="cards_item">
					<div class="dashCard" style="background-color: #fff; width:100%; padding:10px 5px 5px 5px; text-decoration:none">
						<h2 style="padding-left:10px">Conversations</h2><br>
                        
                        <div class="makeCenter">
                        <a href="messages.php?u=new" class="mainbtn">New Message</a>
                        </div>
                        <br><br>
                        <div style="text-decoration:none">
                            <?php echo $message_obj->getConvos(); ?>
                        </div>
					</div>
				</li>

                <!-- <div class="vl"></div> -->

				<li class="cards_item" style="width:65%;">
					<div class="dashCard" style="background-color: #fff;width:100%; cursor:default; padding:10px 20px 20px 20px">

                    <?php
                        if($user_to != "new"){
                            echo "<h3>You and <a href='$user_to'>" . $user_to_obj->getName() . "</a></h3><hr><br><br>";
                            
                            echo "<div class='' id='scroll_messages'>";
                            echo $message_obj->getMessages($user_to);
                            echo "</div>";
                        }
                        else{
                            echo "<h2>New Message</h2>";
                        }
                    ?>
                        <form action="" method="POST"> 
                            <?php 
                                if($user_to == "new")
                                {

                                    echo "Select the friend you would like to message <br>";
                                    ?>
                                    <br><input type='text' style='padding:10px 0px 10px 10px; border-radius:5px; border:1px solid; width:50%;' onkeyup='getUsers(this.value, "<?php echo $userLoggedIn; ?>")' name='q' placeholder='Name' autocomplete='off' id='search_text_input'>
                                    <?php
                                    echo "<div class='results'></div>";
                                    echo "<br>";
                                }

                                

                                else{
                                    echo "<hr>";
                                    echo "<textarea name='message_body' id='message_textarea'  placeholder='Write your message ....'></textarea>";
                                    echo "<input type='submit' name='post_message' id='message_submit' value='Send'>";

                                }
                            ?>
                        </form>
                <script>
                    var div = document.getElementById("scroll_messages");
                    div.scrollTop = div.scrollHeight;
                </script>   
                        
						
					</div>
			</li>
    </ul>
        

    </div>
    </div>
            
</div>
    
<?php require '../helpers/footer.php';?>    



