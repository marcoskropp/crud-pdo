<?php

class Conexao {

    private $usuario = "root";
    private $senha = "toor";
    private $caminho = "127.0.0.1";
    private $banco = "pdo";
    private $con;

    public function __construct() {

		try {
			$this->con = new PDO("mysql:dbname={$this->banco};host={$this->caminho}", "root", "toor");
		} catch(PDOException $e) {
			echo "FALHA: ".$e->getMessage();
		}

	}

  public function getCon() {
      return $this->con;
  }
}
?>
