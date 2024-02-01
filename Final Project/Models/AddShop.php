<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$brand = $_POST['brand'];
$price = $_POST['price'];

$sql = "INSERT INTO shop (name, brand, price) VALUES ('$name', '$brand', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>