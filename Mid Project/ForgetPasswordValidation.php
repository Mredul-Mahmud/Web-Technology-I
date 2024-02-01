<?php 
session_start();
require "database.php";

$Email = $PasswordRecover = "";
$EmailErr = $PasswordRecoverErr = "";

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
    $PasswordRecover = sanitize($_POST['PasswordRecover']);
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

    if (empty($PasswordRecover)) {
		$_SESSION['PasswordRecoverErr'] = "Password Empty";
		$_SESSION['PasswordRecover'] = "";
		$flag = false;
	}
	else {
		$_SESSION['PasswordRecoverErr'] = "";
		$_SESSION['PasswordRecover'] = $PasswordRecover;
    }
    if($flag)
    {
        $_SESSION['track'] = "Ok";

        $con = getConnection();
        $stmt = $con->prepare("SELECT * from auth where Email= ? AND PasswordRecover= ?");
        $stmt->bind_param('ss', $Email, $PasswordRecover);
        $stmt->execute();
        $stmt->bind_result($Id, $Username, $Gender, $Email, $Image, $PhoneNumber, $Password, $PasswordRecover);
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            while ($stmt->fetch()) {
                $_SESSION['PasswordRecoverErr'] = "Informations doesn't Match";
                header('Location: NewPassword.php');
            }
        } else {
            header('Location: ForgetPassword.php');

        }
    }
    else{
        //echo "Something Went Wrong";
        header("Location: ForgetPassword.php");
        }
    
}
}

?>