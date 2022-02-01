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
            <h1 class="menu">Menu:</h1>
            <?php
                require_once("../Process/selectstmt-session.php");
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
        <nav>
            <ul class="menunav">
                <li><a href="#">Merchandise</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">Order History</a></li>
                <li><a href="../Authentication/Log_out.php?logout" class="logout">Log Out</a></li>
            </ul>
        </nav>
        <div class="images">
            <div class="menu-img1">
                <div>
                    <img src="../images/Unagi.jpg" class="menu-img1-img">
                </div>
                <div class="menu-img1text"> 
                    <h2><a href="../Menu/Unagi.php">Unagi</a></h2> 
                </div>
            </div>
            <div class="menu-img2">
                <div>
                    <img src="../images/makisushi.jpg" class="menu-img2-img"> 
                </div>
                <div class="menu-img2text">
                    <h2><a href="../Menu/sushi.php">Sushi</a></h2> 
                </div>
            </div>
            <div class="menu-img3">
                <div>
                    <img src="../images/Tempura2.jpg" class="menu-img3-img">
                </div>
                <div class="menu-img3text"> 
                    <h2><a href="../Menu/tempura.php">Tempura</a></h2>
                </div>
            </div>
            <div class="menu-img4">
                <div>
                    <img src="../images/Soba 2.jpg" class="menu-img4-img">
                </div>
                <div class="menu-img4text">
                    <h2><a href="../Menu/soba.php">Soba</a></h2>
                </div>
            </div>
            <div class="menu-img5">
                <div>
                    <img src="../images/udon.jpeg" class="menu-img5-img">
                </div>
                <div class="menu-img5text">
                    <h2><a href="../Menu/udon.php">Udon</a></h2>
                </div>
            </div>
            <div class="menu-img6">
                <div>
                    <img src="../images/Onigiri.jpg" class="menu-img6-img">
                </div>
                <div class="menu-img6text">
                    <h2><a href="../Menu/Onigiri.php">Onigiri</a></h2>
                </div>
            </div>
        </div>
        <footer class="footer" id ="footer">
            <div class="footer1">
                <p>Designed By <br>Whyte</p>
            </div>
            <div class="contactdetails">
                <p>Phone Contact: +254 712 345 678</p>
                <p class="email">Email: <a href="mailto:victin250@gmail.com">victin250@gmail.com</a></p>
            </div>
            <div class="whyte"> 
                <img src="../images/Whyte-remove-bg.png" height="50px" width="50px">
            </div>
            <div class="socialmedia">
                <h2>Our Socials:</h2>
                <div class="facebook"> 
                    <a href="https://www.facebook.com"><img src="../images/facebook-32.png" alt="Facebook"></a>
                </div>
                <div class="twitter">
                    <a href="https://www.twitter.com"><img src="../images/twitter-32.png" alt="Twitter"></a>
                </div>
                <div class="instagram">
                    <a href="https://www.instagram.com"><img src="../images/instagram.png" alt="Instagram" height="32px" width="32px"></a>
                </div>
            </div>
        </footer>
    </body>
</html>