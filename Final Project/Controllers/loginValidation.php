<?php 
session_start();
require "../Models/database.php";

$_SESSION['EmailErr']= "";
$_SESSION['PasswordErr']= "";


$sessionTimeout = 10;
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
    $Remember = isset($_POST['Remember']) ? $_POST['Remember'] : false;
    $flag = true;


    if (!empty($Email)) {
        $_SESSION['EmailErr'] = "";
		$_SESSION['Email'] = $Email;
		
    }
        
        elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) 
        {
            $_SESSION['EmailErr'] = "Invalid email format";
            $flag = false;
        }
        else{
            $_SESSION['EmailErr'] = "Email Empty";
		$_SESSION['Email'] = "";
		$flag = false;
        

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
       // $status = Userlogin($Email, $Password);
        $con = getConnection();
        $stmt = $con->prepare("SELECT * from auth where Email= ? AND Password= ?");
        $stmt->bind_param('ss', $Email, $Password);
        $stmt->execute();
        $stmt->bind_result($Id, $Username, $Gender, $Email, $Image, $PhoneNumber, $Password, $PasswordRecover);
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $_SESSION['Email'] = $Email;
            if ($rememberMe) {
                setcookie('Email', $email, time() + (2 * 60), '/');
                setcookie('Password', $password, time() + (2 * 60), '/');
                setcookie('Remember', 'true', time() + (2 * 60), '/');
            }
            header('Location: ../Views/DoctorDashboard.php');
            // while ($stmt->fetch()) {
               
            //     header('Location: ../Views/DoctorDashboard.php');
            // }
        } else {
            header('Location: ../Views/login.php');

        }
        $conn->close();
           // echo "ok";

    }
else{
    

    header("Location: ../Views/login.php");
    $_SESSION['PasswordErr'] = "Email and Password doesn't match";

}
}


?>