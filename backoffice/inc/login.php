<?php if(isset($_REQUEST["autenticar"]) && isset($_REQUEST["autenticar"]) === true): ?>

  <?php
    require_once("inc/database.php");

    $sql = "SELECT nome, ativo FROM admin WHERE email = ? AND senha = ?";
    
    $statement = $conn -> prepare($sql);
    
    $statement -> bindParam(1, $_POST["email"]);
    $senha = md5($_POST["senha"] . TOKEN);
    $statement -> bindParam(2, $senha);
  ?>

  <?php if($statement -> execute()): ?>
    <?php if($registro = $statement -> fetch(PDO::FETCH_OBJ)): ?>
      <?php if($registro -> ativo == 1): ?>
        <?php
          session_start();
          $_SESSION["admin"] = $registro -> nome;
          header("Location: views/home/index.php");
        ?>
      <?php else: ?>
        <div class="alert alert-danger" role="alert">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> A conta administrador: <?=$registro -> nome?> está inativo.
        </div>
      <?php endif; ?>
    <?php else: ?>
      <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> E-mail e/ou Senha invalido(a).
      </div>
    <?php endif; ?>
  <?php else: ?>
    <div class="alert alert-danger" role="alert">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Falha no acesso.
    </div>
  <?php endif; ?>

<?php endif; ?>