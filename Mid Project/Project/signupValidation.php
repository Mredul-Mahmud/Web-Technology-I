<?php 
session_start();
require "database.php";
$Username =  $Email = $PhoneNumber = $Password = $ConfirmPassword = "";
$UsernameErr =  $EmailErr = $PhoneNumberErr = $PasswordErr = $ConfirmPasswordErr = "";

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset ($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === "POST") {  
	$Username = sanitize($_POST['Username']);
    $Email = sanitize($_POST['Email']);
    $PhoneNumber = sanitize($_POST['PhoneNumber']);
    $Password = sanitize($_POST['Password']);
    $ConfirmPassword = sanitize($_POST['ConfirmPassword']);

    $flag = true;

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
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = sanitize($_POST["gender"]);
      }


    if (empty($Email)) {
		$_SESSION['EmailErr'] = "Email Empty";
		$_SESSION['Email'] = "";
		$flag = false;
       
	}
	else {
     if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
        {
            $_SESSION['EmailErr'] = "Invalid email format";
            $_SESSION['Email'] = "";
        }
		$_SESSION['EmailErr'] = "";
		$_SESSION['Email'] = $Email;
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


    if (empty($Password)) {
		$_SESSION['PasswordErr'] = "Password Empty";
		$_SESSION['Password'] = "";
		$flag = false;
	}
	else {
		$_SESSION['PasswordErr'] = "";
		$_SESSION['Password'] = $Password;
	}


    if (empty($ConfirmPassword)) {
		$_SESSION['ConfirmPasswordErr'] = "ConfirmPassword Empty";
		$_SESSION['ConfirmPassword'] = "";
		$flag = false;
	}
	else {
		$_SESSION['ConfirmPasswordErr'] = "";
		$_SESSION['ConfirmPassword'] = $ConfirmPassword;
	}
  if($Password != $ConfirmPassword)
  {
    $_SESSION['PasswordErr'] = "Both Passwords Doesn't Match";
		$_SESSION['Password'] = "";
    $flag = false;
  }
  




    if ($flag) {

        $_SESSION['track'] = "Ok";


        $user = [ '', 'Username'=> $Username, 'Email'=> $Email, '', 'PhoneNumber'=> $PhoneNumber, 'Password'=> $Password, 'ConfirmPassword'=> $ConfirmPassword];
        $status = userSignup($user);
        if($status){
          //echo "Okay";
            header('location:Bypass.php');
        }else{
            echo " Something went wrong, try again";
        }
        
		
	}
	else{
		header("Location: signup.php");
	}
	
		
}

}

?>