<?php
require_once("connect.php");

if(isset($_POST["button"])){

    $FirstName = $_POST["firstName"];
    $LastName = $_POST["lastName"];
    $Email = $_POST["email"];
    $password = $_POST["password"];

    $insert = "INSERT INTO new(First_Name,Last_Name,Email_address,passw)VALUES('$FirstName','$LastName','$Email','$password')";

    setData($insert);
    header("location:Menu.php");
}
?>