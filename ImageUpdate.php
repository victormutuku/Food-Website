<?php
require_once("connect.php");
if(isset($_POST['edit'])){
    $id = $_GET['ID'];
    $food_group = $_POST['food_category'];
    $food_name = $_POST['fooditem'];
    $food_image = $_POST['food-image'];
    $food_price = $_POST['price'];

    $set = "UPDATE fooditems SET food_category = '".$food_group."', fooditem= '".$food_name."', imagepathname = '".$food_image."', foodprice = '".$food_price."' WHERE food_id = '".$id."'";
    $result = mysqli_query(connect(),$set);

    if($result){
        header("location:Menu.php");
    }else{
        echo "Please Check your Query.";
    }
}
else{
    header("location:Menu.php");
} 
?>