<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>Login - Administrativo</title>

  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
  <link rel="stylesheet" href="css/vendor/normalize.min.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="css/vendor/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
</head>
<body>

  <div class="container">
    <?php require_once("inc/login.php"); ?>

    <form id="form" method="post" action="?autenticar=true">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input class="form-control" type="text" id="email" name="email" placeholder="E-mail">
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input class="form-control" type="password" id="senha" name="senha" placeholder="Senha">
      </div>
      <button type="submit" class="btn btn-primary">
        <i class="fa fa-sign-in" aria-hidden="true"></i> Log In
      </button>
    </form>
  </div>

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="js/vendor/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>