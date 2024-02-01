<?php
session_start();
include "Header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
</head>
<body>
    <form action="AddFeedbackValidation.php" method="post" novalidate>
    <table>
        <tr>
            <td>
                <h1>Feedback</h1>
               

            <label for="Email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="Email" id="Email" placeholder="Email"><br>
            <span> <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

            <label for="About"><b>About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="About" id="About" placeholder="Name"><br>
            <span> <?php echo isset($_SESSION['AboutErr']) ? $_SESSION['AboutErr']:  "" ?><br></span>

            
            <label for="Body"><b>Body &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <textarea name="Body" id="Body" cols="30" rows="10"></textarea>
            <span> <?php echo isset($_SESSION['BodyErr']) ? $_SESSION['BodyErr']:  "" ?><br></span>

            </td>
        </tr>
    </table>
    <input type="submit" name="submit" id ="submit" value="Add Feedback"><br><br>
    <a href="Feedback.php">Back</a>

    </form>

    
</body>
</html>