<?php

  define("DATA_BASE", array("host=localhost;", "dbname=develop", "root", ""));
  define("TOKEN", "b@ck0ff!c3");

  try {
    $conn = new PDO("mysql:". DATA_BASE[0] . DATA_BASE[1], DATA_BASE[2], DATA_BASE[3]);
    $conn -> exec("set names utf8");
  } catch(PDOException $e) {
    echo "Error: " . utf8_encode($e -> getMessage());
    exit();
  }

?>