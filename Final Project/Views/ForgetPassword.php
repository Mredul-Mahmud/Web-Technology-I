<?php 
session_start();
include "Header.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <script src="../Views/javascript/ForgetPassword.js"> </script>
    <title>Forget Password</title>
</head>
<body class ="Body">
    <form action="../Controllers/ForgetPasswordValidation.php" method= "post" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">
        <fieldset>
            <legend>Forget Password</legend>
            <table>
                <tr>
                    <td>
                    
                    <label class="PersonalInfoLabel" for="Email"><b>Email</b> &nbsp; </label><br>
        <input class ="PersonalInfoField" type="email" name="Email" id="Email" placeholder="Email"><br> 
        <span id ="EmailErr"> </span><br>
        <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br>

       <label class="PersonalInfoLabel" for="PasswordRecover"><b>Enter your best friend's name</b> &nbsp; </label><br>
        <input class ="PersonalInfoField" type="text" name="PasswordRecover" id="PasswordRecover" placeholder="Recover Question"><br> 
        <span id ="PasswordRecoverErr"> </span><br>
       <?php echo isset($_SESSION['PasswordRecoverErr']) ? $_SESSION['PasswordRecoverErr']:  "" ?><br>

                    </td>
                </tr>
            </table>
        </fieldset><br>
        <input type="submit" name="submit" id ="submit" value="Submit"><br>
        <p>Log in another account</p>
        <p>Click <a class ="DDref" href="login.php">here</a> to Log In</p>
         
    </form>
    <br><br><br>
    
</body>
</html>
<?php
include "Footer.html";
?>