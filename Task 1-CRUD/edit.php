<?php

include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		
		echo "<script>alert('Record successfuly updated.');window.location.href='index.php';</script>";
	}
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Edit User</title>
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
				<a href="index.php"><button class="btn btn-primary">Go To Home</button></a>
				<br/><br/>
				
				<form name="form1" method="post" action="edit.php">
					<table class="addusertable">
						<tr> 
							<td>Name :</td>
							<td><input type="text" name="name" value="<?php echo $name;?>"></td>
						</tr>
						<tr> 
							<td>Age :</td>
							<td><input type="text" name="age" value="<?php echo $age;?>"></td>
						</tr>
						<tr> 
							<td>Email :</td>
							<td><input type="text" name="email" value="<?php echo $email;?>"></td>
						</tr>
						<tr>
							<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
							<td><input type="submit" name="update" value="Update" class="addbtn"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
