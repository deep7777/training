<?php
session_start();
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$full_name = $first_name." ".$last_name;
if(!isset($_SESSION['first_name'])) {
	header("location:index.php");
}
?>