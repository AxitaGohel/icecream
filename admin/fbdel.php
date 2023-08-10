<?php

	include("../connect.php");

	$id = $_POST['id'];

	$q = mysqli_query($cn,"DELETE FROM `feedback` WHERE id = '$id' ");
	
	echo "<script>window.location='feedback.php'</script>";	
	
?>
