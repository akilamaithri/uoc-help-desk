<?php 
require '../helpers/headerIn.php';
require '../views/complain.php';  
require '../controllers/User.php';
require '../controllers/Complain.php';
// mekata pahalin ekk enna one (5)-(2)
// session_destroy();

if(isset($_POST['complain'])){
    $complain = new Complain($con,$userLoggedIn);
    $complain->submitComplain($category,$complainTitle,$body,$user_to);
    header("Location:studentDash.php");
}




?>
<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
<link rel="stylesheet" type="text/css" href="../../public/css/temp.css">

<br>
<br>
<div class="user_details column">
    <a href="<?php echo $userLoggedIn; ?>">
        <img src="<?php echo $user['profile_pic']; ?>">
    </a>
    <div class="user_details_left_right">
    <a href="<?php echo $userLoggedIn; ?>">
       <?php echo $user['name']; ?> 
    </a>
    <br>
    <?php echo "Complains: " . $user['num_posts'] . "<br>";
    echo "Others Reviews: " . $user['num_likes'];
    ?>
</div>

</div>



<div class="main_column column">
    <!-- <form class="complain_form" action="studentDash.php" method="POST">
        <textarea name="complain_text" id="complain_text" placeholder="Add a Public Complain "></textarea> 
        <input type="submit" name="complain" id="complain_button" value="PUBLISH"><hr>
    </form> -->


    <!-- <div class="complain_area"> </div>
    <img id="loading" src="../../public/img/loading.gif"> -->


</div>
<script>

    var userLoggedIn = '<?php echo $userLoggedIn; ?>';
    $(document).ready(function(){
        $('#loading').show();
        $.ajax({
            url: "../libraries/ajax_load_complain.php",
            type: "POST",
            data: "page=1&userLoggedIn=" + userLoggedIn,
            cache:false,

            success: function(data){
                $('#loading').hide();
                $('.complain_area').html(data);
            }
        });
        $(window).scroll(function(){
            var height = $('.complain_area').height();
            var scroll_top = $(this).scrollTop();
            var page = $('.complain_area').find('.nextPage').val();
            var noMoreComplain = $('.complain_area').find('.noMoreComplain').val();

            if((document.body.scrollHeight == document.body.scrollTop + window.innerHeight) && noMoreComplain == 'false'){
            $('#loading').show();

            var ajaxReq = $.ajax({
            url: "../libraries/ajax_load_complain.php",
            type: "POST",
            data: "page=" + page + "&userLoggedIn=" + userLoggedIn,
            cache:false,

            success: function(response){
                $('.complain_area').find('.nextPage').remove();
                $('.complain_area').find('.noMoreComplain').remove();

                $('#loading').hide();
                $('.complain_area').append(response);
            }
        });

    }
    return false;
        });

    });

</script>


</div>
</div>


<?php include("../helpers/footer.php"); ?>



