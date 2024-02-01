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
    <script src="../Views/javascript/AddFeedback.js"></script>
    <title>Add Article</title>
</head>
<body class="Body">
    <form action="../Controllers/AddFeedbackValidation.php" method="post" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">
    <table>
        <tr>
            <td>
                <h1>Feedback</h1>
               

            <label class="PersonalInfoLabel" for="Email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input class ="PersonalInfoField" type="text" name="Email" id="Email" placeholder="Email"><br>        
     <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br>
     <span id ="EmailErr"> </span><br>

            <label class="PersonalInfoLabel" for="About"><b>About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input class ="PersonalInfoField" type="text" name="About" id="About" placeholder="Name"><br>
            <?php echo isset($_SESSION['AboutErr']) ? $_SESSION['AboutErr']:  "" ?><br>
            <span id ="AboutErr"> </span><br>

            
            <label class="PersonalInfoLabel" for="Body"><b>Body &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <textarea name="Body" id="Body" cols="30" rows="10" placeholder="Write your report here"></textarea><br>
           <?php echo isset($_SESSION['BodyErr']) ? $_SESSION['BodyErr']:  "" ?><br>
           <span id ="BodyErr"> </span><br>

            </td>
        </tr>
    </table>
    <input class="btn" type="submit" name="submit" id ="submit" value="Add Feedback"><br><br>
    <a class="DDref" href="Feedback.php">Back</a>

    </form>

    
</body>
</html>
<?php
include "Footer.html";