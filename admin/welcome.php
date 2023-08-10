<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header ("location:../login.php");
    }
?>

<html>
    <body>
        
        Welcome
        <?php
            echo $_SESSION['admin'];
        ?>
        <a href="logout.php">LogOut</a>

    </body>

</html>
