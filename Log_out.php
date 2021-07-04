<?php
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    header("location:Food Website.html");
}else{
    header("location:Food Website.html");
}
?>