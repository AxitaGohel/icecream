<?php

	$id = $_GET['id'];

	include("../connect.php");	

	$q = mysqli_query($cn,"DELETE FROM `image` WHERE id = '$id' ");

	echo "<script>window.location='imgdisp.php'</script>";	
	
?>
	


