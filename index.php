<?php
include_once("connection.php");
$query = mysqli_query($con,"SELECT * FROM items");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container-fluid" style="background-color:#F7F4F3;">
<h2 class="text-center">To Do List</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-9">
			 <div class="input-group mb-3" style="margin-left: 10%;">
			 	<input type="text" name="item" class="form-control" placeholder="Enter Item..">
			 	<div class="input-group-prepend">
			 		<span class="input-group-btn"><button class="btn btn-primary" type="submit">Save</button></span>
			 	</div>
			 </div>
		</div>
	</div>
</form>
</div>
</div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$item = mysqli_real_escape_string($con,$_POST['item']);
	if(strlen($item)>0){
		$sql = mysqli_query($con,"INSERT INTO items(details)VALUES('$item')");
		if($sql){
			header("location:index.php");
		}else{
			return false;			
		}
	}
}
include_once("process.php");
?>