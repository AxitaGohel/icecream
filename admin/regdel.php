<?php

	$id = $_GET['id'];

	include("../connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `register` WHERE id = '$id' ");

	echo "<script>window.location='register.php'</script>";	
	
?>
