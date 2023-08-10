<?php
	include("../connect.php");
?>
<html>
    <head>
        <title>Update Prodect</title>

		<link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
   
    </head>

    <body>

		<center><p class="d1">UPDATE PRODUCT</p></center>

<table>
<?php
	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from image where id = '$id' ");

	echo "<form action='imgupdpro.php' method='POST' enctype='multipart/form-data'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 
		
		echo "<div class='mdata'><div class='nfd'>Image :</div>";
		echo "<div class='nfd1'><input type='file' name='img' value=".$r[1]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Name :</div>";
		echo "<div class='nfd1'><input type='text' name='nm' value=".$r[2]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Prise :</div>";
		echo "<div class='nfd1'><input type='number' name='ps' value=".$r[3]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Quantity :</div>";
		echo "<div class='nfd1'><input type='number' name='qt' value=".$r[4]."></div></div>";

	}
	echo "<center><button class='sub'><input type='submit' name='update' value='Update'></button></centr>";
?>
 </table>
     </form>
    </body>
</html>
	


