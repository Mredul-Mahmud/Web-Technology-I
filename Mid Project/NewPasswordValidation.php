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
        $Email = sanitize($_POST['Email']);
        $NewPassword = sanitize($_POST['NewPassword']);
        $ConfirmNewPassword = sanitize($_POST['ConfirmNewPassword']);
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
            $con = getConnection();
            $sql = "UPDATE auth SET Password = ? WHERE  Email = ?";
            $stmt = $con->prepare($sql);
    
            if ($stmt) {
                $stmt->bind_param('ss', $ConfirmNewPassword, $Email);
                $stmt->execute();
                $stmt->close();
    
                header("Location: login.php");
            } else {
                die("Something went wrong: " . $con->error);
            }
           
           
            
        }
        else{
            header("Location: NewPassword.php");
        }

     } 
        



    }        


?>