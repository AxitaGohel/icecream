<html>
    <head>
        <title>Register Page</title>

        <!-- <link rel="stylesheet" href="register.css"> -->
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
            <p>Register Process</p>
        </div></center>


<center><table cellpadding=10 class="tab2">
	<tr class="row1">
		<th>Name</th>
		<th>Mobile No</th>
		<th>Email</th>
		<th>Date Of Birth</th>
		<th>Username</th>
		<th>Password</th>
		<th>Utype</th>
		<th></th>
		<th></th>
	</tr>

<?php
	$q = mysqli_query($cn,"select * from register where utype='user' ");

	while($r = mysqli_fetch_array($q))
	{
		echo "<tr class='row2'>
			<th>".$r[1]."</th>
			<th>".$r[2]."</th>
			<th>".$r[3]."</th>
			<th>".$r[4]."</th>
			<th>".$r[5]."</th>
			<th>".$r[6]."</th>
			<th>".$r[7]."</th>
			<th><button class='btnupd'><a href='regupd.php?id=".$r[0]." '>UPDATE</a></button></th>
			<th><button class='btndel'><a href='regdel.php?id=".$r[0]." '>DELETE</a></button></th>
				
		</tr>";
	}
?></table> </center>

<?php
	include("footer.php");
	?>

</body>

</html>

