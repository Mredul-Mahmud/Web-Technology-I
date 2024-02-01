<?php 
session_start();
require "../Models/database.php";
if (!isset($_SESSION['Email'])) 
{
    header("Location: login.php");
    exit();
}

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
        $Id = sanitize($_POST['Id']);
        $OldPassword = sanitize($_POST['OldPassword']);
        $NewPassword = sanitize($_POST['NewPassword']);
        $ConfirmNewPassword = sanitize($_POST['ConfirmNewPassword']);
        $flag = true;
      
        
        if (empty($Id)) {
            $_SESSION['IdErr'] = "Id  Empty";
            $_SESSION['Id'] = "";
            $flag = false;
        }
        else {
            $_SESSION['OldPasswordErr'] = "";
            $_SESSION['OldPassword'] = $OldPassword;
        }

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
          // $status = updatepassword($Id, $OldPassword, $NewPassword);
        $con = getConnection();
        $sql = "UPDATE auth SET Password = ? WHERE  Id = ?";
        $stmt = $con->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('ss', $ConfirmNewPassword, $Id);
            $stmt->execute();
            $stmt->close();

            header("Location: ../Views/login.php");
        } else {
            die("Something went wrong: " . $con->error);
        }
           // header("Location: ChangeConfirm.php");
           
            
        }
        else{
            header("Location: ../Views/ChangePassword.php");
        }

     } 
        



    }        


?>