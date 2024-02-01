<?php
session_start();
 require "../Models/database.php";

 function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 $_SESSION['ArticleCodeErr'] = "";
 $_SESSION['AuthorNameErr'] = "";
 $_SESSION['BodyErr'] = "";
 if(isset ($_POST['submit']))
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") 
    {  
       
        $ArticleCode = sanitize($_POST['ArticleCode']);
        $AuthorName = sanitize($_POST['AuthorName']);
        $Body = sanitize($_POST['Body']);
        
        $flag = true;  

        
        if (empty($ArticleCode)) {
            $_SESSION['ArticleCodeErr'] = "Article code Can Not be Empty";
            $_SESSION['ArticleCode'] = "";
            $flag = false;
        }
        else {
            $_SESSION['ArticleCodeErr'] = "";
            $_SESSION['ArticleCode'] = $ArticleCode;
            
        }

        if (empty($AuthorName)) {
            $_SESSION['AuthorNameErr'] = "Author Name Can Not be Empty";
            $_SESSION['AuthorName'] = "";
            $flag = false;
        }
        else {
            $_SESSION['AuthorNameErr'] = "";
            $_SESSION['AuthorName'] = $AuthorName;
            if (!preg_match("/^[a-zA-Z-' ]*$/",$AuthorName)) 
        {
            $_SESSION['AuthorNameErr'] = "Only letters and white space allowed";
        }
            
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
    
    
            $Article = ['','ArticleCode'=> $ArticleCode, 'AuthorName'=> $AuthorName, 'Body'=> $Body,];
           // $status = AddArticle($Article);
           $con = getConnection();
           $sql = "insert into article(Id, ArticleCode , AuthorName, Body)values(?,?,?,?)";
		
           $stmt = mysqli_stmt_init($con);
           
           if(!mysqli_stmt_prepare($stmt, $sql))
           {
               echo "Statement Failed";
           }
           else{
               mysqli_stmt_bind_param($stmt,"isss", $Article[''], $Article['ArticleCode'], $Article['AuthorName'], $Article['Body']);
               $status = mysqli_stmt_execute($stmt);
           }               
           if ($status)
           {         
               
               header('location:../Views/Articles.php');
           } else {
               echo " Something went wrong, try again";
           }
            
            
        }
        else{
            header("Location: ../Views/AddArticle.php");
        }

    }
}
?>