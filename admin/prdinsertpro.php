<?php
	 include('../connect.php');
    
    $img = $_FILES['img']['name'];
    $nm = $_POST['nm'];
	$ps = $_POST['ps'];
	$qt = $_POST['qt'];
    $cate = $_POST['cate'];
       
	move_uploaded_file($_FILES['img']['tmp_name'],"image/".$_FILES['img']['name']);
      
       

        $q= mysqli_query($cn,"select * from image where nm='$nm'");
        if(mysqli_num_rows($q)!=0)
        {
            echo "<script>alert('Product is Already Exist....')</script>";
            echo "<script>window.location='prdinsert.php'<?script>";
        }
        else
        {
            $q = mysqli_query($cn,"INSERT INTO `image` (`id`, `img`, `nm`, `ps`, `qt`, `cate`) VALUES ('', '$img', '$nm', '$ps', '$qt', '$cate');");
            echo "<script>alert('Product insert Successfully...')</script>";
            echo "<script>window.location='imgdisp.php'</script>";
        }
    
    
?>