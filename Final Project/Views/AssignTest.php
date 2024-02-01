<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/styles.css">
    <script src="../Views/javascript/AssignTest.js"></script>
    <title>Assign Test</title>
</head>
<body class="Body">



<form id="productForm" action="" method="post" class="PersonalInfoForm" novalidate >
<h2>Assign Test</h2>
    <label class="PersonalInfoLabel" for="PatientName">Name :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input class ="PersonalInfoField" type="text" id="PatientName" name="PatientName" placeholder=" Patient Name"><br>

    <label class="PersonalInfoLabel" for="Disease">Disease :&nbsp;&nbsp;&nbsp;</label>
    <input class ="PersonalInfoField" type="text" id="Disease" name="Disease" placeholder="Disease"><br>

    <label class="PersonalInfoLabel" for="TestType">Test Type:</label>
    <input class ="PersonalInfoField" type="text" id="TestType" name="TestType" placeholder="Test Type"><br>

    <label class="PersonalInfoLabel" for="TestDate">Test Date :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input  type="date" id="TestDate" name="TestDate" placeholder="Test Date"><br><br>

    <label class="PersonalInfoLabel" for="Amount">Amount :&nbsp;</label>
    <input class ="PersonalInfoField" type="text" id="Amount" name="Amount" placeholder="Amount"><br>

    <button class ="btn" type="button" onclick="AssignTest()">Assign Test</button><br>
    <a class="DDref" href="DoctorDashboard.php">Back</a>

</form>



</body>
</html>