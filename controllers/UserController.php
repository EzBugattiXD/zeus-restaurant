<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/helper/Settings.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/models/User.php";

class UserController
{
  /**
   * @param User $user
   * @return bool
   * @throws Exception
   */
  public function registerUser(User $user):bool{
    try{

      $pdo = Settings::getPDO();
      $sql = "INSERT INTO users (firstname, lastname, email, password, role) 
                VALUES (:firstname, :lastname, :email, :password, :role)";


      $passwordHash = password_hash($user->getPassword(), PASSWORD_ARGON2ID);
      $ps = $pdo->prepare($sql);



      $ps->bindValue(':firstname', $user->getFirstname());
      $ps->bindValue(':lastname', $user->getLastName());
      $ps->bindValue(':email',$user->getEmail());
      $ps->bindValue(':password',$passwordHash);
      $ps->bindValue(':role', $user->getRole());

      $ps->execute();

      return true;

    }catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }


  public function loginVerify(User $user){
    try{

      $pdo = Settings::getPDO();
      $sql = "SELECT firstname, email, password, role FROM users WHERE email = :email";


      $ps = $pdo->prepare($sql);


      $ps->bindValue(':email',$user->getEmail());


      $ps->execute();

      $result = $ps->fetch(PDO::FETCH_OBJ);

      if($result != false){

        if (password_verify($user->getPassword(), $result->password)){
          $user = new User(0,$result->firstname, "", $result->email, "", $result->role);
          return $user;
        }else{
          return false;
        }
      }else{
        return false;
      }

    }catch (Exception $e) {
      throw new Exception($e->getMessage());
    }
  }
}