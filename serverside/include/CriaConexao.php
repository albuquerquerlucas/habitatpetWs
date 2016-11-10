<?php

class CriaConexao {

	private $conexao;

	public function conectar(){

		require_once "ConfiguracaoDb.php";

		$this->conexao = new mysqli(ENDERECO_DB, USUARIO_DB, SENHA_DB, NOME_BANCO_DB) or die ("Erro ao conectar-se...");

		return $this->conexao;
	}
}
?>