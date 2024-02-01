<?php 
session_start();
include "Header.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="loginValidation.php" method= "post" novalidate>
        <fieldset>
            <legend>Log In</legend>
            <table>
                <tr>
                    <td>
                    
                    <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" placeholder="Email" ><br> 
        <span><?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

       <label for="Password"><b>Password</b> &nbsp; </label><br>
        <input type="text" name="Password" id="Password" placeholder="Password"><br> 
       <span> <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br></span>

                    </td>
                </tr>
            </table>
        </fieldset><br>
        <p><input type="checkbox" name="remember" /> Remember me <br>
        <input type="submit" name="submit" id ="submit" value="Log in"><br>
        <a href="ForgetPassword.php">Forgot password?</a>
        <p>Do not have an account?</p>
        <p>Click <a href="signup.php">here</a> to create one</p>
         
    </form>
    
</body>
</html>