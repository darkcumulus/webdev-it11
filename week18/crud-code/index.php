
<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM users");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
</head>
<body>
	<h1><?php echo "Sample PHP Web Application"; ?></h1>
	<a href="add.html">Add new Data</a><br/><br/>

	<table>
		<tr bgcolor='#cccccc'>
			<td>Name </td>
			<td>Age </td>
			<td>Email </td>
			<td>Created</td>
			<td>Update</td>
		</tr>


		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$res['name']."</td>";

			echo "<td>".$res['age']."</td>";
			echo "<td>".$res['email']."</td>";
			echo "<td>".$res['date_created']."</td>";
			echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>



	</table>
	
</body>
</html>