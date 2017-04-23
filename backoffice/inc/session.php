<?php 
  
  // Starta a sessão;
  session_start();

  // Verificar se o usuario está logado na sessão;
  if(isset($_SESSION["usuario"])) {
    $minutos = 15 * 60; // Minutos * Segundos;
    // [Horario atual] - [Horario do login] > [Minutos] = Usuario inativo;
    if(time() - $_SESSION["horario"] > $minutos) {
      header("Location: ../index.php"); // Retorna para tela de login;
      session_destroy(); // Destroy a sessão;
    } else {
      $_SESSION["horario"] = time(); // [Horario do login] = [Horario atual];
    }
  } else {
    // Se o usuario não estiver logado, retorna para tela de login;
    header("Location: ../index.php");
    exit();
  }

?>