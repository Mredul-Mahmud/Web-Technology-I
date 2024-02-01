<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "project";

function getConnection(){
    global $dbhost;
    global $dbuser;
    global $dbpass;
    global $dbname;

    return  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}


function getAll()
{
    $conn = getConnection();
  if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);

  }
 
  
 $stmt = $conn->prepare("Select Id, ArticleCode, AuthorName, Body from article");
    $stmt->execute();
    $result = $stmt->get_result();

    $data = array();
    if ($result->num_rows > 0) 
    {
        // output data of each row
        while($row = $result->fetch_assoc()) 
        {
        $data[]= array(
        'Id'=> $row["Id"],
        'ArticleCode' =>$row["ArticleCode"], 
        'AuthorName' =>$row["AuthorName"],
        'Body' =>$row["Body"]
                   
                    
        );
                    
                
                
        }
    } 
    $stmt->close();
    $conn->close();
    // echo json_encode($data);

    return $data;

}