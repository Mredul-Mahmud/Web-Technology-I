<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$PatientName = $_POST['PatientName'];
$Disease = $_POST['Disease'];
$TestType = $_POST['TestType'];
$TestDate = $_POST['TestDate'];
$Amount = $_POST['Amount'];

$sql = "INSERT INTO test (PatientName, Disease, TestType, TestDate, Amount) VALUES ('$PatientName', '$Disease', '$TestType','$TestDate','$Amount')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>