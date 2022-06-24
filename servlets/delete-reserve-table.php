<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/ReserveController.php";

$id = $_REQUEST["id"];
$reserveController = new reserveController();
try {
  //var_dump($reserveController->deleteReserveTable((int)$id));
  $reserveController->deleteReserveTable((int)$id);

  header("Location: /views/private-page.php");
  die();

} catch (Exception $e) {
  echo $e->getMessage();
}
