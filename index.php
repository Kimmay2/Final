<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=kimberl2_ace_db', 'kimberl2_ace_user', 'myP4sswOrd!');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}



include 'home/home.html.php';