<html>
    <head>
        <title>Add Prodect</title>

        <link rel="stylesheet" href="../style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
   
    </head>

    <body>

    <center><p class="d1">ADD NEW PRODUCT</p></center>

    <form action="prdinsertpro.php" method="POST" enctype="multipart/form-data">


        <div class="mdata">
            <div class="nfd">Image :</div>
            <div class="nfd1"><input type="file" name="img"></div>
        </div>
        
        <div class="mdata">
            <div class="nfd">Name :</div>
            <div class="nfd1"><input type="text" name="nm"></div>
        </div>
       
        <div class="mdata">
            <div class="nfd">Prise :</div>
            <div class="nfd1"><input type="number" name="ps"></div>
        </div>

        <div class="mdata">    
            <div class="nfd">Quantity :</div>
            <div class="nfd1"><input type="number" name="qt"></div>
        </div>

        <div class="mdata">
         <div class="nfd">Category :</div>
        <p class="nfd2"><table height="20%" width="90%"> 
            <tr><th class="prb"><input type="radio" name="cate" value="coffee"></th><td class="prb1"> Coffee</td><tr>
            <tr><th class="prb"><input type="radio" name="cate" value="icecream"></th><td class="prb1">Ice Cream</td></tr>
            <tr><th class="prb"><input type="radio" name="cate" value="shake"></th><td class="prb1">Thick Shake</td></tr>
        </table></p></div>


        <center><button class="sub"><input type="submit" name="submit" value="Submit"></button></center>
        
    </form>
    </body>
</html>

