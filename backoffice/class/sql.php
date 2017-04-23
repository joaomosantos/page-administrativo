<?php 

class SQL extends PDO {

  private $conn;

  public function __construct() {
    try {
      $this -> conn = new PDO("mysql:host=localhost;dbname=develop", "root", "");
      $this -> conn -> exec("set names utf8");
    } catch(PDOException $e) {
      echo "Error: " . utf8_encode($e -> getMessage());
      exit();
    }
  }

  public function query($query) {
    return $stmt = $this -> conn -> prepare($query);
  }

}

?>