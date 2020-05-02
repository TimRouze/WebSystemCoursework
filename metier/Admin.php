<?php 

class Admin {
  private $login;
  private $hashedPassword;

  function __construct($login, $hashedPassword){
    $this->login = $login;
    $this->hashedPassword = $hashedPassword;
  }

  function getLogin(){ return $this->login; }
  function getHashedPassword(){ return $this->hashedPassword; }
}