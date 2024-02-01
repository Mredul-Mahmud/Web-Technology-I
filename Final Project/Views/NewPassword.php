<?php 
session_start();
include "Header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/styles.css">
    <script src="../Views/javascript/NewPassword.js"> </script>
    <title>Change Password</title>
</head>
<body class="Body">
    <form action="../Controllers/NewPasswordValidation.php" method= "post" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">

    <fieldset>
        <legend>Change Your Password</legend>
        <table>
            <tr>
                <td>

                <label class="PersonalInfoLabel" for="Email"><b>Email</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="email" name="Email" id="Email" placeholder="Email"><br> 
                <span id ="EmailErr"> </span><br>
           <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br>

            <label class="PersonalInfoLabel" for="NewPassword"><b>Enter New Password</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="NewPassword" id="NewPassword" placeholder="New Password"><br> 
                <span id ="NewPasswordErr"> </span><br>
             <?php echo isset($_SESSION['NewPasswordErr']) ? $_SESSION['NewPasswordErr']:  "" ?><br>

            <label class="PersonalInfoLabel" for="ConfirmNewPassword"><b>Confirm New Password</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="ConfirmNewPassword" id="ConfirmNewPassword" placeholder="Confirm Password"><br>
                <span id ="ConfirmNewPasswordErr"> </span><br> 
           <?php echo isset($_SESSION['ConfirmNewPasswordErr']) ? $_SESSION['ConfirmNewPasswordErr']:  "" ?><br><br>

            

            
                </td>
            </tr>
        </table>
    </fieldset><br><br><br>
    <input type="submit" name = "submit" id = "submit" value = "Done"><br><br>
    <a class ="DDref" href="login.php">Go back</a>
</form>

</body>
</html>
<?php
include "Footer.html";
?>