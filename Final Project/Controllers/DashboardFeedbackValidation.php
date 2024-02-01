<?php

require "../Models/DashboardFeedback.php";

$res =getAll();
echo json_encode($res);

?>