<?php
require_once("../Database/connect.php");
$id = $_GET['GETID'];
$result = "SELECT * FROM fooditems WHERE food_id ='".$id."'";
$answer = mysqli_query(connect(),$result);

while($row = mysqli_fetch_assoc($answer)){
    $food_group = $row['food_category'];
    $food_name = $row['fooditem'];
    $food_image = $row['imagepathname'];
    $food_price = $row['foodprice'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Assets/cssLogin.css" type="text/css">
        <title>Upload Image</title>
    </head>
    <body>
        <div class="first">
            <a href="../Pages/index.php"><img src="../Assets/web_logo_bold.svg"></a>
        </div>
        <form action="ImageUpdate.php?ID=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
            <h1 class="upload-image">Upload Image:</h1>
            <div>
                <input type="text" name="food_category" id="food_category" placeholder="Food Category" required value="<?php echo "$food_group"; ?>">
            </div>
            <div>
                <input type="text" name="fooditem" id="fooditem" placeholder="Enter Food Name" required value="<?php echo "$food_name";?>">
                <br>
            </div> 
            <div>
                <input type="text" name="food-image" id="foodimage" placeholder="File name" required value="<?php echo "$food_image";?>">
                <br>
            </div>
            <div>
                <input type="number" name = "price" id="foodprice" placeholder="Price" required value="<?php echo "$food_price";?>">
                <br>
            </div>
            <div class="button">
                <button type="submit" name="edit">Update</button>
                <br>
            </div>
        </form>
    </body>
</html>