<?php 

  // Destroy sessão e retorna a tela de login;
  session_start();
  session_destroy(); 
  header("Location: ../index.php");

?> 