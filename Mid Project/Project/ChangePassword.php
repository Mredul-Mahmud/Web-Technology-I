<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form action="ChangePasswordValidation.php" method= "post" novalidate>

    <fieldset>
        <legend>Change Password</legend>
        <table>
            <tr>
                <td>
               
                <label for="OldPassword"><b>Enter Old Password</b> &nbsp; </label><br>
                <input type="text" name="OldPassword" id="OldPassword" ><br> 
            <span> <?php echo isset($_SESSION['OldPasswordErr']) ? $_SESSION['OldPasswordErr']:  "" ?><br></span>

            <label for="NewPassword"><b>Enter New Password</b> &nbsp; </label><br>
                <input type="text" name="NewPassword" id="NewPassword" ><br> 
            <span> <?php echo isset($_SESSION['NewPasswordErr']) ? $_SESSION['NewPasswordErr']:  "" ?><br></span>

            <label for="ConfirmNewPassword"><b>Confirm New Password</b> &nbsp; </label><br>
                <input type="text" name="ConfirmNewPassword" id="ConfirmNewPassword" ><br> 
            <span> <?php echo isset($_SESSION['ConfirmNewPasswordErr']) ? $_SESSION['ConfirmNewPasswordErr']:  "" ?><br><br></span>

            

            
                </td>
            </tr>
        </table>
    </fieldset>
    <input type="submit" name = "submit" id = "submit" value = "Done">
    </form>

</body>
</html>