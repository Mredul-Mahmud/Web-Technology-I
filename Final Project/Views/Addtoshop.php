<?php 
session_start();
include "Header.html";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <script src="../Views/javascript/AddtoShop.js"></script>
    <title>Add Product</title>
</head>
<body class="Body">




<form id="productForm" action="" method="post" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">
<h2 id="shopHeader">Add Product</h2>   
<label class="PersonalInfoLabel" for="name">Name:</label>
    <input class ="PersonalInfoField" type="text" id="name" name="name" placeholder="Name"><br>

    <label class="PersonalInfoLabel" for="brand">Brand:</label>
    <input class ="PersonalInfoField" type="text" id="brand" name="brand" placeholder="Brand"><br>

    <label class="PersonalInfoLabel" for="price">Price:</label>
    <input class ="PersonalInfoField" type="text" id="price" name="price" placeholder="Price"><br>

    <button class ="btn" type="button" onclick="addProduct()">Add Product</button><br>
    <a class="DDref" href="DoctorDashboard.php">Back</a>

</form>



</body>
</html>

<?php
include "Footer.html";
?>