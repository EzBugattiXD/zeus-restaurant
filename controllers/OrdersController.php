<?php

require_once $_SERVER["DOCUMENT_ROOT"]."./helper/Settings.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Orders.php";

class OrdersController
{

  /**
   * @param Orders $orders
   * @return bool
   * @throws Exception
   */
  public function orderFood(Orders $orders):bool {
    try{

      $pdo = Settings::getPDO();
      $sql = "INSERT INTO orders (meal, price, quantity, name, phone, address) 
                VALUES (:meal, :price, :quantity, :name, :phone , :address)";



      $ps = $pdo->prepare($sql);

      // Fill params
      $ps->bindValue(':meal', $orders->getMeal());
      $ps->bindValue(':price', $orders->getPrice());
      $ps->bindValue(':quantity', $orders->getQuantity());
      $ps->bindValue(':name', $orders->getName());
      $ps->bindValue(':phone', $orders->getPhone());
      $ps->bindValue(':address', $orders->getAddress());


      $ps->execute();

      return true;

    }catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }


  /**
   * @param int $limit
   * @return array
   * @throws Exception
   */
  public function selectOrders(int $limit): array {
    $ordersAll = [];

    try {
      $pdo = Settings::getPDO();

      $sql = "SELECT * FROM orders ORDER BY id LIMIT :limit";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);

      $stmt->execute();
      $items = $stmt->fetchAll(PDO::FETCH_OBJ);

      foreach ($items as $item) {
        $ordersAll[] = new Orders($item->id, $item->meal, $item->price, $item->quantity, $item->name,$item->phone, $item->address);
      }

      return $ordersAll;

    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }


  }


  public function deleteOrder(int $id): bool {
    try {
      $pdo = Settings::getPDO();

      $sql = "DELETE FROM orders WHERE id = :id";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);

      return $stmt->execute();
    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }
  }



}