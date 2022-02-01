<?php
session_start();

require_once("../Database/connect.php");

if(isset($_POST['button'])){ 
    $email = $_POST['Email'];
    $passw = $_POST['password'];
    $view = "SELECT * FROM new WHERE Email_address = '".$email."' AND passw = '".$passw."' AND Privilege = 'Admin'";
    $viewsub = "SELECT * FROM new WHERE Email_address = '".$email."' AND passw = '".$passw."' AND Privilege = 'Sub'";
    $userview = "SELECT * FROM new WHERE Email_address = '".$email."' AND passw = '".$passw."' AND Privilege = 'User'";

    $result = mysqli_query(connect(),$view);
    $result1 = mysqli_query(connect(),$viewsub);
    $result2 = mysqli_query(connect(),$userview);

    

    if(mysqli_fetch_assoc($result)){
        $_SESSION['User'] = $email;
        $sess = session_id();
        $fetched = getData($view);
        foreach ($fetched as $key => $value) {
            echo $userid = $value["User_ID"];
            echo $fname = $value["First_Name"];
            echo $priv = $value["Privilege"];
        }
        $insert = "INSERT INTO login_session_data(User_ID,First_Name,Privilege,Session_ID)VALUES('$userid','$fname','$priv','$sess') ";
        setData($insert);
        header("location:../Administrative/Main/ViewUsers-Admin.php");
    }else if($row = mysqli_fetch_assoc($result1)){
        $_SESSION['User'] = $email;
        $sess = session_id();
        $fetched = getData($viewsub);
        foreach ($fetched as $key => $value) {
            echo $userid = $value["User_ID"];
            echo $fname = $value["First_Name"];
            echo $priv = $value["Privilege"];
        }
        $insert = "INSERT INTO login_session_data(User_ID,First_Name,Privilege,Session_ID)VALUES('$userid','$fname','$priv','$sess') ";
        setData($insert);
        header("location:../Administrative/Sub/ViewUsers-Sub.php");
    }else if(mysqli_fetch_assoc($result2)){
        $_SESSION['User'] = $email;
        $sess = session_id();
        $fetched =getData($userview);
        foreach ($fetched as $key => $value) {
            echo $userid = $value["User_ID"];
            echo $fname = $value["First_Name"];
            echo $priv = $value["Privilege"];
        }
        $insert = "INSERT INTO login_session_data(User_ID,First_Name,Privilege,Session_ID)VALUES('$userid','$fname','$priv','$sess') ";
        setData($insert);
        header("location:../Pages/Menu.php");
    }else{
        header("location:../Authentication/Login/Login form.php?Absent=Please enter correct email and password"); 
    }  
}
?> 