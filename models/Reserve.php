<?php

class Reserve
{
  /**
   * @var integer
   */
  private $id;

  /**
   * @var string
   */
  private $name, $email;

  /**
   * @var integer
   */
  private $phone, $people;

  /**
   * @var string
   */
  private $date, $time, $message;

  /**
   * @param int $id
   * @param string $name
   * @param string $email
   * @param int $phone
   * @param int $people
   * @param string $date
   * @param string $time
   * @param string $message
   */
  public function __construct(int $id, string $name, string $email, int $phone, int $people, string $date, string $time, string $message)
  {
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->people = $people;
    $this->date = $date;
    $this->time = $time;
    $this->message = $message;
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
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * @param string $email
   */
  public function setEmail(string $email): void
  {
    $this->email = $email;
  }

  /**
   * @return int
   */
  public function getPhone(): int
  {
    return $this->phone;
  }

  /**
   * @param int $phone
   */
  public function setPhone(int $phone): void
  {
    $this->phone = $phone;
  }

  /**
   * @return int
   */
  public function getPeople(): int
  {
    return $this->people;
  }

  /**
   * @param int $people
   */
  public function setPeople(int $people): void
  {
    $this->people = $people;
  }

  /**
   * @return string
   */
  public function getDate(): string
  {
    return $this->date;
  }

  /**
   * @param string $date
   */
  public function setDate(int $date): void
  {
    $this->date = $date;
  }

  /**
   * @return string
   */
  public function getTime(): string
  {
    return $this->time;
  }

  /**
   * @param string $time
   */
  public function setTime(int $time): void
  {
    $this->time = $time;
  }

  /**
   * @return string
   */
  public function getMessage(): string
  {
    return $this->message;
  }

  /**
   * @param string $message
   */
  public function setMessage(string $message): void
  {
    $this->message = $message;
  }





}