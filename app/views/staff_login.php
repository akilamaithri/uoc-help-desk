<?php
    // require '../modules/connect.php';
    // // require '../controllers/register.php';
    // require '../controllers/login.php';
    require '../helpers/header.php';
    session_destroy();
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
        
        
        <div id="first">

            <h2>Login</h2>

            <form action="" method="">
                <div class="input-box">
                <input type="email" name="log_email" placeholder="Staff Email" value="<?php 
                    if(isset($_SESSION['log_email'])){
                        echo $_SESSION['log_email'];
                    }
                    ?>" required>
                </div>
                <br>
                <div class="input-box">
                    <input type="password" name="log_password" placeholder="Password">
                </div>
                <br>
                <div class="input-box">
                    <div class="col">
                    <a href="staffHome.php" class="mainbtn" >Login</a>
                </div>
                <br>


            </form>
        </div>
    </div>
</div>
    
    
</div>


</body>
    <?php require '../helpers/footer.php';?>



