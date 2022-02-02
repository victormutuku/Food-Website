<?php
require_once("../../Database/connect.php");

if (isset($_GET['page'])){
  $page = $_GET['page'];
 }else{
   $page = 1;
 }

 $num_per_page = 5;
 $begin_from = ($page-1)*5;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale = 1.0">
        <title>View All Users</title>
        <link rel="stylesheet" href="../../Assets/css/ViewUsers.css" type="text/css">
    </head>
    <body>
      <a href="../../Pages/index.php"><img src="../../Assets/web_logo_bold.svg"></a>
      <h1 class="allusers">All Users:</h1> 
      <div>
          <nav>
            <ul class="rightnav">
              <li><a href="../../Pages/Menu.php">Menu</a></li>
              <li><a href="#">Merchandise</a></li>
              <li><a href="../../Process/upload_image.php">Upload</a></li>
              <li><a href="../../Authentication/Log_out.php?logout" class="logout">Log Out</a></li>
            </ul>
          </nav>
      </div> 
      
      <table border="1">
        <thead>
          <th>User ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Password</th>
          <th>Privilege</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
          <?php
            require_once("../../Process/selectstmt.php");
            foreach ($fetched as $key => $value) {
          ?>
          <tr>
            <td><?php echo $value["User_ID"]?></td> 
            <td><?php echo $value["First_Name"]?></td>
            <td><?php echo $value["Last_Name"]?></td>
            <td><?php echo $value["Email_address"]?></td>
            <td><?php echo $value["passw"]?></td>
            <td><?php echo $value["Privilege"]?></td>
            <td><a href=AdminEdit-form.php?GETID=<?php echo $value["User_ID"]?>>Edit</a></td>
            <td><a href=AdminDelete.php?del=<?php echo $value["User_ID"]?>>Delete</a></td>
          </tr>
            <?php
              }
            ?>
        </tbody>
      </table >
      <?php
        $selectpagination = "SELECT * FROM new";
        $pageresult = mysqli_query(connect(),$selectpagination);
        $totalnumrecords = mysqli_num_rows($pageresult);

        $totalpage = ceil($totalnumrecords/$num_per_page);

        if($page>1){
          echo "<a href = 'ViewUsers-Admin.php?page=".($page-1)."'><button >Prev</button></a>";
        }
        for ($i=1; $i<$totalpage; $i++){
            echo "<a href = 'ViewUsers-Admin.php?page=".$i."'><button>$i</button></a>";
        }
        if($i>$page){
          echo "<a href = 'ViewUsers-Admin.php?page=".($page+1)."'><button>Next</button></a>";
        }
      ?>
    </body>
</html>