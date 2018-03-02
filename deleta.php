<?php
include 'classes/Conexao.class.php';
include 'classes/DAO/UsuarioDAO.class.php';
include 'classes/entidades/Usuario.class.php';
$usuarioDAO = new UsuarioDAO();
$usuario = new Usuario();
?>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Deletar</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
  <link rel="icon" href="icone.ico" type="image/x-icon" />
</head>
<body>
  <div class="page-header" align="center" >
    <h1>Login</h1>
    <h2> <small>Página Administrativa</small></h2>
  </div>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel-heading">
          Acesso ao painel de controle
        </div>
        <div class="panel-body">
          <form action="#" method="POST">
            <div class="row">
              <div class="col-md-6">
                Id  <input type="text" name="id"  required class="form-control"/>
              </div>
            </div>
            <br>
            <input type="submit" name="deletar" value="Deletar" class="btn btn-danger"/>
            <a class="btn btn-primary" href="index.php" role="button">Home</a>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>
  <?php
  if(isset($_POST['deletar'])){
    $usuario->setId($_POST['id']);
    $usuarioDAO->excluir($usuario);
    echo "<meta http-equiv = 'refresh' content='0'>";
  }
  ?>
