<?php
require_once('../Database/connect.php');

if (isset($_POST["submitImage"])){
    $food_group = $_POST['Food_Group'];
    $food_name = $_POST['fooditem'];
    $food_image = $_FILES['food-image'];
    $food_price = $_POST['price'];
    
    $original_file_name = $_FILES['food-image']['name'];
    $file_tmp_location = $_FILES['food-image']['tmp_name'];

    $file_type = substr($original_file_name, strpos($original_file_name,'.'),strlen($original_file_name));

    $file_path = "assets/";
    $new_file_name = $file_path.$original_file_name;


    if(move_uploaded_file($file_tmp_location,$new_file_name)){
        $sql = "INSERT INTO fooditems(food_category, fooditem, originalimagename, imagepathname, foodprice) VALUES('$food_group', '$food_name', '$original_file_name', '$new_file_name', '$food_price')";       
        setData($sql);
            header("location:upload_image.php");
        }
        else{
            echo "Error";
        }
}
?>