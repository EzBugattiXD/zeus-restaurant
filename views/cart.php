<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
            rel="stylesheet"
            href="/css/main.css"
    >
</head>
<body>


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

            <li><a
                        class="nav-link"
                        href="/views/register-form.php"
                >Register</a></li>

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



<div class="container">
    <h1 style="margin: 2em 0 1em 0"><div>Your order</div></h1>
</div>



<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/helper/Settings.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/controllers/FoodController.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/controllers/UserController.php";



session_start();

$foodController = new FoodController();
$products = [];

try {
  $products = $foodController->getFoodById($_REQUEST["id"]);
} catch (Exception $e) {
  echo $e->getMessage();
}
?>


<div class="container">


    <form action="/servlets/order.php" method="post" id="order_form">
        <table class="table">

            <th>Meal</th>
            <th>Price</th>
            <th>Quantity</th>
          <?php
          foreach ($products as $product): ?>
              <tr>

                  <td><input class="order-meal" type="text" name="meal" id="meal" readonly value="<?=$product->getName()?>"></td>
                  <td><input class="order-meal" type="number" name="price" id="price" readonly value="<?=$product->getPrice()?>"></td>
                  <td><input type="number" name="quantity" min="1" value="1" style="width: 80px"></td>



              </tr>
          <?php endforeach;?>
        </table>

        <div class="order_details">
            <h2>Fill the details</h2>
        </div>
        <div class="order_form">
            <div class="form-group m-3">
                <label for="name">Name</label>
                <?php
                if(isset($_SESSION["username"])){ ?>
                <input type="text" name="name" class="form-control" id="name" readonly value="<?=$_SESSION["username"]?>">
                <?php } else {?>
                    <input type="text" name="name" class="form-control" id="name">
                <?php }?>
            </div>
            <div class="form-group m-3">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group m-3">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address">
            </div>

            <div class="form-group m-3 order-btn" style="text-align: center">
                <input type="submit" value="Order now" name="order_btn" id="order_btn" class="btn btn-primary mt-5 order-button">
            </div>

    </form>



</div>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="/js/jq_messages.js"></script>
<script src="/main.js"></script>
<script>
    $( "#order_form" ).validate({
        rules: {
            name:{
                required:true
            },
            phone: {
                required:true,
                minlength:10,
                maxlength:10
            },
            address:{
                required:true,
                minlength: 3
            }
        }
    });
</script>
</body>
</html>