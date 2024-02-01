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
    <title>Feedback</title>
</head>
<body>
    <h4>Here are the feedbacks</h4>

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
      $Email = sanitize($_SESSION['Email']);
    $con = getConnection();
    $sql = "Select * from feedback Where Email =?";
    $stmt = $con->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('s', $Email);
        $stmt->execute();
        $result = $stmt->get_result();

        while($row = $result->fetch_assoc())
        {
                //
                echo '
                <tr>
        <td>'.$row['Id'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['About'].'</td>
        <td>'.$row['Body'].'</td>


                </tr>
                </tbody>';
        }
    } 

        
    
?>

</tbody>
</table>
<form action="DeleteFeedbackValidation.php" method="post" novalidate>
<p>Enter Id to delete a feedback</p>
<label for = "Id"><b>Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
<input type="text" name="Id" id="Id" placeholder ="Feedback Id"><br>
<span> <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br></span>
<input type="submit" name="submit" id ="submit" value="Delete"><br><br>
</form>
<br><br><a href="Feedback.php">Back</a><br>
<a href="DoctorDashboard.php">DoctorDashboard</a>

    
</body>
</html>



