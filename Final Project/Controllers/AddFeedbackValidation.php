<?php
session_start();
 require "../Models/database.php";

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
       
        $Email = sanitize($_POST['Email']);
        $About = sanitize($_POST['About']);
        $Body = sanitize($_POST['Body']);
        
        $flag = true;  

        
        if (empty($Email)) {
            $_SESSION['EmailErr'] = "Email Can Not be Empty";
            $_SESSION['Email'] = "";
            $flag = false;
        }
        else {
            $_SESSION['EmailErr'] = "";
            $_SESSION['Email'] = $Email;
            
        }

        if (empty($About)) {
            $_SESSION['AboutErr'] = "About Can Not be Empty";
            $_SESSION['About'] = "";
            $flag = false;
        }
        else {
            $_SESSION['AboutErr'] = "";
            $_SESSION['About'] = $About;
            
            
        }

        if (empty($Body)) {
            $_SESSION['BodyErr'] = "Body Can Not be Empty";
            $_SESSION['Body'] = "";
            $flag = false;
        }
        else {
            $_SESSION['BodyErr'] = "";
            $_SESSION['Body'] = $Body;
            
        }

        if ($flag) {

            $_SESSION['track'] = "Ok";
    
    
            $Feedback = ['','Email'=> $Email, 'About'=> $About, 'Body'=> $Body,];
           // $status = AddArticle($Article);
           $con = getConnection();
           $sql = "insert into feedback(Id, Email , About, Body)values(?,?,?,?)";
		
           $stmt = mysqli_stmt_init($con);
           
           if(!mysqli_stmt_prepare($stmt, $sql))
           {
               echo "Statement Failed";
           }
           else{
               mysqli_stmt_bind_param($stmt,"isss", $Feedback[''], $Feedback['Email'], $Feedback['About'], $Feedback['Body']);
               $status = mysqli_stmt_execute($stmt);
           }               
           if ($status)
           {         
               
               header('location:../Views/Feedback.php');
           } else {
               echo " Something went wrong, try again";
           }
            
            
        }
        else{
            header("Location: ../Views/AddFeedback.php");
        }

    }
}
?>