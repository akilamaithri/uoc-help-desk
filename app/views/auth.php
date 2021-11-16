<?php
    require '../modules/connect.php';
    require '../controllers/register.php';
    require '../controllers/login.php';
    require '../helpers/header.php';
?>

<html>
    <head>
        <title>UOC HELP DESK</title>
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="../../public/javascript/register.js"></script>
    </head>

<body>
<div>
    <div class="makeCenter">
    
    <div class="mainForm">
        
        <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>

                    <p>Please check your email and enter the code you received here.</p>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($error_array) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                             echo '<script>alert("Verification Code Sent to Your email address provided")</script>';
                            
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                        <div class="input-box">
                            <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                        </div>

                        <br>

                        
                        <input class="mainbtn" type="submit" name="check" value="Submit">
                        
                </form>
        
    </div>
</div>

</body>
    <?php require '../helpers/footer.php';?>



