<?php
$obid = $_GET['obid'];
$reqid = $_GET['reqid'];
$hook = $_GET['hook'];
$action = $_GET['action'];
$fen = $_GET['fen'];

$response = file_get_contents("http://k4it.de/egtb/fetchegtbGC.php?obid=$obid&reqid=$reqid&hook=$hook&action=$action&fen=$fen");

echo $response;
?>
