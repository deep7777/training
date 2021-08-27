<?php
session_start();
unset($_SESSION['first_name']);
unset($_SESSION['last_naem']);
unset($_SESSION['user_id']);
session_destroy();
header("location:index.php");
?>