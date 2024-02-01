<?php
session_start();
 require "../Models/database.php";

 
 if (!isset($_SESSION['Email'])) 
{
    header("Location: ../Views/login.php");
    exit();
}

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset ($_POST['submit']))
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") 
    {  
        $Email = sanitize($_SESSION['Email']);
        $FirstName = sanitize($_POST['FirstName']);
        $LastName = sanitize($_POST['LastName']);
        $FatherName = sanitize($_POST['FatherName']);
        $MotherName = sanitize($_POST['MotherName']);
        $BloodGroup = sanitize($_POST['BloodGroup']);
        $Religion = sanitize($_POST['Religion']);
        $Website = ($_POST['Website']);
        $Schedule = sanitize($_POST['Schedule']);
        $Dob = sanitize($_POST['Dob']);
        $flag = true;  


        if (empty($FirstName)) {
            $_SESSION['FirstNameErr'] = "Name Empty";
            $_SESSION['FirstName'] = "";
            $flag = false;
        }
        else {
            $_SESSION['FirstNameErr'] = "";
            $_SESSION['FirstName'] = $FirstName;
            if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) 
            {
                $_SESSION['FirstNameErr'] = "Only letters and white space allowed";
            }
        }

        if (empty($LastName)) {
            $_SESSION['LastNameErr'] = "Name Empty";
            $_SESSION['LastName'] = "";
            $flag = false;
        }
        else {
            $_SESSION['LastNameErr'] = "";
            $_SESSION['LastName'] = $LastName;
            if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) 
            {
                $_SESSION['LastNameErr'] = "Only letters and white space allowed";
            }
        }

        if (empty($FatherName)) {
            $_SESSION['FatherNameErr'] = "Name Empty";
            $_SESSION['FatherName'] = "";
            $flag = false;
        }
        else {
            $_SESSION['FatherNameErr'] = "";
            $_SESSION['FatherName'] = $FatherName;
            if (!preg_match("/^[a-zA-Z-' ]*$/",$FatherName)) 
            {
                $_SESSION['FatherNameErr'] = "Only letters and white space allowed";
            }
        }

        if (empty($MotherName)) {
            $_SESSION['MotherNameErr'] = "Name Empty";
            $_SESSION['MotherName'] = "";
            $flag = false;
        }
        else {
            $_SESSION['MotherNameErr'] = "";
            $_SESSION['MotherName'] = $MotherName;
            if (!preg_match("/^[a-zA-Z-' ]*$/",$MotherName)) 
            {
                $_SESSION['MotherNameErr'] = "Only letters and white space allowed";
            }
        }
        if (empty($BloodGroup)) {
            $_SESSION['BloodGroupErr'] = "";
            $_SESSION['BloodGroupErr'] = " Please select a Blood group";
            $flag = false;
    
        } else {
            $_SESSION['BloodGroupErr'] = "";
            $_SESSION['BloodGroup'] = $BloodGroup;
    
    
        }
        if (empty($Religion)) {
            $_SESSION['ReligionErr'] = "";
            $_SESSION['ReligionErr'] = " Please select your Religion";
            $flag = false;
    
        } else {
            $_SESSION['ReligionErr'] = "";
            $_SESSION['Religion'] = $Religion;
    
        }
        if (empty($Website)) {
            $_SESSION['WebsiteErr'] = "Website Empty";
            $_SESSION['Website'] = "";
            $flag = false;
        }
        else {
            $_SESSION['WebsiteErr'] = "";
            $_SESSION['Website'] = $Website;
             
        }


        if (empty($Schedule)) {
            $_SESSION['ScheduleErr'] = "Schedule cannot be Empty";
            $_SESSION['Schedule'] = "";
            $flag = false;
        }
        else {
            $_SESSION['ScheduleErr'] = "";
            $_SESSION['Schedule'] = $Schedule;
           
        }

        if ($flag) {

            $_SESSION['track'] = "Ok";
    
    
            $user = ['Email'=> $Email, 'FirstName'=> $FirstName, 'LastName'=> $LastName, 'FatherName'=> $FatherName, 'MotherName'=> $MotherName, 'BloodGroup'=> $BloodGroup, 'Religion'=> $Religion, 'Website'=> $Website, 'Schedule'=> $Schedule, 'Dob'=> $Dob];
           // $status = personalProfile($user);
           $con = getConnection();
           $sql = "insert into profile(Email, FirstName, LastName, FatherName, MotherName, BloodGroup, Religion, Website, Schedule, Dob )values(?,?,?,?,?,?,?,?,?,?)";
		
		$stmt = mysqli_stmt_init($con);
		
		if(!mysqli_stmt_prepare($stmt, $sql))
		{
			echo "Statement Failed";
		}
		else{
			mysqli_stmt_bind_param($stmt,"ssssssssss", $user['Email'], $user['FirstName'], $user['LastName'], $user['FatherName'], $user['MotherName'], $user['BloodGroup'],$user['Religion'], $user['Website'], $user['Schedule'], $user['Dob']);
			$status = mysqli_stmt_execute($stmt);
		}

                header('location:../Views/ProfileChangeSuccess.php');
            
            
        }
        else{
           
           header("location: ../Views/PersonalInfo.php");
        }




    }
}
?>