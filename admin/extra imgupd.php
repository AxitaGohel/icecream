<?php
		
	include("aheader.php");	

	$cn=mysqli_connect("localhost","root","","abweb");
	if(isset($_POST['submit']))
	{
		if(empty($_FILES['f1']['name']))
		{
			echo "<script>alert('Upload file .....')</script>";
			echo "<script>window.location='imgdisp.php'</script>";
		}
		else
		{
			$ftype=array("jpg","JPG","jpeg","JPEG","bmp","BMP","png","PNG");
			$f=$_FILES['f1']['name'];
			if(in_array(end(explode(".",$f)),$ftype))
			{
				echo "<script>alert('upload file successfully...')</script>";
				move_uploaded_file($_FILES['f1']['tmp_name'],"../image/".$_FILES['f1']['name']);
				$q=mysqli_query($cn,"INSERT INTO `image` (`id`, `img`, `nm`, `ps`, `qt`) VALUES ('', '$f', '', '', '');");
				echo "<script>window.location='imgdisp.php'</script>";
			}
			else
			{
				echo "<script>alert('Invalid file format')</script>";
				echo "<script>window.location='imgdisp.php'</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('Upload file .....')</script>";
		echo "<script>window.location='imgdisp.php'</script>";
	}

?>