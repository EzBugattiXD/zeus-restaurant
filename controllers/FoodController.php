<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/helper/Settings.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Food.php";

class FoodController
{

  public function getFoodById(int $id): array {
    $foodPick = [];
    try {
      $pdo = Settings::getPDO();

      $sql = "SELECT * FROM food WHERE id=:id";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue("id",$id, PDO::PARAM_INT);

      $stmt->execute();
      $items = $stmt->fetchAll(PDO::FETCH_OBJ);

      foreach ($items as $item) {
        $foodPick[] = new Food($item->id, $item->name, $item->price, $item->quantity);
      }
      return $foodPick;

    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }
  }



}