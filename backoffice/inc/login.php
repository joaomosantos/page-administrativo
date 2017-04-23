<?php if(isset($_REQUEST["autenticar"]) && isset($_REQUEST["autenticar"]) === true): ?>

  <?php
    require_once("config.php");

    $usuario = new Usuario();
    $usuario -> setEmail($_POST["email"]);
    $usuario -> setSenha($_POST["senha"]);
    $statement = $usuario -> login($usuario -> getEmail(), $usuario -> getSenha());
  ?>

  <?php if($statement -> execute()): ?>
    <?php if($registro = $statement -> fetch(PDO::FETCH_OBJ)): ?>
      <?php if($registro -> ativo == 1): ?>
        <?php
          session_start();
          $_SESSION["usuario"] = $registro -> nome;
          $_SESSION["horario"] = time();
          header("Location: views/index.php");
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