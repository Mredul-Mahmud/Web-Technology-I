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
    <script src="../Views/javascript/Addarticle.js"> </script>
    <title>Add Article</title>
</head>
<body class="Body">
    <form action="../Controllers/AddArticleValidation.php" method="post" class="PersonalInfoForm" novalidate  onsubmit ="return isValid(this)">
    <table>
        <tr>
            <td>
                <h1>Add Article</h1>
               

            <label  class="PersonalInfoLabel" for="ArticleCode"><b>Article Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="ArticleCode" id="ArticleCode" placeholder="Article Code"><br>
            <span id ="ArticleCodeErr"> </span><br>
            <span> <?php echo isset($_SESSION['ArticleCodeErr']) ? $_SESSION['ArticleCodeErr']:  "" ?><br></span>

            <label  class="PersonalInfoLabel" for="AuthorName"><b>Author Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="AuthorName" id="AuthorName" placeholder="Author Name"><br>
            <span id ="AuthorNameErr"> </span><br>
            <span> <?php echo isset($_SESSION['AuthorNameErr']) ? $_SESSION['AuthorNameErr']:  "" ?><br></span>

            
            <label class="PersonalInfoLabel" for="Body"><b>Body &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <textarea name="Body" id="Body" cols="30" rows="10"></textarea><br>
            <span id ="BodyErr"> </span><br>
            <span> <?php echo isset($_SESSION['BodyErr']) ? $_SESSION['BodyErr']:  "" ?><br></span>

            </td>
        </tr>
    </table>
    <input class="btn" type="submit" name="submit" id ="submit" value="Add Article"><br><br>
    <a class="DDref" href="Articles.php">Back</a>

    </form>

    
</body>
</html>
<?php
include "Footer.html";
?>