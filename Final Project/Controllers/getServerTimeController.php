<?php
date_default_timezone_set('UTC');

header('Content-Type: application/json');
echo json_encode(['serverTime' => date(' h:i:s Y-M-D')]);
?>
