<?php 
include("config.php");
if(isset($_POST)) {
    $sql = "SELECT * FROM users where username='".$_POST['username']."' and pwd='".md5($_POST['pwd'])."' ";
    $result = mysqli_query($conn,$sql);
    $count  = mysqli_num_rows($result);
    if($count==0) {
        $message = "Invalid Username or Password!";
        header("location:index.php");
    } else {
        $message = "You are successfully authenticated!";
        while($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['first_name'] = $row ['first_name'];
            $_SESSION['last_name'] = $row ['last_name'];
            if(isset($_SESSION['user_id'])) {
                header("location:user_list.php");
            }
        }
    }
}

?>