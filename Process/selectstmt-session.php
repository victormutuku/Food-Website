<?php
require_once("../Database/connect.php");

    $link = connect();
    session_start();
    $sess = session_id();
    $select2 = "SELECT First_Name FROM login_session_data WHERE Session_ID = '".$sess."'";
    $fetched2 = getData($select2); 
    
    
?>