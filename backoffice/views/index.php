<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>Home - Backoffice</title>

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
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Backoffice</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php $nome = explode(" ", $_SESSION["usuario"] -> nome);?>
                <i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> <?=$nome[0];?> <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="../inc/logoff.php"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Sair</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/vendor/bootstrap.min.js"></script>
</body>
</html>