<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>User Details</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="container">
	<div class="col-md-12">

		<div class="p-x-y">
			<a href="add.html"><button class="btn btn-primary">Add New User</button></a><br/><br/>

				<table  border=1>

				<tr bgcolor='#CCCCCC'>
					<td>Name</td>
					<td>Age</td>
					<td>Email</td>
					<td>Update</td>
				</tr>
				<?php 
				
				while($res = mysqli_fetch_array($result)) { 		
					echo "<tr>";
					echo "<td>".$res['name']."</td>";
					echo "<td>".$res['age']."</td>";
					echo "<td>".$res['email']."</td>";	
					echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
				}
				?>
				</table>
		</div>
		
	</div>
	
</div>
</body>
</html>
