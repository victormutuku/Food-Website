<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Signup & Login.css" type="text/css">
        <title>Upload Image</title>
    </head>
    <body>
        <div class="first">
                <h1 class="title"><a href="../Pages/index.php">家庭 <img src="images/Food Website Logo.png" class="logo" >料理</a></h1>       
        </div>
        <form action="process_upload.php" method="POST" enctype="multipart/form-data">
            <h1 class="upload-image">Upload Image:</h1>
            <div>
                <select name="Food_Group" id="foodgroup">
                    <option selected disabled>Food Group</option>
                    <option value="Unagi">Unagi</option>
                    <option value="Sushi">Sushi</option>
                    <option value="Tempura">Tempura</option>
                    <option value="Soba">Soba</option>
                    <option value="Udon">Udon</option>
                    <option value="Onigiri">Onigiri</option>
                </select>
            </div>
            <div>
                <input type="text" name="fooditem" id="fooditem" placeholder="Enter Food Name" required>
                <br>
            </div> 
            <div>
                <input type="file" name="food-image" id="foodimage" placeholder="File name" required>
                <br>
            </div>
            <div>
                <input type="number" name = "price" id="foodprice" placeholder="Price" required>
                <br>
            </div>
            <div>
                <input type="submit" name="submitImage" value="SAVE">
            </div>
        
        </form>
    </body>
</html>