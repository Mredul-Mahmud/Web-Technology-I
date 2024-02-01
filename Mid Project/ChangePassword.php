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
    <form action="ChangePasswordValidation.php" method= "post" novalidate>

    <fieldset>
        <legend>Change Password</legend>
        <table>
            <tr>
                <td>

                <label for="Id"><b>Id</b> &nbsp; </label><br>
                <input type="text" name="Id" id="Id" placeholder="Id"><br> 
            <span> <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br></span>


                <label for="OldPassword"><b>Enter Old Password</b> &nbsp; </label><br>
                <input type="text" name="OldPassword" id="OldPassword" placeholder="Old Password"><br> 
            <span> <?php echo isset($_SESSION['OldPasswordErr']) ? $_SESSION['OldPasswordErr']:  "" ?><br></span>

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
    <a href="DoctorDashboard.php">Go back</a>
</form>

</body>
</html>