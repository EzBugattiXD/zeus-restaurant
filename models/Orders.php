<?php

class Orders
{
  /**
   * @var integer
   */
  private $id;

  /**
   * @var string
   */
  private $meal;

  /**
   * @var float
   */
  private $price;

  /**
   * @var integer
   */
  private $quantity;

  /**
   * @var string
   */
  private $name;

  /**
   * @var integer
   */
  private $phone;

  /**
   * @var string
   */
  private $address;

  /**
   * @param int $id
   * @param string $meal
   * @param float $price
   * @param int $quantity
   * @param string $name
   * @param string $phone
   * @param string $address
   */
  public function __construct(int $id, string $meal, float $price, int $quantity, string $name, string $phone, string $address)
  {
    $this->id = $id;
    $this->meal = $meal;
    $this->price = $price;
    $this->quantity = $quantity;
    $this->name = $name;
    $this->phone = $phone;
    $this->address = $address;
  }

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId(int $id): void
  {
    $this->id = $id;
  }

  /**
   * @return string
   */
  public function getMeal(): string
  {
    return $this->meal;
  }

  /**
   * @param string $meal
   */
  public function setMeal(string $meal): void
  {
    $this->meal = $meal;
  }

  /**
   * @return float
   */
  public function getPrice(): float
  {
    return $this->price;
  }

  /**
   * @param float $price
   */
  public function setPrice(float $price): void
  {
    $this->price = $price;
  }

  /**
   * @return int
   */
  public function getQuantity(): int
  {
    return $this->quantity;
  }

  /**
   * @param int $quantity
   */
  public function setQuantity(int $quantity): void
  {
    $this->quantity = $quantity;
  }

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getPhone(): string
  {
    return $this->phone;
  }

  /**
   * @param string $phone
   */
  public function setPhone(string $phone): void
  {
    $this->phone = $phone;
  }

  /**
   * @return string
   */
  public function getAddress(): string
  {
    return $this->address;
  }

  /**
   * @param string $address
   */
  public function setAddress(string $address): void
  {
    $this->address = $address;
  }




}