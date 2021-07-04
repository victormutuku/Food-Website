<?php
require_once("connect.php");

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
        <title>View Users</title>
        <link rel="stylesheet" href="ViewUsers.css" type="text/css">
    </head>
    <body>
    <h1 class="title"><a href="Food Website.html">家庭 <img src="Food Website Logo.png" class="logo" >料理</a></h1>
    <h1 class="users">Users:</h1>
    <div>
            <nav>
                <ul class="rightnav">
                    <li><a href="Menu.php">Menu</a></li>
                    <li><a href="#">Merchandise</a></li>
                    <li><a href="upload_image.php">Upload</a></li>
                    <li><a href="Log_out.php?logout" class="logout">Log Out</a></li>
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
                <th>Edit</th>
                <th>Delete</th>
            </thead>
          <tbody>
              <?php
                require_once("selectstmt-sub.php");
                foreach ($fetched as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value["User_ID"]?></td> 
                  <td><?php echo $value["First_Name"]?></td>
                  <td><?php echo $value["Last_Name"]?></td>
                  <td><?php echo $value["Email_address"]?></td>
                  <td><?php echo $value["passw"]?></td>
                  <td><a href=SubEdit-form.php?GETID=<?php echo $value["User_ID"]?>>Edit</a></td>
                  <td><a href=SubDelete.php?del=<?php echo $value["User_ID"]?>>Delete</a></td>
              </tr>
                <?php
                    }
                ?>
          </tbody>
        </table>
        <?php
          $selectpagination = "SELECT * FROM new WHERE Privilege = 'User'";
          $pageresult = mysqli_query(connect(),$selectpagination);
          $totalnumrecords = mysqli_num_rows($pageresult);

          $totalpage = ceil($totalnumrecords/$num_per_page);

          if($page>1){
            echo "<a href = 'ViewUsers-Sub.php?page=".($page-1)."'><button >Prev</button></a>";
          }
          for ($i=1; $i<$totalpage; $i++){
              echo "<a href = 'ViewUsers-Sub.php?page=".$i."'><button>$i</button></a>";
          }
          if($i>$page){
            echo "<a href = 'ViewUsers-Sub.php?page=".($page+1)."'><button>Next</button></a>";
          }
        ?>
    </body>
</html>