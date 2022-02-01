<?php
require_once("../Database/connect.php");

$select = "SELECT * FROM fooditems  WHERE food_category = 'Unagi'";
$fetchedunagi = getData($select);

$select = "SELECT * FROM fooditems  WHERE food_category = 'Sushi'";
$fetchedsushi = getData($select);

$select = "SELECT * FROM fooditems  WHERE food_category = 'Tempura'";
$fetchedtempura = getData($select);

$select = "SELECT * FROM fooditems  WHERE food_category = 'Soba'";
$fetchedsoba = getData($select);

$select = "SELECT * FROM fooditems  WHERE food_category = 'Udon'";
$fetchedudon = getData($select);

$select = "SELECT * FROM fooditems  WHERE food_category = 'Onigiri'";
$fetchedonigiri = getData($select);

?>