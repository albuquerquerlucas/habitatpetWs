<?php
header("Content-Type:" . "text/plain");
class PeixesDAO{

	public $conexao;

	function __construct(){
		require_once "include/CriaConexao.php";

		$db = new CriaConexao();
		$this->conexao = $db->conectar();
	}

	public function inserir($nome_peixe, $nome_peixe_cientifico, $descricao_peixe, $alimentacao, $ph, $temperatura, $tamanho, $posicao_aquario, $tipo, $status, $foto_peixe){

		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto_peixe["name"], $ext);
 
    	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    	$caminho_imagem = "imgs/iPeixes/" . $nome_imagem;
 
		move_uploaded_file($foto_peixe["tmp_name"], $caminho_imagem);

		$script_sql = "INSERT INTO peixes(nome_peixe, nome_peixe_cientifico, descricao_peixe, alimentacao, ph, temperatura, tamanho, posicao_aquario, tipo, status, foto_peixe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->conexao->prepare($script_sql);
		$stmt->bind_param("sssssssssss", $nome_peixe, $nome_peixe_cientifico, $descricao_peixe, $alimentacao, $ph, $temperatura, $tamanho, $posicao_aquario, $tipo, $status, $nome_imagem);
		$stmt->execute();
		$stmt->close();
		$id = $this->conexao->insert_id;
    	$jsonRetorno = array("id"=>$id);
    	header("Location: ../peixesph.php");
    	//echo json_encode($jsonRetorno);
	}

	public function exibirLista(){

		// Implementar pra versão Web...
	}

	public function exibirListaJson(){

		$jsonArray = array();
		$sql_script = "SELECT * FROM peixes ORDER BY nome_peixe";
		$result = $this->conexao->query($sql_script);

		//$caminho_imagem = "http://192.168.25.13:80/habitatpetWs/serverside/imgs/iPeixes/";	// Caminho House
		$caminho_imagem = "http://10.54.108.183:80/peixesWs/iPeixes/"; 	// Caminho FA7

		if($result && $result->num_rows > 0){
			while($linha = $result->fetch_assoc()){
				$jsonLinha = array(
					"id"				=> $linha["id"],
					"nome"				=> $linha['nome_peixe'],
					"nomeCientifico"	=> $linha['nome_peixe_cientifico'],
					"descricao"			=> $linha['descricao_peixe'],
					"alimentacao"		=> $linha['alimentacao'],
					"ph"				=> $linha['ph'],
					"temperatura"		=> $linha['temperatura'],
					"tamanho"			=> $linha['tamanho'],
					"posicaoNoAquario"	=> $linha['posicao_aquario'],
					"tipo"				=> $linha['tipo'],
					"status"			=> $linha['status'],
					"fotoPeixe"			=> $caminho_imagem . $linha["foto_peixe"]
				);
				$jsonArray[] = $jsonLinha;
			}
		}

		echo json_encode($jsonArray, JSON_PRETTY_PRINT);

	}
}
?>