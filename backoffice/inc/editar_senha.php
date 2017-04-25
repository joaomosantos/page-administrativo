<?php if(isset($_REQUEST["editar"]) && isset($_REQUEST["editar"]) === true): ?>

  <?php
    require_once("config.php");

    $perfil = new Usuario();
    $Senha = $perfil -> criptografia($_POST["senha"]);
  ?>

  <?php if($Senha === $_SESSION["usuario"] -> senha): ?>
    <?php 
      $confimarSenha = $_POST["confirmarsenha"];
      $statement = $perfil -> editarSenha($_SESSION["usuario"] -> id, $confimarSenha);
    ?>
    <?php if($statement -> execute()): ?>
      <?php if($statement -> rowCount() > 0): ?>
        <div class="alert alert-success" role="alert">
          <i class="fa fa-check" aria-hidden="true"></i> Senha alterada com sucesso.
        </div>
        <?php 
          $perfil = new Usuario();
          $statement = $perfil -> getPerfil($_SESSION["usuario"] -> id);
          $statement -> execute();
          $registro = $statement -> fetch(PDO::FETCH_OBJ);
          $_SESSION["usuario"] = $registro;
        ?>
      <?php else: ?>
        <div class="alert alert-warning" role="alert">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Não houver nenhuma alteração.
        </div>
      <?php endif; ?>
    <?php else: ?>
      <div class="alert alert-danger" role="alert">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Falha no acesso.
      </div>
    <?php endif; ?>
  <?php else: ?>
    <div class="alert alert-danger" role="alert">
      <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Sua senha atual informada não é válida.
    </div>
  <?php endif; ?>

<?php endif; ?>