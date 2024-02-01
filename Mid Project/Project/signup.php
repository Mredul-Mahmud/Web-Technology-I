<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="signupValidation.php" novalidate > 
<fieldset>
            <legend>Do your Registration</legend>
       
        <table>
        <tr>
      
        <td>
        <img src="" alt="">

        <label for="Username"><b>User Name</b> &nbsp; </label><br>
        <input type="text" name="Username" id="Username" ><br> 
       <span> <?php echo isset($_SESSION['UsernameErr']) ? $_SESSION['UsernameErr']:  "" ?><br></span>

       <label for="Gender"><b> Gender&nbsp;&nbsp;:</b>  </label>
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="female") echo "checked";?>
        value="female">Female
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="male") echo "checked";?>
        value="male">Male <br>

       <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" ><br> 
       <span> <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

       <label for="PhoneNumber"><b>Phone Number</b> &nbsp; </label><br>
        <input type="tel" name="PhoneNumber" id="PhoneNumber" ><br> 
       <span> <?php echo isset($_SESSION['PhoneNumberErr']) ? $_SESSION['PhoneNumberErr']:  "" ?><br></span>
       
       <label for="Password"><b>Password</b> &nbsp; </label><br>
        <input type="text" name="Password" id="Password" ><br> 
       <span> <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br></span>

       <label for="ConfirmPassword"><b>Confirm Password</b> &nbsp; </label><br>
        <input type="text" name="ConfirmPassword" id="ConfirmPassword" ><br> 
       <span> <?php echo isset($_SESSION['ConfirmPasswordErr']) ? $_SESSION['ConfirmPasswordErr']:  "" ?><br><br></span>

        </td>
        </tr>
        
    </table>
    </fieldset><br>
    <input type="submit" name="submit" id ="submit" value="submit"><br><br>
    <p>Already have an account?</p><br>
    <a href="login.php">login</a>
    
</body>
</form>
</html>

