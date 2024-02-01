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
    <title> My Profile</title>
</head>
<body>

<table >
    <thead>
        <tr>
            <th>Profile Information</th>
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

     //$status = profileView($Email);
     $con = getConnection();
     $stmt = $con->prepare("Select Id, Username, Gender, Email, Image, PhoneNumber from auth Where Email =?");  
     $stmt->bind_param('s', $Email);
	//$stmt =execute();
    $stmt->execute();
        //$stmt->bind_result( $Id, $Username, $Gender, $Email, $Image, $PhoneNumber);
        $result = $stmt->get_result();
        //$stmt->store_result();
     
    //     if($stmt->num_rows == 1)
    // {
        while($row = $result->fetch_assoc()){
       
        echo '
        <tr>
        <td>Id      : <b>'.$row['Id'].' </b><br><br>
        Username    :<b>'.$row['Username'].'</b><br><br>
        Gender    :<b>'.$row['Gender'].'</b><br><br>
    
        Email       :<b>'.$row['Email'].'</b><br><br>
        Phone Number:<b>'.$row['PhoneNumber'].'</b></td>
        
       
        

</tr>';

        }
        while ($row = $result->fetch_assoc()) {
            

           ?>
          
                <img src="./image/<?php echo $status['Name']; ?>">
     
            <?php
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

