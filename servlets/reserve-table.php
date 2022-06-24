<?php


require_once $_SERVER["DOCUMENT_ROOT"]."/models/Reserve.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/ReserveController.php";



$reserve = new Reserve(
  0,
  $_REQUEST["name"],
  $_REQUEST["email"],
  $_REQUEST["phone"],
  $_REQUEST["people"],$_REQUEST["date"], $_REQUEST["time"], $_REQUEST["message"]);


$reserveController = new reserveController();
try {



  $reserveController->reserveTable($reserve);
  header("Location: /index.php#table");

  $sent = "Successfully reserved!";

}  catch (Exception $e) {

  echo $e->getMessage();

}



?>
