<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/models/Orders.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/OrdersController.php";



$order = new Orders(0,$_REQUEST["meal"],$_REQUEST["price"], $_REQUEST["quantity"], $_REQUEST["name"],$_REQUEST["phone"],$_REQUEST["address"]);


$orderController = new OrdersController();

try {

  $orderController->orderFood($order);
  header("Location: /index.php#menu");

}  catch (Exception $e) {

  echo $e->getMessage();

}
