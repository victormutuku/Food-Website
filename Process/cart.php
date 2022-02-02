<?php
session_start();
require_once("../Database/connect.php");

$selected_id = $_GET['GETID'];
$select = "SELECT food_id, fooditem, foodprice FROM fooditems WHERE food_id= '".$selected_id."'";
$fetched_data = getData($select);
foreach($fetched_data as $key => $value){
    $food_id = $value['food_id'];
    $fooditem = $value['fooditem'];
    $foodprice = $value['foodprice'];
    $quantity = 1;
    $total = 0;
    $total  = $total + ($quantity*$foodprice);
    $total =$total + $total;
}
$insert = "INSERT INTO cart(food_id, fooditem, quantity, foodprice, total)VALUES('$food_id', '$fooditem', '1', '$foodprice', '$total')";
setData($insert);

?>
<?php
require_once("../Database/connect.php");

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
        <link rel="stylesheet" href="../Assets/css/ViewUsers.css" type="text/css">
    </head>
    <body>
    <a href="../Pages/index.php"><img src="../Assets/web_logo_bold.svg"></a>
    <h1 class="allusers">Cart:</h1> 
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
                <th>Cart Id</th>
                <th>Food Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Delete</th>
            </thead>
          <tbody>
              <?php
                    $selectcart = "SELECT * FROM cart";
                    $selected_cart = getData($selectcart);
                    foreach ($selected_cart as $key => $value) {
              ?>
              <tr>
                <td><?php echo $value["cart_id"]?></td> 
                  <td><?php echo $value["fooditem"]?></td>
                  <td><?php echo $value["quantity"]?></td>
                  <td><?php echo $value["foodprice"]?></td>
                  <td><?php echo $value["total"]?>/td>
                  <td><a href=delete_cart.php?del=<?php echo $value["cart_id"]?>>Delete</a></td>
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
            echo "<a href = 'cart.php?page=".($page-1)."'><button >Prev</button></a>";
          }
          for ($i=1; $i<$totalpage; $i++){
              echo "<a href = 'cart.php?page=".$i."'><button>$i</button></a>";
          }
          if($i>$page){
            echo "<a href = 'cart.php?page=".($page+1)."'><button>Next</button></a>";
          }
        ?>
    </body>
</html>