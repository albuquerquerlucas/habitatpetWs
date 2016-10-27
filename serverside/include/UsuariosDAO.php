<?php
/*	Métodos de consulta ao banco.
*	Lucas Albuquerque
*/

class UsuariosDAO{

	private $conexao;

	function __construct(){
		require_once 'CriaConexao.php';

		$db = new CriaConexao();
		$this->conexao = $db->conectar();
	}

	function __destruct(){

	}

	public function salvarUsuario($nome, $email, $senha){

		$uuid = uniqid('', true);
		$hash = $this->hashSSHA($senha);
		$senha_criptografada = $hash["criptografia"];
		$range_criptografia = $hash["range_criptografia"];
		$script_sql = "INSERT INTO usuarios(id_unico, nome, email, senha_criptografada, range_criptografia, data_de_criacao) VALUES(?, ?, ?, ?, ?, NOW())";

		$statment = $this->conexao->prepare($script_sql);
		$statment->bind_param("sssss", $uuid, $nome, $email, $senha_criptografada, $range_criptografia);
		$result = $statment->execute();
		$statment->close();

		if($result){
			$statment = $this->conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
			$statment->bind_param("s", $email);
			$statment->execute();
			$usuario = $statment->get_result()->fetch_assoc();
			$statment->close();

			//$confirm = "Ok!";

			//header("Location: ../clientesph.php?confirm=".$confirm);
			header("Location: ../clientesph.php");
			return $usuario;
		}else{
			return false;
		}
	}

	public function getUserPorSenha($id){
		
	}

	public function getUsuarioPorEmaileSenha($email, $senha){

		$script_sql = "SELECT * FROM usuarios WHERE email = ?";
		$statment = $this->conexao->prepare($script_sql);
		$statment->bind_param("s", $email);

		if($statment->execute()){
			$usuario = $statment->get_result()->fetch_assoc();
			$statment->close();

			$range_criptografia = $usuario['range_criptografia'];
			$senha_criptografada = $usuario['senha_criptografada'];
			$hash = $this->verificaHashSSHA($range_criptografia, $senha);

			if($senha_criptografada == $hash){
				return $usuario;
			}
		}else{
			return NULL;
		}
	}

	public function verificaSeUsuarioExiste($email){

		$script_sql = "SELECT email FROM usuarios WHERE email = ?";
		$statment = $this->conexao->prepare($script_sql);
		$statment->bind_param("s", $email);
		$statment->execute();
		$statment->store_result();

		if($statment->num_rows > 0){
			$statment->close();
			return true;
		}else{
			$statment->close();
			return false;
		}
	}

	public function exibirLista(){
		$sql_script = "SELECT * FROM usuarios";
		$result = $this->conexao->query($sql_script);
		return $result;
	}

	public function hashSSHA($senha){

		$range_criptografia = sha1(rand());
		$range_criptografia = substr($range_criptografia, 0, 10);
		$criptografia = base64_encode(sha1($senha . $range_criptografia, true) . $range_criptografia);
		$hash = array("range_criptografia" => $range_criptografia, 'criptografia' => $criptografia);

		return $hash;
	}

	public function verificaHashSSHA($range_criptografia, $senha){

		$hash = base64_encode(sha1($senha . $range_criptografia, true) . $range_criptografia);

		return $hash;
	}
}
?>
