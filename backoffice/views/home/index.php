<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>Home - Administrativo</title>

  <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
  <link rel="stylesheet" href="../assets/css/vendor/normalize.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/bootstrap-theme.min.css">
  <link rel="stylesheet" href="../assets/css/vendor/font-awesome.min.css">
</head>
<body>
  <?php require_once('../../inc/session.php'); ?>
  <?php require_once('../../inc/database.php'); ?>
  <?php 
  echo "Olá " . $_SESSION["admin"];
  echo "<BR><BR>";
  ?>
  <a href="../../inc/logoff.php">Log off</a>
</body>
</html>