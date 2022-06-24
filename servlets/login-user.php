<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/controllers/UserController.php";


session_start();
$user = new User(0,"","",$_REQUEST["email"],$_REQUEST["password"], 0);

$userController = new UserController();
try {



  $username = $userController->loginVerify($user);
  if($username != false){
    $_SESSION["username"] = $username->getFirstname();
    $_SESSION["role"] = $username->getRole();
    $_SESSION["email"] = $username->getEmail();

    header("Location: /views/private-page.php");

  } else{
    header("Location: /views/login-form.php");
  }


} catch (Exception $e) {
  echo $e->getMessage();
}



//var_dump($userController->loginVerify($user));

?>


