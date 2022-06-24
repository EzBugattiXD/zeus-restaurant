<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Private page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link
            rel="stylesheet"
            href="/css/main.css"
    >
</head>
<body>

<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/ReserveController.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Reserve.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/OrdersController.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Orders.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Food.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/FoodController.php";


?>




<nav class="navigation">
    <div>
        <ul class="mainMenu">
            <li><a
                        class="nav-link"
                        href="/index.php"
                >Home</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#about-us"
                >About us</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#menu"
                >Menu</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#delivery"
                >Delivery</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#table"
                >Reservation</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#footer"
                >Contact</a></li>


        </ul>
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>


<div class="logo">
    <div class="container">
        <a href="#">
            <img
                    src="/img/Logo-Header.png"
                    alt="logo"
                    class="img-fluid"
            >
        </a>
    </div>
</div>



   <div class="container" style="margin: 4em">
     <?php
     session_start();

     $admin = isset($_SESSION["role"]) && $_SESSION["role"] == 1;

     if(isset($_SESSION["username"])){
//        var_dump($_SESSION['cart']);


     if (isset($_SESSION["username"])) {

       ?> <div><p><h2>Welcome <?=$_SESSION["username"] ?></h2></p></div>
     <?php }


     ?>

     <p>
       <button class="logout-btn"><a href="/servlets/logout-user.php">Logout</a></button>
     </p>
   </div>



<div class="container">
    <div>
        <h2>Your reservations</h2>
    </div>

  <?php


  $reserveController = new ReserveController();
  $reserveTables = [];
  $email = $_SESSION["email"];

  try {
    $reserveTables = $reserveController->selectReserveForUser($_SESSION["email"]);

  } catch (Exception $e){
    echo $e->getMessage();
  }
  ?>

    <div>

        <table class="table table-striped">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Number of people</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
            <th>Delete</th>


          <?php
          foreach ($reserveTables as $reserveTable):
            ?>
              <tr>
                  <td><?=$reserveTable->getId() ?></td>
                  <td><?=$reserveTable->getName() ?></td>
                  <td><?=$reserveTable->getEmail() ?></td>
                  <td><?=$reserveTable->getPhone() ?></td>
                  <td><?=$reserveTable->getPeople() ?></td>
                  <td><?=$reserveTable->getDate() ?></td>
                  <td><?=$reserveTable->getTime() ?></td>
                  <td><?=$reserveTable->getMessage() ?></td>
                  <td>
                      <a href="/servlets/delete-reserve-table.php?id=<?=$reserveTable->getId() ?>">Delete</a>
                  </td>
              </tr>
          <?php endforeach;?>
        </table>


    </div>
</div>
</div>

    <?php
   if($admin){
?>



    <div class="container">
        <p>
            THIS IS ONLY FOR ADMIN
        </p>
        <div>
            <h1>Table reservation</h1>
        </div>


      <?php


      $reserveController = new ReserveController();
      $reserveTables = [];

      try {
        $reserveTables = $reserveController->selectReserve(20);
      } catch (Exception $e){
        echo $e->getMessage();
      }
      ?>

        <div>

            <table class="table table-striped">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone number</th>
                <th>Number of people</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
                <th>Admin Action</th>

              <?php
                foreach ($reserveTables as $reserveTable):
              ?>
                <tr>
                    <td><?=$reserveTable->getId() ?></td>
                    <td><?=$reserveTable->getName() ?></td>
                    <td><?=$reserveTable->getEmail() ?></td>
                    <td><?=$reserveTable->getPhone() ?></td>
                    <td><?=$reserveTable->getPeople() ?></td>
                    <td><?=$reserveTable->getDate() ?></td>
                    <td><?=$reserveTable->getTime() ?></td>
                    <td><?=$reserveTable->getMessage() ?></td>
                    <td>
                        <a href="/servlets/delete-reserve-table.php?id=<?=$reserveTable->getId() ?>">Completed</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>


        </div>
    </div>


<div class="container">
    <div>
        <h1>Orders</h1>
    </div>
</div>



<?php


$orderController = new OrdersController();
$orderTable = [];

try {
  $orderTable = $orderController->selectOrders(20);
} catch (Exception $e){
  echo $e->getMessage();
}
?>

<div class="container">

    <table class="table table-striped">
        <th>ID</th>
        <th>Meal name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Admin Action</th>

      <?php
      foreach ($orderTable as $ordersTable):
        ?>
          <tr>
              <td><?=$ordersTable->getId()?></td>
              <td><?=$ordersTable->getMeal() ?></td>
              <td><?=$ordersTable->getPrice() ?></td>
              <td><?=$ordersTable->getQuantity() ?></td>
              <td><?=$ordersTable->getName() ?></td>
              <td><?=$ordersTable->getPhone() ?></td>
              <td><?=$ordersTable->getAddress() ?></td>

              <td>
                  <a href="/servlets/delete-order.php?id=<?=$ordersTable->getId() ?>">Completed</a>
              </td>
          </tr>
      <?php endforeach;?>
    </table>

  <?php
  }
  }else{
    header("Location: /views/login-form.php");
  }

  ?>


</div>
</div>


<script src="/main.js"></script>
</body>
</html>