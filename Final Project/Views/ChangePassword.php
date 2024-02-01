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
    <script src="../Views/javascript/ChangePassword.js"> </script>
    <title>Change Password</title>
</head>
<body class="Body">
    <form action="../Controllers/ChangePasswordValidation.php" method= "post"  class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">

    <fieldset>
        <legend>Change Password</legend>
        <table>
            <tr>
                <td>

                <label class="PersonalInfoLabel" for="Id"><b>Id</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="Id" id="Id" placeholder="Id"><br> 
                <span id ="IdErr"> </span><br>
            <span> <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br></span>


                <label class="PersonalInfoLabel" for="OldPassword"><b>Enter Old Password</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="OldPassword" id="OldPassword" placeholder="Old Password"><br> 
                <span id ="OldPasswordErr"> </span><br>
            <span> <?php echo isset($_SESSION['OldPasswordErr']) ? $_SESSION['OldPasswordErr']:  "" ?><br></span>

            <label class="PersonalInfoLabel" for="NewPassword"><b>Enter New Password</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="NewPassword" id="NewPassword" placeholder="New Password"><br> 
                <span id ="NewPasswordErr"> </span><br>
            <span> <?php echo isset($_SESSION['NewPasswordErr']) ? $_SESSION['NewPasswordErr']:  "" ?><br></span>

            <label class="PersonalInfoLabel" for="ConfirmNewPassword"><b>Confirm New Password</b> &nbsp; </label><br>
                <input class ="PersonalInfoField" type="text" name="ConfirmNewPassword" id="ConfirmNewPassword" placeholder="Confirm Password"><br> 
                <span id ="ConfirmNewPasswordErr"> </span><br>
                <span> <?php echo isset($_SESSION['ConfirmNewPasswordErr']) ? $_SESSION['ConfirmNewPasswordErr']:  "" ?><br><br></span>

            

            
                </td>
            </tr>
        </table>
    </fieldset><br>
    <input type="submit" name = "submit" id = "submit" value = "Done"><br><br>
    <a class="DDref" href="Settings.php">Go back</a>
</form>

</body>
</html>