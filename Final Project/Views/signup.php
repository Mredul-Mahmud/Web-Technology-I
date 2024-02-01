<?php
session_start();
include "Header.html";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Views/javascript/registration.js"> </script>
    <link rel="stylesheet" href="../Views/css/demosu.css">
    <title>Signup</title>
</head>
<body class="Authbody">
<div class="formbody">
<form class="Sform" method="post" action="../Controllers/signupValidation.php" novalidate enctype="multipart/form-data" onsubmit="return isValid(this)">
<fieldset class ="fieldset">
            <!-- <legend class>Do your Registration</legend> -->
       
        <table>
        <tr>
      
        <td>
    
    <label class="Alabel" for="Username"><b>User Name</b> &nbsp; </label><br>
        <input class ="field" type="text" name="Username" id="Username" placeholder="Username" value="<?php echo isset($_SESSION['Username']) ? $_SESSION['Username'] : "" ?>">
        
        <?php echo isset($_SESSION['UsernameErr']) ? $_SESSION['UsernameErr']:  "" ?><br>
        <span id="UsernameErr"></span><br> 

       
       <label class="Alabel" for="Gender"><b> Gender&nbsp;&nbsp;:</b>  </label>
        <input type="radio" name="Gender"value="Male" >Male
        <input type="radio" name="Gender" value="Female">Female 
        
         <?php echo isset($_SESSION['GenderErr']) ? $_SESSION['GenderErr'] : "" ?>
                <br>
                <span id="GenderErr"></span><br>

       <label class="Alabel" for="Email"><b>Email</b> &nbsp; </label><br>
        <input class ="field" type="email" name="Email" id="Email" placeholder="Email" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : "" ?>">
        
        <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br>
        <span id="EmailErr"></span><br> 

       <label class="Alabel" for="Image"><b>Image</b> &nbsp; </label><br>
        <input type="file" name="Image" id="Image" value="<?php echo isset($_SESSION['Image']) ? $_SESSION['Image'] : "" ?>"><br>
         
        <?php echo isset($_SESSION['ImageErr']) ? $_SESSION['ImageErr']:  "" ?><br>
        <span id="ImageErr"></span><br>

       <label class="Alabel" for="PhoneNumber"><b>Phone Number</b> &nbsp; </label><br>
        <input class ="field" type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number" value="<?php echo isset($_SESSION['PhoneNumber']) ? $_SESSION['PhoneNumber'] : "" ?>">
        
       <?php echo isset($_SESSION['PhoneNumberErr']) ? $_SESSION['PhoneNumberErr']:  "" ?><br>
       <span id="PhoneNumberErr"></span><br> 

       <label class="Alabel" for="Password"><b>Password</b> &nbsp; </label><br>
        <input class ="field" type="text" name="Password" id="Password" placeholder="Password" value="<?php echo isset($_SESSION['Password']) ? $_SESSION['Password'] : "" ?>"><br> 
        
       <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br>
       <span id="PasswordErr"></span><br>

       <label class="Alabel" for="ConfirmPassword"><b>Confirm Password</b> &nbsp; </label><br>
        <input class ="field" type="text" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" value="<?php echo isset($_SESSION['ConfirmPassword']) ? $_SESSION['ConfirmPassword'] : "" ?>">
       
      <?php echo isset($_SESSION['ConfirmPasswordErr']) ? $_SESSION['ConfirmPasswordErr']:  "" ?><br><br>
      <span id="ConfirmPasswordErr"></span><br> 

       <p>*Share this Information in case you forget the password</p>
       <p>Who was your first best friend?</p>
       <label class="Alabel" for="PasswordRecover"><b>Enter your best friend's name</b> &nbsp; </label><br>
        <input class ="field" type="text" name="PasswordRecover" id="PasswordRecover" placeholder="Recover Question" value="<?php echo isset($_SESSION['PasswordRecover']) ? $_SESSION['PasswordRecover'] : "" ?>">
        
        <?php echo isset($_SESSION['PasswordRecoverErr']) ? $_SESSION['PasswordRecoverErr']:  "" ?><br><br>
        <span id="PasswordRecoverErr"></span>
        </td>
        </tr>
        
    </table>
    </fieldset><br>
    <input class="AuthBtn" type="submit" name="submit" id ="submit" value="Sign up"><br>
   
    
    <p>Already have an account?</p>
    <p>Click <a href="../Views/login.php">here</a> to log in</p>
    </form>
    </div>
    <br><br><br><br><br><br>
    
</body>

</html>

<?php
include "Footer.html";
?>