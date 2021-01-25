<?php 
	include_once("config.php");


if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$name = mysqli_real_escape_string($mysqli, $_POST['name']);
			$age = mysqli_real_escape_string($mysqli, $_POST['age']);
			$email = mysqli_real_escape_string($mysqli, $_POST['email']);

			if( empty($name) || empty($age) || empty($email) ){

				if(empty($name)){
					echo "<font color='red'> Name field is empty. </font><br/>";
				}

				if(empty($age)){
					echo "<font color='red'> Age field is empty. </font><br/>";
				}

				if(empty($email)){
					echo "<font color='red'> Email field is empty. </font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE users set name='$name',age='$age',email='$email' WHERE id=$id");
				header("Location: index.php");
				
			}

}
?>



<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * from users where id=$id");

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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit data</title>
</head>
<body>

	<form name="form1" method="post" action="edit.php">

		<table widht="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>" ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		

	</form>



	
</body>
</html>