<?php
include("../config.php"); // current file is looked into the root folder

$sql = "SELECT * FROM users where id = '".$_GET['id']."'";
$result = $conn->query($sql);
$conn->close();

while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $username = $row['first_name'];
    $name = $row['last_name'];
    $email = $row['email'];

    $return_arr[] = array("id" => $id,
                    "first_name" => $username,
                    "last_name" => $name,
                    "email" => $email);
}

// Encoding array in JSON format
echo json_encode($return_arr);

exit;
?>