<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../../Assets/css/Login.css" type="text/css">
    </head>
    <body>
        <div class="first">
            <a href="../../Pages/index.php"><img src="../../Assets/web_logo_bold.svg"></a>
        </div>
        <form action="login_session.php" method="POST" class="loginform">
                <h1>Login</h1>
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
                    <p> Not a member? <a href="../SignUp/Signupform.php">Sign up</a></p>
                </div>
        </form>
    </body>
</html>