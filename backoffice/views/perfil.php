<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>Editar perfil - Backoffice</title>

  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
  <link rel="stylesheet" href="../assets/css/vendor/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

  <?php require_once("..". DIRECTORY_SEPARATOR ."inc". DIRECTORY_SEPARATOR ."session.php"); ?>

  <div class="container">
    <form id="form" method="post" action="?editar=true">
      <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Editar perfil</div>
        <div class="panel-body">
          <?php require_once("..". DIRECTORY_SEPARATOR ."inc". DIRECTORY_SEPARATOR ."editar_perfil.php"); ?>
          <div class="form-group">
            <label for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" name="nome" value="<?=$_SESSION["usuario"] -> nome?>" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input class="form-control" type="text" id="email" name="email" value="<?=$_SESSION["usuario"] -> email?>" placeholder="E-mail">
          </div>
        </div>
        <div class="panel-footer clearfix">
          <a href="index.php" class="btn btn-primary pull-left"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</a>
          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-refresh" aria-hidden="true"></i> Atualizar</button>
        </div>
      </div>
    </form>
  </div>

  <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/vendor/jquery.validate.min.js"></script>
  <script src="../assets/js/vendor/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>