<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <link rel="stylesheet" href="../../Assets/css/Signup form.css" type="text/css">
        <script>
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                checkup();
            });
            function checkup() {
                const password = document.getElementById('password').value;
                const confirmpassword = document.getElementById('confirmpassword').value;

                if(password.length < 6){
                    document.getElementById("small1").innerHTML = "Password must be more than 6 characters."
                    return false;
                }else{
                    document.getElementById("small1").innerHTML = ""
                }
                if(password != confirmpassword){
                    document.getElementById("small").innerHTML = "Password does not match."
                    return false;
                }else{
                    document.getElementById("small").innerHTML = ""
                }
            }
        </script>
    </head>
    <body>
        <div class="first">
            <a href="../../Pages/index.php"><img src="../../Assets/web_logo_bold.svg"></a>
        </div>
        <form action="../../Process/fetch.php" method="POST" onsubmit = "return checkup()">
                <h1>Sign up</h1>
                <div class="form"> 
                    <div>
                        <input type="text" id="firstname" name="firstName" placeholder="First Name" required>
                        <br>
                    </div>
                    <div>
                        <input type="text" id="lastname" name="lastName" placeholder="Last Name" required>
                        <br>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required>
                        <br>
                    </div>
                    <div>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <br>
                        <small id="small1"></small>
                    </div>
                    <div>
                        <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password" required>
                        <br>
                        <small id="small"></small>
                    </div>
                    <div class="button">
                        <button type="submit" name="button">Sign Up</button>
                        <br>
                    </div>
                    <p>Already a member? <a href="../Login/Login form.php">Log in</a></p>
                </div>
        </form>
    </body>
</html>