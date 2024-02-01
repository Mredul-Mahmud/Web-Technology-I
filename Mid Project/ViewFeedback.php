<?php 
session_start();
include "Header.html";
require 'database.php';
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
    <title>Feedback</title>
</head>
<body>

<table border =1 >
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Complaint Against</th>
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
    //  $Username = sanitize($_SESSION['Username']);

     $status = ViewFeedback();

        if($status)
    {
        while($row=mysqli_fetch_assoc($status)){
       
        echo '
        <tr>
        <td>'.$row['Id'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['About'].'</td>
        <td>'.$row['Body'].'</td>
        

       
        

</tr>';
        }
    }
    
?>

</tbody>
</table>
<br><br><a href="Feedback.php">Back</a><br>
<a href="DoctorDashboard.php">DoctorDashboard</a>

    
</body>
</html>


<?php
include "Footer.html";
?>
