<?php 
session_start();
include "Header.html";
require '../Models/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <script src="../Views/javascript/DeleteFeedback.js"> </script>
    <title>Feedback</title>
</head>
<body class="Body">
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
<form action="../Controllers/DeleteFeedbackValidation.php" method="post" novalidate  onsubmit ="return isValid(this)">
<p>Enter Id to delete a feedback</p>
<label for = "Id"><b>Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
<input type="text" name="Id" id="Id" placeholder ="Feedback Id"><br>
<span id ="IdErr"> </span><br>
 <?php echo isset($_SESSION['IdErr']) ? $_SESSION['IdErr']:  "" ?><br>
<input type="submit" name="submit" id ="submit" value="Delete"><br><br>
</form>
<br><br><a class="DDref" href="Feedback.php">Back</a><br><br>
<a class="DDref" href="DoctorDashboard.php">DoctorDashboard</a>
<br><br><br>
    
</body>
</html>

<?php
include "Footer.html";
?>
