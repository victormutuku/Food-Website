<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="Signup & Login.css" type="text/css">
    </head>
    <body>
        <h1 class="title"><a href="Food Website.html">家庭 <img src="Food Website Logo.png" class="logo" >料理</a></h1>
        <form action="login_session.php" method="POST" class="loginform">
                <h1>Welcome</h1>|
                <div>
                    <div>
                        <input type="email" id="Email" name="Email" placeholder="Email" required>
                        <br>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <br>
                    </div>
                    <div class="button">
                        <button type="submit" name="button" >Log in</button>
                        <br>
                    </div>
                    <p> Not a member? <a href="Signupform.php">Sign up</a></p>
                </div>
        </form>
    </body>
</html>