<?php
include "../config.php";
$arr = array("success" => true, "eventname" => $config['name']);
echo json_encode($arr);
?>