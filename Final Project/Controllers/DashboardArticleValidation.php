<?php

require "../Models/DashboardArticle.php";

$res =getAll();
echo json_encode($res);

?>