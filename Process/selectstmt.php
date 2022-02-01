<?php
require_once("../Database/connect.php");

$select = "SELECT User_ID, First_Name, Last_Name, Email_address, passw, Privilege FROM new LIMIT $begin_from,$num_per_page";
$fetched = getData($select);
?>
