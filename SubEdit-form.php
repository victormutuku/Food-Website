<?php
require_once("connect.php");
$id = $_GET['GETID'];
$result = "SELECT * FROM new WHERE User_ID ='".$id."'";
$answer = mysqli_query(connect(),$result);

while($row = mysqli_fetch_assoc($answer)){
    $FirstName= $row['First_Name'];
    $LastName=$row['Last_Name'];
    $Email=$row['Email_address'];
    $password=$row['passw'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Records</title>
        <link rel="stylesheet" href="Signup form.css" type="text/css">
    </head>
    <body>
        <h1 class="title"><a href="Food Website.html">家庭 <img src="Food Website Logo.png" class="logo" >料理</a></h1>
        <form action="AdminUpdate.php?ID=<?php echo $id ?>" method="POST">
                <h1>Update Records</h1>
                <div class="form">

                    <div>
                        <input type="text" id="firstname" name="firstName" placeholder="First Name" value="<?php echo "$FirstName"; ?>">
                        <br>
                    </div>
                    <div>
                        <input type="text" id="lastname" name="lastName" placeholder="Last Name" value="<?php echo $LastName; ?>">
                        <br>
                    </div>
                    <div>
                        <input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required value="<?php echo $Email; ?>">
                        <br>
                    </div>
                    <div>
                        <input type="text" id="password" name="password" placeholder="Password" required value="<?php echo $password; ?>">
                        <br>
                    </div>
                    <div class="button">
                        <button type="submit" name="edit">Update</button>
                        <br>
                    </div>
                </div>
        </form>
    </body>
</html>