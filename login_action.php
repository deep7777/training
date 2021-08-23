<?php 
if(isset($_POST)) {
    $mysqli = new mysqli("localhost","root","root","phptraining");
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    } else {
        header("location:user_list.php");
    }
}

?>