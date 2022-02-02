<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <title>Food Website</title>
        <link rel="stylesheet" href="../Assets/css/index.css" type="text/css">
    </head>
    <body>
        <div class="first">
            <a href="../Pages/index.php"><img src="../Assets/web_logo_bold.svg"></a>
            <a href="../Pages/Menu.php"><h1 class="menu">Onigiri:</h1></a>
            <?php
                require_once("../Process/selectstmt-session.php");
                foreach ($fetched2 as $key => $value) {
            ?>
            
            <div class="username">
                <img src="../images/user-icon-removebg.png" height="40px" width="40px">
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
                    require_once("../Process/image_fetch.php");
                    foreach($fetchedonigiri as $key => $value){
                ?>
                <div class="specific">
                    <div>
                        <img src="<?php echo $value["imagepathname"]?>" class="specific-img">
                        <a href=""><h2><?php echo $value["fooditem"]?></h2></a>
                        <p>Kshs: <?php echo $value["foodprice"]?></p>
                        <a href=../Process/FoodEdit-form.php?GETID=<?php echo $value["food_id"]?> id="edit">Edit</a>=
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>

    </body>
</html>