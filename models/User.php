<?php

class User
{
  /**
   * @var integer
   */
  private $id;


  /**
   * @var string
   */
  private $firstname, $lastname;

  /**
   * @var string
   */
  private $email, $password;

  /**
   * @var integer
   */
  private $role;

  /**
   * @param int $id
   * @param string $firstname
   * @param string $lastname
   * @param string $email
   * @param string $password
   * @param int $role
   */
  public function __construct(int $id, string $firstname, string $lastname, string $email, string $password, int $role)
  {
    $this->id = $id;
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->email = $email;
    $this->password = $password;
    $this->role = $role;
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
  public function getFirstname(): string
  {
    return $this->firstname;
  }

  /**
   * @param string $firstname
   */
  public function setFirstname(string $firstname): void
  {
    $this->firstname = $firstname;
  }

  /**
   * @return string
   */
  public function getLastname(): string
  {
    return $this->lastname;
  }

  /**
   * @param string $lastname
   */
  public function setLastname(string $lastname): void
  {
    $this->lastname = $lastname;
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
   * @return string
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * @param string $password
   */
  public function setPassword(string $password): void
  {
    $this->password = $password;
  }

  /**
   * @return int
   */
  public function getRole(): int
  {
    return $this->role;
  }

  /**
   * @param int $role
   */
  public function setRole(int $role): void
  {
    $this->role = $role;
  }



}

