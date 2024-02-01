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
    <script src="../Views/javascript/UpdatePersonalInformation.js"> </script>
    <title>Personal Information</title>
</head>
<body class="Body">
    <form action="../Controller/UpdatePersonalInfoValidation.php" method="post" class="PersonalInfoForm" novalidate onsubmit ="return isValid(this)">
    <table>
        <tr>
            <td>
                <h1>Personal Information</h1>

               
            <label class="PersonalInfoLabel" for = "FirstName"><b>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="FirstName" id="FirstName" placeholder="First Name"><br><br>
            <span id ="FirstNameErr"> </span><br>
            <?php echo isset($_SESSION['FirstNameErr']) ? $_SESSION['FirstNameErr']:  "" ?><br>

            <label class="PersonalInfoLabel" for = "LastName"><b>Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="LastName" id="LastName" placeholder="Last Name"><br><br>
            <span id ="LastNameErr"> </span><br>
          <?php echo isset($_SESSION['LastNameErr']) ? $_SESSION['LastNameErr']:  "" ?><br>
            
            <label class="PersonalInfoLabel" for = "FatherName"><b>Father's Name&nbsp;&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="FatherName" id="FatherName" placeholder="FatherName"><br><br>
            <span id ="FatherNameErr"> </span><br>
           <?php echo isset($_SESSION['FatherNameErr']) ? $_SESSION['FatherNameErr']:  "" ?><br>                  
            <label class="PersonalInfoLabel" for = "MotherName"><b>Mother's Name&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="MotherName" id="MotherName" placeholder="Mother Name"><br><br>
            <span id ="MotherNameErr"> </span><br>
             <?php echo isset($_SESSION['MotherNameErr']) ? $_SESSION['MotherNameErr']:  "" ?><br>
                                
           <label class="PersonalInfoLabel" for = "BloodGroup"><b>Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;</label>
           <select name="BloodGroup" id="BloodGroup" aria-placeholder="BloodGroup">
            <option value="">Select your Blood Group</option>
                                <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            </select><br><br>
            <span id ="BloodGroupErr"> </span><br>
            <?php echo isset($_SESSION['BloodGroupErr']) ? $_SESSION['BloodGroupErr']:  "" ?><br>

                               
            <label class="PersonalInfoLabel" for = "Religion"><b>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;</label>
            <select name="Religion" id="Religion" aria-placeholder="BloodGroup">
            <option value="">Select your religion</option>
            <option value="Islam">Islam</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Christian">Christian</option>
            <option value="Others">Others</option>
                                
            </select><br><br>
            <span id ="ReligionErr"> </span><br>
             <?php echo isset($_SESSION['ReligionErr']) ? $_SESSION['ReligionErr']:  "" ?><br>

            <label class="PersonalInfoLabel" for = "Website"><b>Website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="Website" id="Website" placeholder="Website" ><br><br>
            <span id ="WebsiteErr"> </span><br>
            <?php echo isset($_SESSION['WebsiteErr']) ? $_SESSION['WebsiteErr']:  "" ?><br>

            <label class="PersonalInfoLabel" for = "Schedule"><b>Schedule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input class ="PersonalInfoField" type="text" name="Schedule" id="Schedule" placeholder="Schedule"><br><br>
            <span id ="ScheduleErr"> </span><br>
            <?php echo isset($_SESSION['ScheduleErr']) ? $_SESSION['ScheduleErr']:  "" ?><br>           

            <label class="PersonalInfoLabel" for="Dob"><b>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input class ="PersonalInfoField" type="date" name="Dob" id="Dob"><br>
            <span id ="DobErr"> </span><br>
            <?php echo isset($_SESSION['DobErr']) ? $_SESSION['DobErr']:  "" ?><br>

            </td>
        </tr>
    </table>
    <input class ="btn" type="submit" name="submit" id ="submit" value="Update"><br><br>
    <a class = "DDref" href="Settings.php">Back</a>

    </form>
<br><br><br>
    
</body>
</html>

<?php
include "Footer.html";
?>