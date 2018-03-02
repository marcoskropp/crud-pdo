<?php

class Usuario{

  private $nome;
  private $senha;
  private $id;

  function getId(){
    return $this->id;
  }
  function setId($id){
    $this->id = $id;
  }

  function getNome() {
    return $this->nome;
  }
  function getSenha() {
    return $this->senha;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }
  function setSenha($senha) {
    $this->senha = $senha;
  }

}

?>
