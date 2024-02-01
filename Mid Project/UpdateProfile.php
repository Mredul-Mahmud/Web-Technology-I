<?php
session_start();
include "Header.html";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
</head>
<body>
<form method="post" action="UpdateProfileValidation.php" novalidate > 
  <h1>Update your Profile Informations</h1>
<fieldset>
            <legend>Update Your Profile</legend>
       
        <table>
        <tr>
      
        <td>
        <img src="" alt="">

        <label for="Id"><b>Id</b> &nbsp; </label><br>
        <input type="text" name="Id" id="Id" placeholder="Id"><br> 
       <span> <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br></span>

        <label for="Username"><b>User Name</b> &nbsp; </label><br>
        <input type="text" name="Username" id="Username" placeholder="Username"><br> 
       <span> <?php echo isset($_SESSION['UsernameErr']) ? $_SESSION['UsernameErr']:  "" ?><br></span>
      
       <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" placeholder="Email"><br> 
       <span> <?php echo isset($_SESSION['EmaileErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>
       
       <label for="Gender"><b> Gender&nbsp;&nbsp;:</b>  </label>
        <input type="radio" name="Gender"value="Male">Male
        <input type="radio" name="Gender" value="Female">Female <br>
        <span> <?php echo isset($_SESSION['GenderErr']) ? $_SESSION['GenderErr'] : "" ?>
                <br></span>

       <label for="PhoneNumber"><b>Phone Number</b> &nbsp; </label><br>
        <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number"><br> 
       <span> <?php echo isset($_SESSION['PhoneNumberErr']) ? $_SESSION['PhoneNumberErr']:  "" ?><br></span>
       

        </td>
        </tr>
        
    </table>
    </fieldset><br>
    <input type="submit" name="submit" id ="submit" value="Update"><br><br>
  <a href="DoctorDashboard.php"> Back</a><br>
  <a href="UpdatePersonalInfo.php.php"> Update Your Personal Information</a>
    
</body>
</form>
</html>

<?php
include "Footer.html";
?>