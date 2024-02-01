<?php 
session_start();
require "database.php";

$OldPassword = $NewPassword = $ConfirmNewPassword = "";
$OldPasswordErr = $NewPasswordErr = $ConfirmNewPasswordErr = "";

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

 if(isset($_POST['submit']))
 {
    if ($_SERVER['REQUEST_METHOD'] === "POST") { 
        $Email = sanitize($_SESSION['Email']);
        $OldPassword = sanitize($_POST['OldPassword']);
        $NewPassword = sanitize($_POST['NewPassword']);
        $ConfirmNewPassword = sanitize($_POST['ConfirmNewPassword']);
        $flag = true;
      
        
        if (empty($OldPassword)) {
            $_SESSION['OldPasswordErr'] = "Password  Empty";
            $_SESSION['OldPassword'] = "";
            $flag = false;
        }
        else {
            $_SESSION['OldPasswordErr'] = "";
            $_SESSION['OldPassword'] = $OldPassword;
        }
    
    
        if (empty($NewPassword)) {
            $_SESSION['NewPasswordErr'] = "Password Empty";
            $_SESSION['NewPassword'] = "";
            $flag = false;
        }
        else {
            $_SESSION['NewPasswordErr'] = "";
            $_SESSION['NewPassword'] = $NewPassword;
        }

        
        if (empty($ConfirmNewPassword)) {
            $_SESSION['ConfirmNewPasswordErr'] = "Password Empty";
            $_SESSION['ConfirmNewPassword'] = "";
            $flag = false;
        }
        else {
            $_SESSION['ConfirmNewPasswordErr'] = "";
            $_SESSION['ConfirmNewPassword'] = $ConfirmNewPassword;
        }

        if($NewPassword != $ConfirmNewPassword)
        {
          $_SESSION['ConfirmNewPasswordErr'] = "Both Passwords Doesn't Match";
              $_SESSION['ConfirmNewPassword'] = "";
          $flag = false;
        }

        if($flag)
        {
            $_SESSION['track'] = "Ok";
            //var_dump ($_SESSION['Username']);
           $status = updatepassword($Email, $OldPassword, $NewPassword);
           
            header("Location: ChangeConfirm.php");
           
            
           }

        }
        else{
            header("Location: ChangePassword.php");
        }



    }        
 

?>