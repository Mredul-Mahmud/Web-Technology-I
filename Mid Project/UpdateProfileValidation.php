<?php 
session_start();
require "database.php";


if (!isset($_SESSION['Email'])) 
{
    header("Location: login.php");
    exit();
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset ($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === "POST") {  
    $Id = ($_POST['Id']);
	$Username = sanitize($_POST['Username']);
	$Email = sanitize($_POST['Email']);
	$Gender = ($_POST['Gender']);
    $PhoneNumber = sanitize($_POST['PhoneNumber']);
    
    $flag = true;  

	if (empty($Id)) {
		$_SESSION['IdErr'] = "Id Empty";
		$_SESSION['Id'] = "";
		$flag = false;
	}
	else {
		$_SESSION['IdErr'] = "";
		$_SESSION['Id'] = $id;
       
	}

    if (empty($Username)) {
		$_SESSION['UsernameErr'] = "Username Empty";
		$_SESSION['Username'] = "";
		$flag = false;
	}
	else {
		$_SESSION['UsernameErr'] = "";
		$_SESSION['Username'] = $Username;
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) 
        {
            $_SESSION['UsernameErr'] = "Only letters and white space allowed";
        }
	}
	if (empty($Email)) {
		$_SESSION['EmailErr'] = "Email Empty";
		$_SESSION['Email'] = "";
		$flag = false;
       
	}
	elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
        {
            $_SESSION['EmailErr'] = "Invalid email format";
            $flag  = false;
        }
		else{
			$_SESSION['EmailErr'] = "";
			$_SESSION['Email'] = $Email;
		}
	if (empty($Gender)) {
		$_SESSION['GenderErr'] = "";
		$_SESSION['GenderErr'] = " Please select Gender";
		$flag = false;

	} else {
		$_SESSION['GenderErr'] = "";
		$_SESSION['Gender'] = $Gender;


	}


    if (empty($PhoneNumber)) {
		$_SESSION['PhoneNumberErr'] = "PhoneNumber Empty";
		$_SESSION['PhoneNumber'] = "";
		$flag = false;
	}
	else {
		$_SESSION['PhoneNumberErr'] = "";
		$_SESSION['PhoneNumber'] = $PhoneNumber;
	}

  


    if ($flag) {

        $_SESSION['track'] = "Ok";
		$con = getConnection();
		$stmt = $con->prepare("update auth set Username = ?, Gender = ?, Email = ?,PhoneNumber = ? Where id =?");
		if ($stmt) {
			$stmt->bind_param('ssssi', $Username, $Gender, $Email, $PhoneNumber, $Id);
			$stmt->execute();
		} else {
			die("Error in statement preparation: " . $con->error);
		}


		// mysqli_query($con, $sql);
		$stmt = mysqli_stmt_init($con);
        //$status = updateProfileInfo($Id,$Username, $Email, $Gender, $PhoneNumber);
        header('location:ProfileChangeSuccess.php');
        
		
	}
	else{
		header("Location: UpdateProfile.php");
	}
	
		
}

}

?>