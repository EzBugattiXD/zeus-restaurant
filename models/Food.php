<?php

class Food
{
  /**
   * @var integer
   */
  private $id;

  /**
   * @var string
   */
  private $name;


  /**
   * @var float
   */
  private $price;

  /**
   * @var integer
   */
  private $quantity;

  /**
   * @param int $id
   * @param string $name
   * @param float $price
   * @param int $quantity
   */
  public function __construct(int $id, string $name, float $price, int $quantity)
  {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
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





}