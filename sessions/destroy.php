<?php
session_start();
unset($_SESSION['college']);
unset($_SESSION['size']);
unset($_SESSION['training']);
unset($_SESSION['month']);
session_destroy();
?>