<?php
require_once(__DIR__."/lib/autoload.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home - <?= (defined("SITE_TITLE")) ? SITE_TITLE : 'A Bloggr Site' ?></title>
</head>
<body>
  <?php
  if (!$auth->isLoggedIn()) {
  ?>
  <p>
    <a href="/login.php">Login</a>
  </p>
  <p>
    <a href="/register.php">Registrieren</a>
  </p>
  <?php
  }
  if ($auth->isLoggedIn()) {
  ?>
  <p>
    <a href="/logout.php">Logout</a>
  </p>
  <?php
  }
  ?>
</body>
</html>
