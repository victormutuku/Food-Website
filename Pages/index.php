<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Food Website</title>
        <link rel="stylesheet" href="../Assets/css/index.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="first">
                <a href="index.php"><img src="../Assets/web_logo_bold.svg"></a>
            </div>
            <div>
            <nav>
                <ul class="leftnav"> 
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Menu.php">Menu</a></li>
                    <li><a href="#">Merchandise</a></li>
                </ul>
                <ul class="rightnav">
                    <!-- Get baack to this. The login button should hover yellow -->
                    <li><a href="../Authentication/Login/Login form.php" class="login">Login</a></li>
                    <li><a href="#about-us">About</a></li>
                    <li><a href="#footer">Contact Us</a></li>
        
                </ul>
            </nav>
            </div> 
        </header> 
        <main>
                <div class="video-container">
                    <video autoplay loop preload="auto">
                    <source src="../images/video.mp4" type = "video/mp4">
                    Sorry. Your Browser does not support this video.
                </video>
                </div>
                

                <div class="intro">
                    <h1>Home Food</h1>
                    <p class="p1">A Janapese culinary experience like no other.</p>
                    <p class="p2">Featuring all the staple Japanese food at their best.</p>
                    <a href="../Authentication/SignUp/Signupform.php"><button type="submit" class="button">Order Now ></button></a>
                </div>
                <div class="belowfold">
                    <h1>Katei ryōri</h1>
                    <p>This phrase translates to Home Food (as seen in our logo). <br>
                        Here,we are dedicated to giving you the best of the local Japanese cuisine. <br>
                        </p>
                </div>
                <div class="images"> 
                    <div class="img1">
                        <div class="img1-img">
                            <img src="../images/Unagi.jpg" id="img1" alt="Grilled freshwater eel dipped in soy sauce">
                        </div>
                        <div class="img1text"> 
                            <h2>Unagi</h2>
                        </div>
                    </div>
                    <div class="img2">
                        <div class="img2-img">
                            <img src="../images/makisushi.jpg"> 
                        </div>
                        <div class="img2text">
                            <h2>Sushi</h2>
                        </div>
                    </div>
                    <div class="img3">
                        <div class="img3-img">
                            <img src="../images/Onigiri.jpg" class="real-img3"> 
                        </div>
                        <div class="img3text">
                            <h2>Onigiri</h2>
                        </div>
                    </div>
                    <div class="img4">
                        <div class="img4-img">
                            <img src="../images/tempura.jpg" class="real-img4"> 
                        </div>
                        <div class="img4text">
                            <h2>Tempura</h2>
                        </div>
                    </div>
                </div>
        </main>
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