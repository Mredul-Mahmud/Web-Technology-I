<?php
//session_start();


$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "project";

function getConnection(){
    global $dbhost;
    global $dbuser;
    global $dbpass;
    global $dbname;

    return  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}



// function userSignup($user){
//     $con = getConnection();
//     $sql = "insert into auth (Id,Username, Gender, Email,Image, PhoneNumber, Password, PasswordRecover) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

//     $stmt = mysqli_stmt_init($con);
//     if(!mysqli_stmt_prepare($stmt, $sql))
//     {
//         echo "Statement Failed";
//     }
//     else{
//         mysqli_stmt_bind_param($stmt,"isssssss",$user[''], $user['Username'], $user['Gender'], $user['Email'], $user['Image'], $user['PhoneNumber'],$user['Password'], $user['PasswordRecover']);
//         $status= mysqli_stmt_execute($stmt);
//     }
    
//     return $status;
// }

//function Userlogin($Email, $Password)
//{
    // $con = getConnection();
    // $sql = "select * from auth where Email='{$Email}' and Password='{$Password}'";
    // $result = mysqli_query($con, $sql);
    // $count = mysqli_num_rows($result);

    // if($count == 1){
    //     return true;
    // }else{
    //     return false;
    // }
    

//}

// function updatepassword($Id, $OldPassword, $NewPassword){

//     $con = getConnection();
   
//      $sql = "update auth set Password = '$NewPassword' Where Id ='$Id'";
//     mysqli_query($con, $sql);


// return false;
// }

// function profileView($Email)
// {
//     $con = getConnection();
//     $sql = "Select Id, Username, Gender, Email , Image, PhoneNumber from auth Where Email ='$Email'";
//      $status = mysqli_query($con, $sql);
//         return $status;
// }
// function profile($Email)
// {
//     $con = getConnection();
//     $sql = "Select FirstName, LastName, FatherName, MotherName, BloodGroup , Religion, Website, Schedule, Dob from profile Where Email ='{$Email}'";
//      $Pstatus = mysqli_query($con, $sql);
//         return $Pstatus;
//}

// function personalProfile ($user){
//     $con = getConnection();

//     $sql = "INSERT INTO `profile` ( `Email`,`FirstName`, `LastName`, `FatherName`, `MotherName`, `BloodGroup`, `Religion`, `Website`, `Schedule`, `Dob`)  VALUES ('{$user['Email']}','{$user['FirstName']}','{$user['LastName']}','{$user['FatherName']}', '{$user['MotherName']}', '{$user['BloodGroup']}', '{$user['Religion']}', '{$user['Website']}', '{$user['Schedule']}', '{$user['Dob']}')";
//     $status = mysqli_query($con, $sql);
//     return $status;
// }

// function updateProfileInfo($Id, $Username, $Email, $Gender, $PhoneNumber){

//     $con = getConnection();
    
//             $sql = "update auth set Username = '$Username', Email = '$Email',Gender = '$Gender', PhoneNumber = '$PhoneNumber' Where Id ='$Id'";
//             mysqli_query($con, $sql);

// }

// function ForgetPassword($Email, $PasswordRecover)
// {
//     $con = getConnection();
//     $sql = "select * from auth where Email='{$Email}' and PasswordRecover='{$PasswordRecover}'";
//     $result = mysqli_query($con, $sql);
//     $count = mysqli_num_rows($result);

//     if($count == 1){
//         return true;
//     }else{
//         return false;
//     }
// }
// function updateForgetPassword($Email, $NewPassword){

//     $con = getConnection();
   
//      $sql = "update auth set Password = '$NewPassword' Where Email ='$Email'";
//     mysqli_query($con, $sql);


// return false;
// }

// function AddArticle($Article)
// {
//     $con = getConnection();

//     $sql =  "insert into article values('','{$Article['ArticleCode']}','{$Article['AuthorName']}','{$Article['Body']}')";
//     $status = mysqli_query($con, $sql);
//     return $status;
// }
function ViewArticle()
{
    $con = getConnection();
    $sql = "Select * from article";
     $status = mysqli_query($con, $sql);
        return $status;
}
// function SearchArticle($ArticleCode){

//     $con = getConnection();
    
//             $sql = "Select * from article Where ArticleCode ='$ArticleCode'";
//             mysqli_query($con, $sql);
//             $status = mysqli_query($con, $sql);
//             return $status;

// }
function MyArticle($Username){

    $con = getConnection();
    
            $sql = "Select * from article Where AuthorName ='$Username'";
            mysqli_query($con, $sql);
            $status = mysqli_query($con, $sql);
            return $status;

}
function AddFeedback($Feedback)
{
    $con = getConnection();

    $sql =  "insert into feedback values('','{$Feedback['Email']}','{$Feedback['About']}','{$Feedback['Body']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}
function ViewFeedback()
{
    $con = getConnection();
    $sql = "Select * from feedback";
     $status = mysqli_query($con, $sql);
        return $status;
}
// function SearchFeedback($Email)
// {
//     $con = getConnection();
//     $sql = "Select * from feedback where Email ='$Email'";
//      $status = mysqli_query($con, $sql);
//         return $status;
// }
function DeleteFeedback($Email){

    $con = getConnection();
    
            $sql = "delete from feedback Where Email ='$Email'";
            mysqli_query($con, $sql);
            $status = mysqli_query($con, $sql);
            return $status;

}


?>