<?php 
session_start();
include "Header.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/demo.css">
    <script src="../Views/javascript/login.js"> </script>
    <title>Log in</title>
</head>
<body class="loginbody">
    <div  id = "logindiv">
<div id = "formdiv">
<form action="../Controllers/loginValidation.php" method= "post" novalidate class="form" onsubmit ="return isValid(this)">
<h2 id="hd">Log In</h2>
    <div id ="fielddiv">
    <fieldset class ="fieldset">
            
            <table>
                <tr>
                    <td>
                    
                    <label class="Alabel" for="Email"><b>Email</b> &nbsp; </label><br>
        <input class ="field" type="email" name="Email" id="Email" placeholder="Email" ><br> 
        <span id ="EmailErr"> </span><br>
        <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br>

       <label class="Alabel" for="Password"><b>Password</b> &nbsp; </label><br>
        <input class ="field" type="password" name="Password" id="Password" placeholder="Password"><br> 
        <span id ="PasswordErr"> </span><br>
        <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br>

                    </td>
                </tr>
            </table>
    </div>    

        </fieldset>
        <p id="remember"><input type="checkbox" name="remember" id="remember"/> Remember me <br>
        <input class="loginBtn" type="submit" name="submit" id ="submit" value="Log in"><br>
        <a href="ForgetPassword.php">Forgot password?</a>
        <p>Do not have an account?</p>
        <p>Click <a href="signup.php">here</a> to create one</p>
         
    </form>
</div>
    </div>
    
    
</body>
</html>

<?php
include "Footer.html";
?>

