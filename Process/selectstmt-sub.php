<?php
require_once("../Database/connect.php");

$link = connect();
    $select = "SELECT User_ID, First_Name, Last_Name, Email_address, passw FROM new WHERE Privilege = 'User'";
    $fetched = getData($select);

if(isset($_GET["edit"])){
    $id = $_GET["edit"];
    $sel = "SELECT * FROM new WHERE User_ID = $id";
}
?>