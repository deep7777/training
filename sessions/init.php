<?php
session_start();
/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/
$batch = array(
    "size"  => "15",
    "college" => "DY PATIL AMBI",
    "training" => "Php",
    "month" => "August"
);

$_SESSION['college'] = $batch['college'];
$_SESSION['size'] = $batch['size'];
$_SESSION['training'] = $batch['training'];
$_SESSION['month'] = $batch['month'];

if(isset($_SESSION)){
	echo "session initialized ....";
	print_r($_SESSION);
}
?>