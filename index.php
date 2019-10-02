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
    <h1> Login</h1>
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
          <form name="formAcessar" method="post">
            <div class="row">
              <div class="col-md-6">
                Nome <input type="text" name="nome" required class="form-control"/>
              </div>
              <div class="col-md-6">
                Senha <input type="password" name="senha" required class="form-control"/>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" name="acessar" value="Acessar" class="btn btn-success"/>
                <a class="btn btn-primary" href="cadastra.php" role="button">Cadastrar</a>
                <a class="btn btn-warning" href="altera.php" role="button">Alterar</a>
                <a class="btn btn-danger" href="deleta.php" role="button">Deletar</a>
                <br>
              </div>
            </div>
          </form>
          <br>
          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Senha</th>
                  </tr>
                </thead>
                <?php foreach ($usuarioDAO->buscar() as $row) { ?>
                  <tbody>
                    <tr>
                      <td><?= $row["idUsuario"] ?></td>
                      <td><?= $row["nomeUsuario"] ?></td>
                      <td><?= $row["senhaUsuario"] ?></td>
                    </tr>
                  </tbody>
                  <?php  } ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    if (isset($_POST["acessar"])) {
      $usuario->setNome(addslashes($_POST['nome']));
      $usuario->setSenha(addslashes($_POST['senha']));
      if($usuarioDAO->login($usuario) == true){
        session_start();
        $_POST['nome'] = $usuario->getNome();
        $_POST['senha'] = $usuario->getSenha();
        header('location: ./admin.php');
      }else{ ?>
        <script>
        alert("Usuario ou Senha incorretos!");
        </script>
        <?php
      }
    }
    ?>
    <script src="/bootstrap/jquery-1.11.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>
