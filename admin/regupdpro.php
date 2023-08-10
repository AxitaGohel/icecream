<?php
		
	
	include("../connect.php");	

	$id = $_POST['id'];
	$nm = $_POST['nm'];
	$cno = $_POST['cno'];
	$email = $_POST['email'];
	$bod = $_POST['bod'];
	$unm = $_POST['unm'];
	$pw = $_POST['pw'];

	$q = mysqli_query($cn,"update register set nm ='$nm',cno ='$cno',email ='$email',bod='$bod',unm='$unm',pw='$pw' where id = '$id' ");
	echo "<script>alert('Update Successfully...')</script>";
	echo "<script>window.location='register.php'</script>";
?>

