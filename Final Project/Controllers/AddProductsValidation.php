<?php
session_start();
require "../Models/database.php";
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if(isset($_GET['ProductCode']))
{
    $ProductCode= sanitize($_GET['ProductCode']);
    $Image= sanitize($_GET['Image']);
    $Name= sanitize($_GET['Name']);
   var_dump($_GET['ProductCode']);
}
if(isset ($_POST['submit'])){
    if ($_SERVER['REQUEST_METHOD'] === "POST") {  

    }
}
?>