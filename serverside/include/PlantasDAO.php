<?php
header("Content-Type:" . "text/plain");
class PlantasDAO{

	public $conexao;

	function __construct(){
		require_once "include/CriaConexao.php";
		require_once "include/ConfiguracaoRotas.php";

		$db = new CriaConexao();
		$this->conexao = $db->conectar();
	}

	public function inserir($nome_planta, $nome_planta_cientifico, $crescimento, $plantio, $posicao_aquario, $ph, $temperatura, $tamanho, $substrato_fertil, $co2, $suporta_emersao, $status, $foto_planta){

		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto_planta["name"], $ext);
 
    	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    	$caminho_imagem = "imgs/iPlantas/" . $nome_imagem;
 
		move_uploaded_file($foto_planta["tmp_name"], $caminho_imagem);

		$script_sql = "INSERT INTO plantas(nome_planta, nome_planta_cientifico, crescimento, plantio, posicao_aquario, ph, temperatura, tamanho, substrato_fertil, co2, suporta_emersao, status, foto_planta) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->conexao->prepare($script_sql);
		$stmt->bind_param("sssssssssssss", $nome_planta, $nome_planta_cientifico, $crescimento, $plantio, $posicao_aquario, $ph, $temperatura, $tamanho, $substrato_fertil, $co2, $suporta_emersao, $status, $nome_imagem);
		$stmt->execute();
		$stmt->close();
		$id = $this->conexao->insert_id;
    	$jsonRetorno = array("id"=>$id);
		header("Location: ../plantasph.php");
    	//echo json_encode($jsonRetorno);
	}

	public function exibirLista(){

		// Implementar pra versão Web...
	}

	public function exibirListaJson(){

		$jsonArray = array();
		$sql_script = "SELECT * FROM plantas ORDER BY nome_planta";
		$result = $this->conexao->query($sql_script);

		$caminho_imagem = "http://". R_IP . "/" . R_IPLANTAS;

		if($result && $result->num_rows > 0){
			while($linha = $result->fetch_assoc()){
				$jsonLinha = array(
					"id"				=> $linha["id"],
					"nome"				=> $linha['nome_planta'],
					"nomeCientifico"	=> $linha['nome_planta_cientifico'],
					"crescimento"		=> $linha['crescimento'],
					"plantio"			=> $linha['plantio'],
					"posicaoNoAquario"	=> $linha['posicao_aquario'],
					"ph"				=> $linha['ph'],
					"temperatura"		=> $linha['temperatura'],
					"tamanho"			=> $linha['tamanho'],
					"substratoFertil"	=> $linha['substrato_fertil'],
					"co2"				=> $linha['co2'],
					"suportaEmersao"	=> $linha['suporta_emersao'],
					"status"			=> $linha['status'],
					"fotoPlanta"		=> $caminho_imagem . $linha["foto_planta"]
				);
				$jsonArray[] = $jsonLinha;
			}
		}

		echo json_encode($jsonArray, JSON_PRETTY_PRINT);

	}
}
?>