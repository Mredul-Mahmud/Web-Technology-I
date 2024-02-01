<?php 
session_start();
require '../Models/database.php';
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
    <script src="../Views/javascript/SearchFeedback.js"> </script>
    <title> Feedback</title>
</head>
<body class="Body">
    <hr>
    <h1>Search Feedback</h1>
    <hr>
    <form action="" method="post" novalidate onsubmit ="return isValid(this)">
<p>Enter email to see feedbacks</p>
<label class="PersonalInfoLabel" for = "Email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
<input class ="PersonalInfoField" type="email" name="Email" id="Email" placeholder="Email"><br>
<span id ="EmailErr"> </span><br>
 <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']: "" ?><br>
<input type="submit" name="submit" id ="submit" value="Search"><br><br>
</form>

<table  border= 1>
    <thead>
        <tr>
            <!-- <th>Feedback Number</th>
            <th>Email</th>
            <th>Complaint Against</th>
            <th>Body</th> -->
           
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


     if(isset ($_POST['submit']))
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") 
    {  

     $Email = sanitize($_POST['Email']);
     $flag= true;
     if (empty($Email)) {
		$_SESSION['EmailErr'] = "Email can not be Empty";
		$_SESSION['Email'] = "";
		$flag = false;
	}
	else {
		$_SESSION['EmailErr'] = "";
		$_SESSION['Email'] = $Email;
       
	}

 if($flag){
        // $_SESSION['track'] = "Ok";
        // $status =SearchFeedback($Email);
        $_SESSION['track'] = "Ok";
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
                    
                    <td>
                    <b>Feedback Number : </b>'.$row['Id'].'<br><br>
                    <b>Email :</b>'.$row['Email'].'<br><br>
                    <b>Complaint Against :</b>'.$row['About'].'<br><br>
                    <b>Comment :</b>'.$row['Body'].'</td><br>


                    </tr>
                    </tbody>';
            }
        } 

            
           
        }
        else{
            header("Location: SearchFeedback.php");
        }

       
       
    }
    



    }
   


    
?>

</tbody>
</table>
<a href="Feedback.php">Back</a><br><br>

<a class = "DDref" href="DoctorDashboard.php">Home</a><br>
<a class = "DDref" href=""></a>
<br><br><br>
    
</body>
</html>

<?php
include "Footer.html";
?>

