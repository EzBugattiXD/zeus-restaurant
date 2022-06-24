<?php

class Settings
{
  const SERVERPORT = "3306";
  const SERVER_NAME = "localhost:".self::SERVERPORT;
  const DB_NAME = "semestralka2";
  const USERNAME = "semestralka2";
  const PASSWORD = "123456789";


  public static function getPDO(): PDO {
    $pdo = new PDO(
      "mysql:host=".self::SERVER_NAME.";dbname=".self::DB_NAME,
      self::USERNAME,
      self::PASSWORD
    );

    return $pdo;
  }
}