<?php 

    require '../modules/connect.php';
    require '../controllers/User.php';
    require '../controllers/Complain.php';
    require '../views/announcement.php'; 
    require '../controllers/Message.php';
    require '../controllers/Notification.php';
    include '../controllers/login.php';
    
    require '../views/complain.php';  
    require '../views/forwardTo.php'; 
     

    // session_start();
    //  print_r($_SESSION);
    //  exit();

    if(isset($_SESSION['name'])){
        $userLoggedIn = $_SESSION['name'];
        $user_details_query = mysqli_query($con, "SELECT * FROM user WHERE name='$userLoggedIn'");
        $user = mysqli_fetch_array($user_details_query);
    }
    else{
        header("Location:../views/register.php");         
    }

    //methana ekak enna one (1)

?>

<!DOCTYPE html>
    <head>
        <title>
            UOC Help Desk
        </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link rel="shortcut icon" type="image/jpg" href="../../public/img/logo/favicon.png"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/helpdesk.js"></script>
        <script src="../../public/javascript/bootbox.min.js"></script>
        <script src="../../public/javascript/jcrop_bits.js"></script>
        <script src="../../public/javascript/jquery.Jcrop.js"></script>
        <script src="../../public/javascript/register.js"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/temp.css">
        <link rel="stylesheet" href="../../public/css/style.css">

        <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
        .fa-anchor,.fa-coffee {font-size:200px}
        </style>

    </head>
    <body>


    <!-- Numbers count -->
    <?php
        //Unread messages 
        $messages = new Message($con, $userLoggedIn);
        $num_messages = $messages->getUnreadNumber();

        //Unread notifications 
        $notifications = new Notification($con, $userLoggedIn);
        $num_notifications = $notifications->getUnreadNumber();

        //Unread friend req 
        $user_obj = new User($con, $userLoggedIn);
        $num_requests = $user_obj->getNumberOfFriendRequests();

	?>

    <div class="navbar" id="navbar" style="padding:0">

        <!------------- Logo -->
        <a href="../views/studentDash.php" class="link" style="float:left; padding:0; position:inline">
            <img src="../../public/img/logo/landscape.png" style="width:90px; height:50px">
        </a>

            <span class="lineBreak"><br><br><br></span>

            <!-- Logout -->

            <a href="../views/logout.php" class="nav-label"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out </a>


            <!-- Settings -->
            <a href="../views/settings.php" class="nav-label"><i class="fa fa-cog" aria-hidden="true"></i><span class="nav-label">&nbsp Settings</span></a>


            <!-- Messages -->

            <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'message')" class="nav-label">
            
            <i class="fa fa-comments" aria-hidden="true"></i>
            
            
            <span class="nav-label">Messages</span>
                    
            </a>


            <!--- Friends -->

            <a href="../views/requests.php" class="nav-label">
                <i class="fa fa-users" aria-hidden="true"></i>
                
                <?php
                    if($num_requests > 0)
                    echo '<div class="badge" id="unread_requests">' . $num_requests . '</div>';
                ?>
                
                <span class="nav-label">Friends</span>
            </a>


            <!---- Notification ---->

            <a href="javascript:void(0);" onclick="getDropdownData('<?php echo $userLoggedIn; ?>', 'notification')" class="nav-label">
                <i class="fa fa-bell" aria-hidden="true"></i>

                <?php
                    if($num_notifications > 0)
                        echo '<span class="badge" id="unread_notification">' . $num_notifications . '</span>';
                ?>

                <span class="nav-label">Notifications</span>
            </a>



            <!-------- Home -->

            <!-- <a href="../views/studentDash.php" class="nav-label">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="nav-label">Home</span> 
            </a>-->

            <?php
            require '../controllers/login.php';
            global $userType;
            if(!isset($userType)){
                if($userType==1){
                    echo '<a href="../views/staffHome.php" class="nav-label">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="nav-label">Home</span>';
                 }

                else{
                    echo '<a href="../views/studentDash.php" class="nav-label">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="nav-label">Home</span>';
                }
            }

            ?>

            <!------ My Profile ------>
            
            <a href= "<?php echo $userLoggedIn; ?>" class="nav-label"><i class="fa fa-user" aria-hidden="true"></i>&nbspMy Profile</a>

            <!-- Search -->
            <!-- <div class="search-bar">
                <form action="search.php" method="GET" name="search_form" >

                    <input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

                    <button type="submit" class="sbutton"><img src="../../public/img/icons/search.svg"></button>

                </form>

                <div class="search_results">
                </div>

                <div class="search_results_footer_empty">
                </div>

            </div> -->

            <div class="search">

                <form action="search.php" method="GET" name="search_form">
                    <input type="text" onkeyup="getLiveSearchUsers(this.value, '<?php echo $userLoggedIn; ?>')" name="q" placeholder="Search..." autocomplete="off" id="search_text_input">

                    <div class="button_holder">
                        <img src="../../public/img/icons/search.svg">
                    </div>

                </form>

                <div class="search_results">
                </div>

                <!-- <div class="search_results_footer_empty">
                </div> -->



		    </div>

            <a href="javascript:void(0);" class="icon" onclick="mobileNav()">
                <img src="../../public/img/icons/hamburg.svg">
            </a>
        </div>
        
    <!-- </div> -->
    </div>
    </div>
   <!-- <div class="wrapper"> -->

        <div class="dropdown_data_window" style="height:0px; border:none;"></div>
		<input type="hidden" id="dropdown_data_type" value="">
    
    </div>


<!---------------------- Functions -->

<script>
function mobileNav() {
  var n = document.getElementById("navbar");
  if (n.className === "navbar") {
    n.className += " responsive";
  }
  else {
    n.className = "navbar";
  }
}

// function doSearch() {
//   var n = document.getElementById("navbar");
//   if (n.className === "navbar") {
//     n.className += " responsive";
//   }
//   else {
//     n.className = "navbar";
//   }
// }

	$('.sbutton').on('click', function() {
		document.search_form.submit();
	})

      var userLoggedIn = '<?php echo $userLoggedIn; ?>';
      $(document).ready(function(){
      
      $('.dropdown_data_window').scroll(function(){
          var inner_height = $('.dropdown_data_window').innerHeight();
          var scroll_top = $('.dropdown_data_window').scrollTop();
          var page = $('.dropdown_data_window').find('.nextPageDropdownData').val();
          var noMoreData = $('.dropdown_data_window').find('.noMoreDropdownData').val();

          if((scroll_top + inner_height >= $('.dropdown_data_window')[0].scrollHeight) && noMoreData == 'false'){
          
              var pageName;
              var type = $('#dropdown_data_type').val();

              if(type == 'notification')
                  pageName = "ajax_load_notifications.php";
              else if(type == 'message')
                  pageName = "ajax_load_messages.php";


          var ajaxReq = $.ajax({
          url: "../libraries/" + pageName,
          type: "POST",
          data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
          cache:false,

          success: function(response){
              $('.dropdown_data_window').find('.nextPageDropdownData').remove();
              $('.dropdown_data_window').find('.noMoreDropdownData').remove();

              $('.dropdown_data_window').append(response);
          }
      });

  }
  return false;
      });

  });


</script>