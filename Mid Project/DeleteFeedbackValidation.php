<?php 
session_start();
require "database.php";

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset ($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === "POST") {  
    $Id = ($_POST['Id']);
    $flag = true;  

	if (empty($Id)) {
		$_SESSION['IdErr'] = "Id can not be Empty";
		$_SESSION['Id'] = "";
		$flag = false;
	}
	else {
		$_SESSION['IdErr'] = "";
		$_SESSION['Id'] = $Id;
       
	}
    if($flag)
    {
    $_SESSION['track'] = "Ok";
    //var_dump ($_SESSION['Username']);
  // $status = updatepassword($Id, $OldPassword, $NewPassword);
$con = getConnection();
$sql = "delete from feedback Where Id =?";
$stmt = $con->prepare($sql);

if ($stmt) {
    $stmt->bind_param('s',  $Id);
    $stmt->execute();
    $stmt->close();

    header('location: DeleteFeedback.php');
   // echo'<script>alert (Successfully deleted);</script>';
} else {
    die("Something went wrong: " . $con->error);
}
        //$status = DeleteFeedback($Email);
       
    }
    else{
        header('location: DeleteFeedback.php');
    }

}
}