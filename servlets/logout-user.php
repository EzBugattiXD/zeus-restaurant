<?php
  session_start();

  unset($_SESSION["username"]);
  header("Location: /views/private-page.php");
?>

