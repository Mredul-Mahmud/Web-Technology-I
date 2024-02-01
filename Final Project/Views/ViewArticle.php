<?php 
session_start();
require '../Models/Database.php';
include "Header.html";
if (!isset($_SESSION['Email'])) 
{
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <title> Articles</title>
</head>
<body class="Body">
    <hr>
    <h1>View All Articles</h1>
    <hr>
<table>
    <!-- <thead>
       <tr>
            <th>Article Id</th>
            <th>Article Code</th>
            <th>Author Name</th>
            <th>Body</th>
           
        </tr>
    </thead> -->
    <?php   
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
     //$ArticleCode = sanitize($_SESSION['ArticleCode']);


     $status = ViewArticle();

     if($status)
 {
     while($row=mysqli_fetch_assoc($status)){
    
     echo '
     <tbody>
     <tr>
     <td><fieldset><br><br>
     Article Id :'.$row['Id'].'<br><br>
     Article Code :'.$row['ArticleCode'].'<br><br>
     Author Name :'.$row['AuthorName'].'<br><br>
     Body :<br>'.$row['Body'].'</fieldset><br></td><br><br>
     
     
    
     

</tr>
</tbody>';
     }
 }






    
?>


</table>
<a class="DDref"  href="Articles.php">Back</a><br><br>
<a class="DDref" href="DoctorDashboard.php">Home</a><br>
<a href=""></a><br><br><br>

    
</body>
</html>

<?php
include "Footer.html";
?>

