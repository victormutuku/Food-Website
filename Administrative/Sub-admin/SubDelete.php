<?php
require_once("../../Database/connect.php");
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $delete = "DELETE FROM new WHERE User_ID = '".$id."'";
        $result = mysqli_query(connect(),$delete);

        if($result){
            header("location:ViewUsers-Sub.php");
        }
        else{
            echo "Please Check Your Query";
        }
    }else{
        header("location:ViewUsers-Sub.php");
    }
?>