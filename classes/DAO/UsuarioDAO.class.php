<?php
class UsuarioDAO extends Conexao{

  private $con;
  public function __construct() {
    $this->con = new Conexao();
  }

  public function login($usuario){
    $sql = $this->con->getCon()->prepare("SELECT * FROM usuario WHERE nomeUsuario = :nome AND senhaUsuario = :senha");
    $sql->bindValue(":nome", $usuario->getNome());
    $sql->bindValue(":senha", $usuario->getSenha());
    $sql->execute();
    if($sql->rowCount() == 1){
      return true;
    }
  }

  public function inserir($usuario) {
    $sql = $this->con->getCon()->prepare("INSERT INTO usuario(nomeUsuario,senhaUsuario) VALUES (?,?)");
    $sql->bindValue(1, $usuario->getNome());
    $sql->bindValue(2, $usuario->getSenha());
    return $sql->execute();
  }

  public function buscar(){
    $sql = $this->con->getCon()->prepare("SELECT * FROM usuario");
    $sql->execute();
    return $sql;

  }

  public function alterar($usuario){
    $sql = $this->con->getCon()->prepare("UPDATE usuario SET nomeUsuario = :nome, senhaUsuario = :senha WHERE idUsuario = :id");
    $sql->bindValue(":nome", $usuario->getNome());
    $sql->bindValue(":senha", $usuario->getSenha());
    $sql->bindValue(":id", $usuario->getId());
    return $sql->execute();
  }

  public function excluir($usuario){
    $sql = $this->con->getCon()->prepare("DELETE FROM usuario WHERE idUsuario = :id");
    $sql->bindValue(":id", $usuario->getId());
    return $sql->execute();
  }
}

?>
