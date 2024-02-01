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
    <script src="../Views/javascript/UpdatePersonalInformation.js"> </script>
    <script src="../Views/javascript/UpdateProfile.js"> </script>
    <title>Update Profile</title>
</head>
<body class="Body">
<form method="post" action="../Controllers/UpdateProfileValidation.php" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)"> 
  <h1>Update your Profile Informations</h1>
<fieldset>
            <legend>Update Your Profile</legend>
       
        <table>
        <tr>
      
        <td>
        <img src="" alt=""><br>

        <p>*You cannot change your "Id".</p><br>
        <label class="PersonalInfoLabel" for="Id"><b>Id</b> &nbsp; </label><br>
        <input class ="PersonalInfoField" type="text" name="Id" id="Id" placeholder="Id"><br> 
        <span id ="IdErr"> </span><br>
        <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br>

        <label class="PersonalInfoLabel" for="Username"><b>User Name</b> &nbsp; </label><br>
        <input  class ="PersonalInfoField" type="text" name="Username" id="Username" placeholder="Username"><br> 
        <span id ="UsernameErr"> </span><br>
        <?php echo isset($_SESSION['UsernameErr']) ? $_SESSION['UsernameErr']:  "" ?><br>
      
       <label class="PersonalInfoLabel" for="Email"><b>Email</b> &nbsp; </label><br>
        <input class ="PersonalInfoField" type="email" name="Email" id="Email" placeholder="Email"><br> 
        <span id ="EmailErr"> </span><br>
       <?php echo isset($_SESSION['EmaileErr']) ? $_SESSION['EmailErr']:  "" ?><br>
       
       <label class="PersonalInfoLabel" for="Gender"><b> Gender&nbsp;&nbsp;:</b>  </label>
        <input type="radio" name="Gender"value="Male">Male
        <input type="radio" name="Gender" value="Female">Female <br>
        <span id ="GenderErr"> </span><br>
       <?php echo isset($_SESSION['GenderErr']) ? $_SESSION['GenderErr'] : "" ?>
                <br>

       <label class="PersonalInfoLabel" for="PhoneNumber"><b>Phone Number</b> &nbsp; </label><br>
        <input class ="PersonalInfoField" type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number"><br> 
        <span id ="PhoneNumberErr"> </span><br>
        <?php echo isset($_SESSION['PhoneNumberErr']) ? $_SESSION['PhoneNumberErr']:  "" ?><br>
       

        </td>
        </tr>
        
    </table>
    </fieldset><br>
    <input type="submit" name="submit" id ="submit" value="Update"><br><br>
  <a class="DDref" href="Settings.php"> Back</a><br>
  <a class="DDref" href="UpdatePersonalInfo.php"> Update Your Personal Information</a>
    <br><br><br><br>
</body>
</form>
</html>

<?php
include "Footer.html";
?>