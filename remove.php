<?php
include_once("connection.php");
$id = $_GET['q'];
$query = mysqli_query($con,"DELETE FROM items where id='$id'");
if($query){
	header("location:index.php");
}else{
	echo "Not deleted";
}
?>