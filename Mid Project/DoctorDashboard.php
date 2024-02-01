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
    <title>Document</title>
   
</head>
<body>
<hr>
    <h1>Homepage </h1>
    <p><b>Set up your Personal Informations if you haven't yet</b></p>
    <a href="PersonalInfo.php">Set your Personal Information</a><br><br>
    <hr>
    <p><b>View Profile</b></p>
  
    <hr><br>
    <a href="ProfileView.php">Profile Information</a><br>
    <a href="Profile.php"> View My Profile</a><br>
    <hr><br>
    <p><b>Update</b></p>
    <hr>
    <a href="UpdateProfile.php"> Update Profile Information</a><br>
    <a href="UpdatePersonalInfo.php">Update personal Information</a><br>
    <a href="ChangePassword.php">Change Your Password</a><br>
<hr><br>
<p><b>Feedbacks</b></p>
<hr><br>
    <a href="Feedback.php">Feedback</a><br>
    <a href=""></a><br>
    <hr><br>
    <p><b>Articles</b></p>
    <hr><br>
<a href="Articles.php">Articles</a><br>
<hr><br><hr>
    <a href="logout.php">Log out</a><br>
<hr>
<?php
include "Footer.html";
?>
</body>
</html>