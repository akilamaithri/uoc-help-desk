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

    <div id="second" >
        <h2>Register</h2>
        <!-- <div id="second"> -->
                <form action="register.php" method="POST">
                    <div class="input-box">
                        <input type="text" name="reg_name" placeholder="Name" value="<?php 
                            if(isset($_SESSION['reg_name'])){
                                echo $_SESSION['reg_name'];
                            }
                        ?>" required>
                    </div>
                    <br>
                        <?php 
                            if(in_array("Your Name must be between 2 and 25 characters<br>",$error_array)) echo "Your Name must be between 2 and 25 characters<br>";
                        ?>
                    <div class="input-box">
                        <input type="text" name="reg_email" placeholder="Student Email" value="<?php 
                            if(isset($_SESSION['reg_name'])){
                                echo $_SESSION['reg_name'];
                            }
                        ?>"  required>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="text" name="reg_email2" placeholder="Confirm Email" value="<?php 
                            if(isset($_SESSION['reg_name'])){
                                echo $_SESSION['reg_name'];
                            }
                        ?>"  required>
                    </div>
                    <br>
                        <?php 
                            if(in_array("Email is already Used<br>",$error_array)) echo "Email is already Used<br>";
                            elseif(in_array("Invalid Format<br>",$error_array)) echo "Invalid Format<br>"; 
                            elseif(in_array("Emails don't match<br>",$error_array)) echo "Emails don't match<br>";
                        ?>
                    <div class="input-box">
                        <input type="password" name="reg_password" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="input-box">
                        <input type="password" name="reg_password2" placeholder="Confirm Password" required>
                    </div>
                    <br>
                        <?php 
                            if(in_array("Your Password do not match<br>",$error_array)) echo "Your Password do not match<br>";
                            elseif(in_array("Your password can only have english characters or numbers<br>",$error_array)) echo "Your password can only have english characters or numbers<br>"; 
                            elseif(in_array("Your password must be between 5 and 30 characters<br>",$error_array)) echo "Your password must be between 5 and 30 characters<br>";
                        ?>

                        <input type="submit" class="mainbtn" name="register_button" value="Register">
                    <br>
                        <?php 
                            if(in_array("<span style='color:#14c800;'> You are all set! Goahead and login!</span><br>",$error_array)) echo "<span style='color:#14c800;'> You are all set! Goahead and login!</span><br>";
                        ?>
                        <a href="#" id="signin" class="signin">Already Have an account? Sign in Here!</a>
                        
                </form>
                    </div>
        <!-- </div> -->
    </div>
</div>

</body>
    <?php require '../helpers/footer.php';?>



