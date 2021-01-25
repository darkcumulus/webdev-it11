<?php

$id = $_GET['id'];

include("config.php");
$result = mysqli_query($mysqli, "DELETE FROM users where id=$id");

header("Location:index.php");

?>