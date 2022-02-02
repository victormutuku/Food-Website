<?php
require_once("../../Database/connect.php");
if(isset($_POST['edit'])){
    $id = $_GET['ID'];
    $FirstName = $_POST["firstName"];
    $LastName = $_POST["lastName"];
    $Privilege = $_POST["privilege"];
    $Email = $_POST["email"];
    $password = $_POST["password"];

    $set = "UPDATE new SET First_Name = '".$FirstName."', Last_Name = '".$LastName."', Email_address = '".$Email."', passw = '".$password."', Privilege = '".$Privilege."' WHERE User_ID = '".$id."'";
    $result = mysqli_query(connect(),$set);

    if($result){
        header("location:ViewUsers-Admin.php");
    }else{
        echo "Please Check your Query.";
    }
}else{
    header("location:ViewUsers-Admin.php");
} 
?>