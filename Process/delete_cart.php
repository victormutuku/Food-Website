<?php
require_once("../Database/connect.php");
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $delete = "DELETE FROM cart WHERE cart_id = '".$id."'";
        $result = mysqli_query(connect(),$delete);

        if($result){
            header("location:cart.php");
        }
        else{
            echo "Please Check Your Query";
        }
    }else{
        header("location:cart.php");
    }
?>