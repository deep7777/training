<?php
include("config.php");
$id = $_GET['id'];

// check if that record exist in database
$sql = "SELECT * FROM users where id='".$id."'";
$result = mysqli_query($conn,$sql);
$count  = mysqli_num_rows($result);

// if record does not exist in database send error message
if($count == 0) {
	echo "Error in Deleting Record.";
	exit;
} else {
	$sql = "DELETE FROM users where id='".$id."'";
	$result = mysqli_query($conn,$sql);
	print_r($result);
	if($result) {
		echo "Record Deleted Successfully !!";
		exit;	
	}
}

?>