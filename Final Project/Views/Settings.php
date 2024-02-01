<?php
include "Header.html";
session_start();

if (!isset($_SESSION['Email'])) 
{
    header("Location: login.php");
    exit();
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <title>Settings</title>
</head>
<body class="Body">
    <hr>
    <p><b>Manage Profile Information</b></p>
    <hr>
<a class="DDref" href="PersonalInfo.php">Set Your Personal Information</a><br><br>
<a class="DDref" href="UpdateProfile.php"> Update Profile Information</a><br>
    <a class="DDref" href="UpdatePersonalInfo.php">Update Personal Information</a><br>
    <hr>
    <p><b>Privacy</b></p>
    <hr>
   
    <a class="DDref" href="ChangePassword.php">Change Your Password</a><br>
<hr><br>
<button class ="btn"><a class="DDref" href="DoctorDashboard.php">Back</a></button>
</body>
<?php
include "Footer.html";
?>


</html>
