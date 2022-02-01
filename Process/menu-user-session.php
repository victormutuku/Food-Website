<?php
require_once("connect.php");
session_start();

if(isset($_POST["email"])){
    $_SESSION["email"] = htmlentities($_POST["email"]);
    $email = $_POST["email"];
    $name = "SELECT First_Name FROM new WHERE Email_address = '".$email."'";

    $result = getData($name);

    foreach ($fetched as $key => $value) {
        echo $value["First_Name"];
    }
    
}else{
    $_SESSION["email"] = "Random User";
}
?>
