<?php
require_once("connect.php");
    if(isset($_GET['del'])){
        $id = $_GET['del'];
        $delete = "DELETE FROM new WHERE User_ID = '".$id."'";
        $result = mysqli_query(connect(),$delete);

        if($result){
            header("location:ViewUsers-Admin.php");
        }
        else{
            echo "Please Check Your Query";
        }
    }else{
        header("location:ViewUsers-Admin.php");
    }
?>