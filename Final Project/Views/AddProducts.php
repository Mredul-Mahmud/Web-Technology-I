<?php
session_start();
include "Header.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add into Cart</title>
</head>
<body>
    <form action="../Controllers/AddProductsValidation.php" method="post" novalidate>
    <fieldset>
    <legend>Confirm your Items</legend>
        
<table>
    <tr>
        <td>
            <h1>Add to cart</h1>
            <label for="Email"><b>Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="email" name="Email" id="Email" placeholder="Email">><br>
            <span> <?php echo isset($_SESSION['EmailErr']) ? $_SESSION['EmailErr']:  "" ?><br></span>

            <label for="Quantity"><b>Quantity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="number" name="Quantity" id="Quantity" placeholder="Email">><br>
            <span> <?php echo isset($_SESSION['QuantityErr']) ? $_SESSION['QuantityErr']:  "" ?><br></span>
            
            <label for="Location"><b>Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
            <input type="text" name="Location" id="Location" placeholder="Location">><br>
            <span> <?php echo isset($_SESSION['LocationErr']) ? $_SESSION['LocationErr']:  "" ?><br></span>
        </td>
    </tr>
</table>
</fieldset><br>
<input type="submit" name="submit" id ="submit" value="Confirm"><br><br>
</form>
    
</body>
</html>