<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Food Website</title>
        <link rel="stylesheet" href="Food Website.css" type="text/css">
    </head>
    <body>
        <div class="first">
            <h1 class="title"><a href="Food Website.html">家庭 <img src="images/Food Website Logo.png" class="logo" >料理</a></h1>
            <a href="Menu.php"><h1 class="menu">Udon:</h1></a>
            <?php
                require_once("selectstmt-session.php");
                foreach ($fetched2 as $key => $value) {
            ?>
            
            <div class="username">
                <img src="images/user-icon-removebg.png" height="40px" width="40px">
                <a href="#" class="namelink">        
                    <h2>
                        <?php echo $value["First_Name"]?>
                    </h2>
                </a>
            </div>
          
            <?php
                }
            ?>    
            <div class="images">
                <?php
                    require_once("image_fetch.php");
                    foreach($fetchedudon as $key => $value){
                ?>
                <div class="specific">
                    <div>
                        <img src="<?php echo $value["imagepathname"]?>" class="specific-img">
                        <a href=""><h2><?php echo $value["fooditem"]?></h2></a>
                        <p>Kshs: <?php echo $value["foodprice"]?></p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>

    </body>
</html>