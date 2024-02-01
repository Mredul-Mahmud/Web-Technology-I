<?php
session_start();
include "Header.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Information</title>
</head>
<body>
    <form action="PersonalInfoValidation.php" method="post" novalidate>
    <table>
        <tr>
            <td>
                <h1>Personal Information</h1>
               
            <label for = "FirstName"><b>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input type="text" name="FirstName" id="FirstName" placeholder="First Name"><br><br>
            <span> <?php echo isset($_SESSION['FirstNameErr']) ? $_SESSION['FirstNameErr']:  "" ?><br></span>

            <label for = "LastName"><b>Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input type="text" name="LastName" id="LastName" placeholder="Lasst Name"><br><br>
            <span> <?php echo isset($_SESSION['LastNameErr']) ? $_SESSION['LastNameErr']:  "" ?><br></span>
            
            <label for = "FatherName"><b>Father's Name&nbsp;&nbsp;&nbsp;: </b></label>
            <input type="text" name="FatherName" id="FatherName" placeholder="Father Name"><br><br>
            <span> <?php echo isset($_SESSION['FatherNameErr']) ? $_SESSION['FatherNameErr']:  "" ?><br></span>                  
            <label for = "MotherName"><b>Mother's Name&nbsp;&nbsp;: </b></label>
            <input type="text" name="MotherName" id="MotherName" placeholder="Mother Name"><br><br>
            <span> <?php echo isset($_SESSION['MotherNameErr']) ? $_SESSION['MotherNameErr']:  "" ?><br></span>
                                
           <label for = "BloodGroup"><b>Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;</label>
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
            <span> <?php echo isset($_SESSION['BloodGroupErr']) ? $_SESSION['BloodGroupErr']:  "" ?><br></span>

                               
            <label for = "Religion"><b>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>&nbsp;&nbsp;</label>
            <select name="Religion" id="Religion" aria-placeholder="BloodGroup">
            <option value="">Select your religion</option>
            <option value="Islam">Islam</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddhist">Buddhist</option>
            <option value="Christian">Christian</option>
            <option value="Others">Others</option>
                                
            </select><br><br>
            <span> <?php echo isset($_SESSION['ReligionErr']) ? $_SESSION['ReligionErr']:  "" ?><br></span>

            <label for = "Website"><b>Website&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input type="text" name="Website" id="Website" placeholder="Website"><br><br>
            <span> <?php echo isset($_SESSION['WebsiteErr']) ? $_SESSION['WebsiteErr']:  "" ?><br></span>

            <label for = "Schedule"><b>Schedule&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
            <input type="text" name="Schedule" id="Schedule" placeholder="Schedule"><br><br>
            <span> <?php echo isset($_SESSION['ScheduleErr']) ? $_SESSION['ScheduleErr']:  "" ?><br></span>           

            <label for="Dob"><b>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="date" name="Dob" id="Dob"><br>
            <span> <?php echo isset($_SESSION['DobErr']) ? $_SESSION['DobErr']:  "" ?><br></span>

            </td>
        </tr>
    </table>
    <input type="submit" name="submit" id ="submit" value="Done"><br><br>
    <a href="ProfileView.php">Back</a>

    </form>

    
</body>
</html>