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
    <form action="AddArticleValidation.php" method="post" novalidate>
    <table>
        <tr>
            <td>
                <h1>Add Article</h1>
               

            <label for="ArticleCode"><b>Article Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="ArticleCode" id="ArticleCode" placeholder="Article Code">><br>
            <span> <?php echo isset($_SESSION['ArticleCodeErr']) ? $_SESSION['ArticleCodeErr']:  "" ?><br></span>

            <label for="AuthorName"><b>Author Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="AuthorName" id="AuthorName" placeholder="Author Name">><br>
            <span> <?php echo isset($_SESSION['AuthorNameErr']) ? $_SESSION['AuthorNameErr']:  "" ?><br></span>

            
            <label for="Body"><b>Body &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <textarea name="Body" id="Body" cols="30" rows="10"></textarea>
            <span> <?php echo isset($_SESSION['BodyErr']) ? $_SESSION['BodyErr']:  "" ?><br></span>

            </td>
        </tr>
    </table>
    <input type="submit" name="submit" id ="submit" value="Add Article"><br><br>
    <a href="Articles.php">Back</a>

    </form>

    
</body>
</html>