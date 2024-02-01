<?php 
session_start();
include "Header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form action="NewPasswordValidation.php" method= "post" novalidate>

    <fieldset>
        <legend>Change Your Password</legend>
        <table>
            <tr>
                <td>

                <label for="Email"><b>Email</b> &nbsp; </label><br>
                <input type="email" name="Email" id="Email" placeholder="Email"><br> 
            <span> <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

            <label for="NewPassword"><b>Enter New Password</b> &nbsp; </label><br>
                <input type="text" name="NewPassword" id="NewPassword" placeholder="New Password"><br> 
            <span> <?php echo isset($_SESSION['NewPasswordErr']) ? $_SESSION['NewPasswordErr']:  "" ?><br></span>

            <label for="ConfirmNewPassword"><b>Confirm New Password</b> &nbsp; </label><br>
                <input type="text" name="ConfirmNewPassword" id="ConfirmNewPassword" placeholder="Confirm Password"><br> 
            <span> <?php echo isset($_SESSION['ConfirmNewPasswordErr']) ? $_SESSION['ConfirmNewPasswordErr']:  "" ?><br><br></span>

            

            
                </td>
            </tr>
        </table>
    </fieldset><br>
    <input type="submit" name = "submit" id = "submit" value = "Done"><br>
    <a href="login.php">Go back</a>
</form>

</body>
</html>