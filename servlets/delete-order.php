<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/OrdersController.php";

$id = $_REQUEST["id"];
$orderController = new OrdersController();
try {

  $orderController->deleteOrder((int)$id);

  header("Location: /views/private-page.php");
  die();

} catch (Exception $e) {
  echo $e->getMessage();
}
