<?php
include 'classes/Conexao.class.php';
session_start();
if (!(isset($_SESSION['nome']))) {
  header('Location: index.php');
}
if (isset($_GET['sair'])) {
  session_destroy();
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Página Pessoal</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
  <link rel="icon" href="icone.ico" type="image/x-icon" />
</head>
<link rel="stylesheet" href="stylePrincipal.css">
<body>
  <div class="page-header" align="center" >
    <h1> Página Admin</h1>
    <?= "Bem Vindo " .($_SESSION['nome']);?>
  </div>
  <center>
  <a class="btn btn-success" href="admin.php?sair" role="button">Sair</a></center>
</body>
<script src="bootstrap/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>
