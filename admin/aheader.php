<?php
    
	include("../connect.php");
	session_start();
	if(!isset($_SESSION['admin']))
	{
		header("location:../login.php");
	}
?>

<html>
    <head>
        <title>Admin Home Page</title>

        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    </head>

    <body>

    <div class="maindiv3">

    <nav>
       
    <table cellpadding="20">
        <tr><ul>
            <th class="logo"><li><img src="../image/logo.png" alt="logo"></li></th>
            <th><li><a href="index.php">Home</a></li></th>
            <th><li><a href="imgdisp.php">Product</a></li></th>
            <th><li><a href="best.php">Our Best</a></li></th>
            <th><li><a href="feedback.php">Feedback</a></li></th>
            <th><li><a href="register.php">Register</a></li></th>
           
           
            <th><li></li></th>  <th><li></li></th>  <th><li></li></th>
 
            <th><button class="btnlogout"><a href="logout.php">Logout</a></button></th>
                       
        </ul></tr>
    </table>

    </nav>

    <center><p class="head">Admin View</p></center>

    </div>

    </body>
</html>