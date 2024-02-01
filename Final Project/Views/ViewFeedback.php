<?php 
session_start();
include "Header.html";
require '../Models/database.php';
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
    <title>Feedback</title>
</head>
<body class="Body">
<h1>All Feedbacks</h1>
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
<br><br><a class="DDref" href="Feedback.php">Back</a><br><br>
<a class="DDref" href="DoctorDashboard.php">DoctorDashboard</a>

    <br><br><br><br>
</body>
</html>


<?php
include "Footer.html";
?>
