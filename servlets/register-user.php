<?php
  require_once $_SERVER["DOCUMENT_ROOT"]."/models/User.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/UserController.php";


  $user = new User(0,$_REQUEST["firstname"],$_REQUEST["lastname"],$_REQUEST["email"],$_REQUEST["password"], 0);

  $userController = new UserController();


try {
  $userController->registerUser($user);
  header("Location: /views/login-form.php");

}catch (Exception $e){
  echo $e->getMessage();
}


?>
