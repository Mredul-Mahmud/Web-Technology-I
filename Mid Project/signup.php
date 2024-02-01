<?php
session_start();
include "Header.html";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="signupValidation.php" novalidate enctype = "multipart/form-data" > 
<fieldset>
            <legend>Do your Registration</legend>
       
        <table>
        <tr>
      
        <td>
       

        <label for="Username"><b>User Name</b> &nbsp; </label><br>
        <input type="text" name="Username" id="Username" placeholder="Username"><br> 
       <span> <?php echo isset($_SESSION['UsernameErr']) ? $_SESSION['UsernameErr']:  "" ?><br></span>
      
       
       <label for="Gender"><b> Gender&nbsp;&nbsp;:</b>  </label>
        <input type="radio" name="Gender"value="Male">Male
        <input type="radio" name="Gender" value="Female">Female <br>
        <span> <?php echo isset($_SESSION['GenderErr']) ? $_SESSION['GenderErr'] : "" ?>
                <br></span>

       <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" placeholder="Email"><br> 
       <span> <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

       <label for="Image"><b>Image</b> &nbsp; </label><br>
        <input type="file" name="Image" id="Image" ><br> 
       <span> <?php echo isset($_SESSION['ImageErr']) ? $_SESSION['ImageErr']:  "" ?><br></span>
       
       <label for="PhoneNumber"><b>Phone Number</b> &nbsp; </label><br>
        <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="Phone Number"><br> 
       <span> <?php echo isset($_SESSION['PhoneNumberErr']) ? $_SESSION['PhoneNumberErr']:  "" ?><br></span>
       
       <label for="Password"><b>Password</b> &nbsp; </label><br>
        <input type="text" name="Password" id="Password" placeholder="Password"><br> 
       <span> <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br></span>

       <label for="ConfirmPassword"><b>Confirm Password</b> &nbsp; </label><br>
        <input type="text" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confin Password"><br> 
       <span> <?php echo isset($_SESSION['ConfirmPasswordErr']) ? $_SESSION['ConfirmPasswordErr']:  "" ?><br><br></span>

       <p>*Share this Information in case you forget the password</p>
       <p>Who was your first best friend?</p>
       <label for="PasswordRecover"><b>Enter your best friend's name</b> &nbsp; </label><br>
        <input type="text" name="PasswordRecover" id="PasswordRecover" placeholder="Recover Question"><br> 
       <span> <?php echo isset($_SESSION['PasswordRecoverErr']) ? $_SESSION['PasswordRecoverErr']:  "" ?><br><br></span>

        </td>
        </tr>
        
    </table>
    </fieldset><br>
    <input type="submit" name="submit" id ="submit" value="Sign up"><br><br>
    <p>Already have an account?</p>
    <p>Click <a href="login.php">here</a> to log in</p>
    
</body>
</form>
</html>

<?php
include "Footer.html";
?>