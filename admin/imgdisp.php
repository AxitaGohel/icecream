<html>
<head>
	<title>Admin Product Page</title>

	<!-- <link rel="stylesheet" href="imgdisp.css"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
</head>

<body>

<?php
   include("aheader.php");
?>

<center><div class="t1">
		<p>Product</p>
	</div></center>

<p class="textline">To add new product, Click here    =>>   <a href='prdinsert.php' class="link1">Add Product</a> </p>

<center><div class="t1">
            <p> Ice Coffee </p>
        </div></center>

<center><table cellpadding=10 class="tab">
	<tr class="r1">
		<th>Image</th>
		<th>Name</th>
		<th>Prise</th>
		<th>Quantity</th>
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from image where cate='coffee'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='r2'>
			<th><img src='../image/".$r[1]."' height=100 width=100></th>
			<th>".$r[2]."</th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th><button class='btnupd'><a href='imgupd.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button class='btndel'><a href='imgdel.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?> 

</table></center>

<center><div class="t1">
            <p> Ice Cream </p>
        </div></center>

<center><table cellpadding=10 class="tab">
	<tr class="r1">
		<th>Image</th>
		<th>Name</th>
		<th>Prise</th>
		<th>Quantity</th>
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from image where cate='icecream'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='r2'>
			<th><img src='../image/".$r[1]."' height=100 width=100></th>
			<th>".$r[2]."</th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th><button class='btnupd'><a href='imgupd.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button class='btndel'><a href='imgdel.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?> 

</table></center>

<center><div class="t1">
            <p> Thick Shake  </p>
        </div></center>

<center><table cellpadding=10 class="tab">
	<tr class="r1">
		<th>Image</th>
		<th>Name</th>
		<th>Prise</th>
		<th>Quantity</th>
		<th></th>
		<th></th>
	</tr>
<?php
	$q = mysqli_query($cn,"select * from image where cate='shake'");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='r2'>
			<th><img src='../image/".$r[1]."' height=100 width=100></th>
			<th>".$r[2]."</th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th><button class='btnupd'><a href='imgupd.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button class='btndel'><a href='imgdel.php?id=".$r[0]." '>DELETE</a></button></th>
		</tr>";
	}
?> 

</table></center>

<?php
	include("footer.php");
?>

</body>

</html>

