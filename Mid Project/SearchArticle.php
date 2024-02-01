<?php 
session_start();
include "Header.html";
require 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Articles</title>
</head>
<body>
    <hr>
    <h1>Search Articles</h1>
    <hr>
    <form action="" method="post" novalidate>
<p>Enter an article you want to Search</p>
<label for = "ArticleCode"><b>Article Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b></label>
<input type="text" name="ArticleCode" id="ArticleCode" value="<?php echo isset($_SESSION['ArticleCode']) ? $_SESSION['ArticleCode'] : "" ?>"><br>
<span> <?php echo isset($_SESSION['ArticleCodeErr']) ? $_SESSION['ArticleCodeErr']:  "" ?><br></span>
<input type="submit" name="submit" id ="submit" value="Search"><br><br>
</form>

<table  >
    <!-- <thead>
        <tr>
            <th>Article Id</th>
            <th>Article Code</th>
            <th>Author Name</th>
            <th>Body</th>
           
        </tr>
    </thead> -->
    <tbody>

    
    <?php
    

function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
     //$ArticleCode = sanitize($_SESSION['ArticleCode']);


     if(isset ($_POST['submit']))
{
    if ($_SERVER['REQUEST_METHOD'] === "POST") 
    {  

     $ArticleCode = sanitize($_POST['ArticleCode']);
     $flag= true;
     if (empty($ArticleCode)) {
		$_SESSION['ArticleCodeErr'] = "Id can not be Empty";
		$_SESSION['ArticleCode'] = "";
		$flag = false;
	}
	else {
		$_SESSION['ArticleCodeErr'] = "";
		$_SESSION['ArticleCode'] = $ArticleCode;
       
	}

 if($flag){
        $_SESSION['track'] = "Ok";
        $con = getConnection();
        $sql = "Select * from article Where ArticleCode =?";
        $stmt = $con->prepare($sql);

        if ($stmt) {
            $stmt->bind_param('s', $ArticleCode);
            $stmt->execute();
            $result = $stmt->get_result();

            while($row = $result->fetch_assoc())
            {
                    //
                    echo '
                    <tr>
                    <td>
                    <fieldset>
                    <legend>Introduction</legend>
                    <b>Article Id :</b>'.$row['Id'].' </b><br><br>
                    <b>Article Name :</b>'.$row['ArticleCode'].' </b><br><br>
                    <b>Author Name :</b>'.$row['AuthorName'].' </b><br>
                    </fieldset><br><br>
                    <b>The Article starts from here:</b><br> <fieldset><legend>Body</legend>'.$row['Body'].'</td></fieldset>
                    


                    </tr>
                    </tbody>';
            }
        } 
         
       
       
    }
    else{
        header("Location: SearchArticle.php");
    }





    }
}


    
?>

</tbody>
</table>
<a href="Articles.php">Back</a><br><br>
<a href="DoctorDashboard.php">Home</a><br>
<a href=""></a>

    
</body>
</html>

<?php
include "Footer.html";
?>

