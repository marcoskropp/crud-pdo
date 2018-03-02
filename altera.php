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
  <title>Login</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" />
  <link rel="icon" href="icone.ico" type="image/x-icon" />
</head>
<body>
  <div class="page-header" align="center" >
    <h1>Alterar</h1>
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
          <div class="row">
            <div class="col-md-12">
              <form action="#" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    Id <input type="text" name="id" required class="form-control"/>
                  </div>
                  <div class="col-md-6">
                    Nome Completo <input type="text" name="nome" required class="form-control"/>
                  </div>
                  <div class="col-md-6">
                    Senha: <input type="password" name="senha" required class="form-control"/>
                  </div>
                </div>
                <br>
                <input type="submit" name="alterar" value="Alterar" class="btn btn-warning"/>
                <a class="btn btn-primary" href="index.php" role="button">Home</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  if(isset($_POST['alterar'])){
    $usuario->setId($_POST['id']);
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha($_POST['senha']);
    $usuarioDAO->alterar($usuario);
  }
  ?>
  <script src="/bootstrap/jquery-1.11.3.min.js"></script>
  <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
