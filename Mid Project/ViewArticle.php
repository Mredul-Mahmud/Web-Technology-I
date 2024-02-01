<?php 
session_start();
require 'Database.php';
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
    <title> Articles</title>
</head>
<body>
    <hr>
    <h1>View All Articles</h1>
    <hr>


<table  border= 1>
    <thead>
        <tr>
            <th>Article Id</th>
            <th>Article Code</th>
            <th>Author Name</th>
            <th>Body</th>
           
        </tr>
    </thead>
    <tbody>

    
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
    
     <tr>
     <td>'.$row['Id'].'</td>
     <td>'.$row['ArticleCode'].'</td>
     <td>'.$row['AuthorName'].'</td>
     <td>'.$row['Body'].'</td>
     
     
    
     

</tr>';
     }
 }






    
?>

</tbody>
</table>
<a href="Articles.php">Back</a><br><br>
<a href="DoctorDashboard.php">Home</a><br>
<a href=""></a>

    
</body>
</html>

<?php
include "Footer.html";
?>

