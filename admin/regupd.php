<?php
		
	include("../connect.php");
?>

<html>
    <head>
        <title>Update Register</title>

        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
   
    </head>

    <body>
       
    <center><p class="d1">UPDATE REGISTER </p></center>

<table>
	
<?php
	$id = $_GET['id'];

	$q = mysqli_query($cn,"select * from register where id = '$id' ");

	echo "<form action='regupdpro.php' method='POST'>";

	while($r = mysqli_fetch_array($q))
	{
		echo "<input type='hidden' name='id' value=".$id.">"; 

		echo "<div class='mdata'><div class='nfd'>Name :</div>";
		echo "<div class='nfd1'><input type='text' name='nm' value=".$r[1]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Mobile No :</div>";
		echo "<div class='nfd1'><input type='text' name='cno' value=".$r[2]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Email :</div>";
		echo "<div class='nfd1'><input type='email' name='email' value=".$r[3]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Date of Birth :</div>";
		echo "<div class='nfd1'><input type='date' name='bod' value=".$r[4]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Username :</div>";
		echo "<div class='nfd1'><input type='text' name='unm' value=".$r[5]."></div></div>";

		echo "<div class='mdata'><div class='nfd'>Password :</div>";
		echo "<div class='nfd1'><input type='password' name='pw' value=".$r[6]."></div></div>";
	}
	echo "<center><button class='sub'><input type='submit' name='update' value='Update'></button>";
?>	
</table>