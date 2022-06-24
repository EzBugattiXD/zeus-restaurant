<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/helper/Settings.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/Reserve.php";

class ReserveController
{


  /**
   * @param Reserve $reserve
   * @return bool
   * @throws Exception
   */
  public function reserveTable(Reserve $reserve):bool {
    try{

      $pdo = Settings::getPDO();
      $sql = "INSERT INTO reserve (name, email, phone, people, date, time, message) 
                VALUES (:name, :email, :phone, :people, :date, :time, :message)";



      $messageEmpty = $reserve->getMessage();
      if (empty($messageEmpty)){
        $messageEmpty = "Not entered";
      } else {
        $messageEmpty = $reserve->getMessage();
      }


      $emailEmpty = $reserve->getEmail();
      if(empty($emailEmpty)){
        $emailEmpty = "Not entered";
      } else{
        $emailEmpty = $reserve->getEmail();
      }



      $ps = $pdo->prepare($sql);

      // Fill params
      $ps->bindValue(':name', $reserve->getName());
      $ps->bindValue(':email', $emailEmpty);
      $ps->bindValue(':phone', $reserve->getPhone());
      $ps->bindValue(':people', $reserve->getPeople());
      $ps->bindValue(':date', $reserve->getDate());
      $ps->bindValue(':time', $reserve->getTime());
      $ps->bindValue(':message', $messageEmpty);



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
  public function selectReserve(int $limit): array {
    $reserveAll = [];

    try {
      $pdo = Settings::getPDO();

      $sql = "SELECT * FROM reserve ORDER BY id LIMIT :limit";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);

      $stmt->execute();
      $items = $stmt->fetchAll(PDO::FETCH_OBJ);

      foreach ($items as $item) {
        $reserveAll[] = new Reserve($item->id, $item->name, $item->email, $item->phone, $item->people,$item->date, $item->time, $item->message);
      }

      return $reserveAll;

    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }


  }

  /**
   * @param int $id
   * @return bool
   * @throws Exception
   */

  public function deleteReserveTable(int $id): bool {
    try {
      $pdo = Settings::getPDO();

      $sql = "DELETE FROM reserve WHERE id = :id";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);

      return $stmt->execute();
    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }
  }


  public function selectReserveForUser(string $email): array {
    $reserveUser = [];

    try {
      $pdo = Settings::getPDO();

      $sql = "SELECT * FROM reserve WHERE email = :email";

      $stmt = $pdo->prepare($sql);
      $stmt->bindValue(':email', $email);


      $stmt->execute();
      $items = $stmt->fetchAll(PDO::FETCH_OBJ);

      foreach ($items as $item) {
        $reserveUser[] = new Reserve($item->id, $item->name, $item->email, $item->phone, $item->people,$item->date, $item->time, $item->message);
      }

      return $reserveUser;

    } catch (PDOException $exception) {
      throw new Exception($exception->getMessage());
    }


  }



}