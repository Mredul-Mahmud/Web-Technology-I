<?php
//session_start();

$Username = $_SESSION['Username'];
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



function userSignup ($user){
    $con = getConnection();
    $sql = "insert into auth values('','{$user['Username']}','{$user['Email']}', '', '{$user['PhoneNumber']}', '{$user['Password']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function Userlogin($Email, $Password)
{
    $con = getConnection();
    $sql = "select * from auth where Email='{$Email}' and Password='{$Password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function updatepassword($Email, $OldPassword, $NewPassword){

    $con = getConnection();
    // echo "ok";
    $sql = " select * from auth where Email ='{$Email}' and Password = '{$OldPassword}'";
    //echo "ok";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if($count>0)
           {
            $sql = "update auth set Password = '$NewPassword'";
            mysqli_query($con, $sql);

}
return false;
}

?>