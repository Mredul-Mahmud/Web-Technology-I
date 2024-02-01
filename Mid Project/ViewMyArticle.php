<?php 
session_start();
include "Header.html";
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>

<table >
    <thead>
        <tr>
            <th>Articles</th>
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
     $Username = sanitize($_SESSION['Username']);

     $status = MyArticle($Username);

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
<br><br><a href="DoctorDashboard.php">Back</a><br>
<a href="PersonalInfo.php">Personal Information</a>

    
</body>
</html>

<?php
include "Footer.html";
?>


