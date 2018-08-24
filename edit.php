<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php
include_once('connection.php');
$id = $_GET['id'];
$sql = mysqli_query($con,"SELECT details from items where id='$id'");
while($row = mysqli_fetch_assoc($sql)){
	echo "<p class='text-center' style='background-color:#DCDBDA;font-size:20px;'><b>Item: </b>".$row['details']."</p>";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$item = mysqli_real_escape_string($con,$_POST['item']);
	$query = mysqli_query($con,"UPDATE items set details='$item' where id='$id'");
	if($query){
		header("location:index.php");
	}else{
		return false;
	}
}
?>
<div class="container">
<h2>Edit : ---</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-8">
			Details : <input type="text" class="form-control" name="item">
		</div>
	</div>
	<button class="btn btn-success" type="submit" style="margin-top: 5px;">Save</button>
</form>
</div>

</body>
</html>