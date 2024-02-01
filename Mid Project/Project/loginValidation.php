<?php 
session_start();
require "database.php";

$Email = $Password = "";
$EmailErr = $PasswordErr = "";

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset ($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === "POST")
{
    $Email = sanitize($_POST['Email']);
    $Password = sanitize($_POST['Password']);
    $flag = true;


    if (empty($Email)) {
		$_SESSION['EmailErr'] = "Email Empty";
		$_SESSION['Email'] = "";
		$flag = false;
    }
        
        
	
	else {
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
        {
            $_SESSION['VEmailErr'] = "Invalid email format";
            $flag = false;
        }
        else{
        $_SESSION['EmailErr'] = "";
		$_SESSION['Email'] = $Email;

        }
       
		
    }

    if (empty($Password)) {
		$_SESSION['PasswordErr'] = "Password Empty";
		$_SESSION['Password'] = "";
		$flag = false;
	}
	else {
		$_SESSION['PasswordErr'] = "";
		$_SESSION['Password'] = $Password;
    }
    if($flag)
    {
        $_SESSION['track'] = "Ok";

        $status = Userlogin($Email, $Password);
        if($status)
        {
           // echo "ok";
            header('location: DoctorDashboard.php');
    }
    else{
        echo "Not Okay";
    }
}
else{
    //echo "Something Went Wrong";
    header("Location: login.php");
}

}
}
?>