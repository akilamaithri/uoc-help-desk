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
            
            
            <div id="first">

                <h2>Login</h2>

                <form action="register.php" method="POST">
                    <div class="input-box">
                    <input type="email" name="log_email" placeholder="Student Email" value="<?php 
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
                        <input type="submit" class="mainbtn" name="log_button" value="Login">
                    </div>
                    <br>
                        <?php if(in_array("Email or password was incorrect<br>",$error_array)) echo "Email or password was incorrect<br>" ?>
                        <a href="#" id="signup" class="signup">Sign Up - Register Here!</a>
                </form>
            </div>
        </div>

    
    </div>
</div>


</body>
    <?php require '../helpers/footer.php';?>



