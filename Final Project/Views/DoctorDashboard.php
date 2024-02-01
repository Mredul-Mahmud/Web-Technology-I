<?php
include "Header.html";
session_start();

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
    <link rel="stylesheet" href="../Views/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="../Views/javascript/Dashboard.js"> </script>
    <script src="../Views/javascript/DashboardFeedback.js"> </script>

    <script>
        // Function to update the clock
        function updateClock() {
            // Use AJAX to fetch server time
            $.ajax({
                url: '../controllers/getServerTimeController.php',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    const serverTime = data.serverTime;
                    // Update the clock element with the fetched time
                    document.getElementById("clock").innerText = serverTime;
                },
                error: function () {
                    console.error('Error fetching server time.');
                }
            });
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial update
        updateClock();

    </script>
    <title>Document</title>
   
</head>
<body class="Body" id="DDbody">

<li id ="DDl" onclick=Menubar()> <a href="#"><img id = "DDlogo" src="menubar.png"></a></li>
    <h1>Homepage </h1>
   <hr>
    <p>Set up your Personal Informations if you haven't yet. Or, go to Menu > Settings > Set Your personal information</p>
    <a class="DDref" href="PersonalInfo.php">Add your Personal Information</a>
    
    <hr>
    <nav>
        <ul class = "menubar">
            
        <li class ="DDli" onclick=HideMenubar()> <a  href="#"><img class = "logo" src="close.png"></a><p id ="menu">MENU</p></li><br>
        
            
            <li class ="DDli"><a class="DDref" href="Profile.php">My Profile</a></li><br>
            <li class ="DDli"><a class="DDref" href="ProfileView.php">General Information</a></li><br>
            <li class ="DDli"><a class="DDref" href="AssignTest.php">Assign Test</a></li><br>
            <li class ="DDli"><a class="DDref" href="Feedback.php">Feedback & Ratings</a></li><br>
            
            <li class ="DDli"><a class="DDref" href="Settings.php">Settings</a></li><br>
            <li class ="DDli"><a class="DDref" href="Addtoshop.php">Add </a></li><br>
            <li class ="DDli" id="logout"><a class="DDref" href="logout.php">Logout</a></li><br>
            
        </ul>
    </nav>
   
    <p><b>Articles</b></p>
    <hr><br>
<a class="DDref" href="Articles.php">Articles</a><br>
<br>
<div class="ArticleDiv">
<p>See all Articles?</p>
    <button class="btnA" onclick="fetch();">View All Articles</button><br>
</div>
     <p id="data"></p>
    </div>
    <hr><br>
    <hr><br>
<div class="FeedbackDiv">
<p>See all Feedbacks?</p>
    <button class="btnA" onclick="get();">View All Feedbacks</button><br>
</div>
     <p id="Feedbackdata"></p>
    </div>
    <hr><br>
<a class="DDref" href="Shop.php">Shop</a><br>
<br><hr>


<br><br><br><br><br><br>
</body>

<?php
include "Footer.html";
?>


</html>
