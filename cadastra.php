<?php
include 'classes/Conexao.class.php';
include 'classes/DAO/UsuarioDAO.class.php';
include 'classes/entidades/Usuario.class.php';
$usuarioDAO = new UsuarioDAO();
$usuario = new Usuario();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
</head>
<link rel="stylesheet" href="styleLogin.css">
<body>
  <div class="page-header" align="center" >
    <h1>Cadastro</h1>
    <h2> <small>Página de Cadastro</small></h2>
  </div>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Cadastro
        </div>
        <div class="panel-body">
          <form action="#" method="POST">
            <div class="row">
              <div class="col-md-6">
                Nome Completo <input type="text" name="nome" required class="form-control"/>
              </div>
              <div class="col-md-6">
                Senha: <input type="password" name="senha" required class="form-control"/>
              </div>
            </div>
            <br>
            <input type="submit" name="gravar" value="Gravar" class="btn btn-success"/>
            <a class="btn btn-primary" href="index.php" role="button">Home</a>
          </form>
          <div class="row">
          </div>
        </div>
        <?php
        if (isset($_POST['gravar'])) {
          $usuario->setNome($_POST['nome']);
          $usuario->setSenha($_POST['senha']);
          $usuarioDAO->inserir($usuario);
        }
        ?>
      </body>
      </html>
