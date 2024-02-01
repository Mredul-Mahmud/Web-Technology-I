<?php 
session_start();
require "../Models/database.php";


function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset ($_POST['submit'])){
if ($_SERVER['REQUEST_METHOD'] === "POST") {  
	$Username = sanitize($_POST['Username']);
	$Gender = ($_POST['Gender']);
    $Email = sanitize($_POST['Email']);
	$Image =  $_FILES["Image"]["name"];
    $tempname = $_FILES["Image"]["tmp_name"];
    $folder = "./upload/" . $Image;
    $PhoneNumber = sanitize($_POST['PhoneNumber']);
    $Password = sanitize($_POST['Password']);
    $ConfirmPassword = sanitize($_POST['ConfirmPassword']);
	$PasswordRecover = sanitize($_POST['PasswordRecover']);

    $flag = true;  
	
    if (empty($Username)) {
		$_SESSION['UsernameErr'] = "Username Empty";
		$_SESSION['Username'] = "";
		$flag = false;
	}
	else {
		
		$_SESSION['Username'] = $Username;
        if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) 
        {
            $_SESSION['UsernameErr'] = "Only letters and white space allowed";
        }
	}
	if (empty($Gender)) {
		$_SESSION['GenderErr'] = " Please select Gender";
		$flag = false;

	} else {
		$_SESSION['GenderErr'] = "";
		$_SESSION['Gender'] = $Gender;


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
		
		// if (empty($Image)) {
		// 	$_SESSION['ImageErr'] = "Image is Empty";
		// 	$_SESSION['Image'] = "";
		// 	$flag = false;
		// }
		// else {
		// 	$_SESSION['ImageErr'] = "";
		// 	$_SESSION['Image'] = $Image;
		// }


    if (empty($PhoneNumber)) {
		$_SESSION['PhoneNumberErr'] = "PhoneNumber Empty";
		$flag = false;
	}
	else {
		$_SESSION['PhoneNumberErr'] = "";
		$_SESSION['PhoneNumber'] = $PhoneNumber;
	}


    if (empty($Password)) {
		$_SESSION['PasswordErr'] = "Password Empty";
		$flag = false;
	}
	else {
		$_SESSION['PasswordErr'] = "";
		$_SESSION['Password'] = $Password;
	}


    if (empty($ConfirmPassword)) {
		$_SESSION['ConfirmPasswordErr'] = "ConfirmPassword Empty";
		$flag = false;
	}
	else {
		$_SESSION['ConfirmPasswordErr'] = "";
		$_SESSION['ConfirmPassword'] = $ConfirmPassword;
	}
	if (empty($PasswordRecover)) {
		
		$_SESSION['PasswordRecoverErr'] = " This answer cannot be empty";
		$flag = false;

	} else {
		$_SESSION['PasswordRecoverrErr'] = "";
		$_SESSION['PasswordRecover'] = $PasswordRecover;


	}
  if($Password != $ConfirmPassword)
  {
    $_SESSION['PasswordErr'] = "Both Passwords Doesn't Match";
    $flag = false;
  }
  else {
	$_SESSION['PasswordErr'] = "";
	
}
  




    if ($flag) {
		$_SESSION['track'] = "Ok";
		$user = ['','Username'=> $Username,'Gender'=> $Gender, 'Email'=> $Email, 'Image'=> $Image,'PhoneNumber'=> $PhoneNumber, 'Password'=> $Password, 'ConfirmPassword'=> $ConfirmPassword, 'PasswordRecover'=> $PasswordRecover];		   
		$con = getConnection();
	
		$sql = "insert into auth(Id, Username, Gender, Email, Image, PhoneNumber, Password, PasswordRecover )values(?,?,?,?,?,?,?,?)";
		
		// $status = mysqli_query($con, $sql);
		$stmt = mysqli_stmt_init($con);
		
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			echo "Statement Failed";
		}
		else{
			mysqli_stmt_bind_param($stmt,"isssssss", $user[''], $user['Username'], $user['Gender'], $user['Email'], $user['Image'], $user['PhoneNumber'],$user['Password'], $user['PasswordRecover']);
			$status = mysqli_stmt_execute($stmt);
		}
     
        if($status){
          //echo "Okay";
		 if (move_uploaded_file($tempname, $folder)) {
			header('location:../Views/Bypass.php');
		 }else{
			echo "Image not uploaded";

		  }
           
        }else{
           header('Location:../Views/Bypass.php');;
        }
        
		
	}
	else{
		header("Location:../Views/signup.php");
	}
	
		
}
else{
    header("Location:../Views/signup.php");

}

}
else{
    header("Location: ../Views/signup.php");

}

?>