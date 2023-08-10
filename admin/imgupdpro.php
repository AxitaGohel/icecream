<?php

        include('../connect.php');

        $id = $_POST['id'];
        $img = $_FILES['img']['name'];
        $nm = $_POST['nm'];
        $ps = $_POST['ps'];
        $qt = $_POST['qt'];
       
	move_uploaded_file($_FILES['img']['tmp_name'],"image/".$_FILES['img']['name']);
      
    
           $q = mysqli_query($cn,"UPDATE image SET img='$img',nm='$nm',ps='$ps',qt='$qt' WHERE id='$id'");
            echo "<script>alert('Product Update Successfully...')</script>";
            echo "<script>window.location='imgdisp.php'</script>";
    
    
    ?>