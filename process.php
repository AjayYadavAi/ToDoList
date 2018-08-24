<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<table class="table table-striped">
	<thead>
		<th>S.no</th>
		<th>Items</th>
		<th>Edit</th>
		<th>Remove</th>
	</thead>
	<tbody>
		<?php
		$i = 1;
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['details']."</td>";
			echo "<td><a href='edit.php?id=".$row['id']."' data-toggle='tooltip' title='edit'><span class='fa fa-edit'style='font-size:20px;color:black;' ></span></a></td>";
			echo "<td><a href='remove.php?q=".$row['id']."' data-toggle='tooltip' title='delete'><span class='fa fa-trash-o' style='font-size:20px;color:black;'></span></a></td>";
			echo "</tr>";
			$i= $i+1;
		}
		?>
	</tbody>
</table>
</div>
</body>
</html>
