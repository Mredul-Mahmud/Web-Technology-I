<?php 
session_start();
include "Header.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <form action="ForgetPasswordValidation.php" method= "post" novalidate>
        <fieldset>
            <legend>Forget Password</legend>
            <table>
                <tr>
                    <td>
                    
                    <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" placeholder="Email"><br> 
        <span><?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

       <label for="PasswordRecover"><b>Enter your best friend's name</b> &nbsp; </label><br>
        <input type="text" name="PasswordRecover" id="PasswordRecover" placeholder="Recover Question"><br> 
       <span> <?php echo isset($_SESSION['PasswordRecoverErr']) ? $_SESSION['PasswordRecoverErr']:  "" ?><br></span>

                    </td>
                </tr>
            </table>
        </fieldset><br>
        <input type="submit" name="submit" id ="submit" value="Submit"><br>
        <p>Log in another account</p>
        <p>Click <a href="login.php">here</a> to Log In</p>
         
    </form>
    
</body>
</html>