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
    if(!empty($_POST["remember"])) {
        setcookie ("Email",$_POST["Email"],time()+ 20);
        setcookie ("password",$_POST["Password"],time()+ 20);
        //echo "Cookies Set Successfuly";
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
            while ($stmt->fetch()) {
               
                header('Location: DoctorDashboard.php');
            }
        } else {
            header('Location: Error.php');

        }
           // echo "ok";

    }
else{
    $_SESSION['PasswordErr'] = "Email and Password doesn't match";

    header("Location: login.php");

}
}
}

?>