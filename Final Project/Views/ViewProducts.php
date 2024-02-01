<?php 
session_start();
require '../Models/Database.php';
include "Header.html";
if (!isset($_SESSION['Email'])) 
{
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title> Products</title>
</head>
<body class="Body">
    <hr>
    <h1>View All Products</h1>
    <hr>
<table>
    <!-- <thead>
       <tr>
            <th>Article Id</th>
            <th>Article Code</th>
            <th>Author Name</th>
            <th>Body</th>
           
        </tr>
    </thead> -->
    <form action="../Controllers/AddProductsValidation.php" method="get">
    <?php   
    
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
     //$ArticleCode = sanitize($_SESSION['ArticleCode']);


     $con = getConnection();
    
     $sql = "Select * from products";
     mysqli_query($con, $sql);
     $status = mysqli_query($con, $sql);
     
 
     if($status)
 {
     while($row=mysqli_fetch_assoc($status)){
    
     echo '
     <tbody>
     <tr>
     <td><fieldset><br><br>
   <!-- Product Id :<b>'.$row['Id'].'</b><br><br>-->
   <b>Image :</b>'.$row['Image'].'<br><br>
   <b>Product Code :</b>'.$row['ProductCode'].'<br><br>
   <b>Product Name :</b>'.$row['Name'].'<br><br>
   <b> Manufactured :</b>'.$row['Brand'].'<br><br>
   <b> Description :</b>'.$row['Description'].'<br><br>
   <b>Price :</b>'.$row['Price'].'<br><br>
   </fieldset><br>
   &nbsp;<a href="AddProducts.php">
   <button>Add to Cart</button>
 </a>
 <br><br></td>
 
     
     
    
     

</tr>
</tbody>';
     }
 }






    
?>


</table>
<a class="DDref" href="Articles.php">Back</a><br><br>
<a class="DDref" href="DoctorDashboard.php">Home</a><br><br><br><br><br><br>
<a href=""></a>

</form>
</body>
</html>

<?php
include "Footer.html";
?>

