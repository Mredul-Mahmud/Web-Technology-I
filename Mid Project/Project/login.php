<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="loginValidation.php" method= "post" novalidate>
        <fieldset>
            <legend>Log In</legend>
            <table>
                <tr>
                    <td>
                    
                    <label for="Email"><b>Email</b> &nbsp; </label><br>
        <input type="email" name="Email" id="Email" ><br> 
        <span><?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

       <label for="Password"><b>Password</b> &nbsp; </label><br>
        <input type="text" name="Password" id="Password" ><br> 
       <span> <?php echo isset($_SESSION['PasswordErr']) ? $_SESSION['PasswordErr']:  "" ?><br></span>

                    </td>
                </tr>
            </table>
        </fieldset>
        <input type="submit" name="Submit" id ="Submit" value="Submit">
    </form>
    
</body>
</html>