<?php
header("Content-Type:" . "text/plain");
class ProdutosDAO{

	public $conexao;

	function __construct(){
		require_once "include/CriaConexao.php";
		require_once "include/ConfiguracaoRotas.php";

		$db = new CriaConexao();
		$this->conexao = $db->conectar();
	}

	public function inserir($nome_produto, $referencia, $descricao_produto, $marca, $modelo, $status, $foto_produto){

		preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto_produto["name"], $ext);
 
    	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    	$caminho_imagem = "imgs/iProdutos/" . $nome_imagem;
 
		move_uploaded_file($foto_produto["tmp_name"], $caminho_imagem);

		$script_sql = "INSERT INTO produtos(nome_produto, referencia, descricao_produto, marca, modelo, status, foto_produto) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$stmt = $this->conexao->prepare($script_sql);
		$stmt->bind_param("sssssss", $nome_produto, $referencia, $descricao_produto, $marca, $modelo, $status, $nome_imagem);
		$stmt->execute();
		$stmt->close();
		$id = $this->conexao->insert_id;
    	$jsonRetorno = array("id"=>$id);
    	header("Location: ../produtosph.php");
    	//echo json_encode($jsonRetorno);
	}

	public function exibirLista(){

		// Implementar pra versão Web...
	}

	public function exibirListaJson(){

		$jsonArray = array();
		$sql_script = "SELECT * FROM produtos ORDER BY nome_produto";
		$result = $this->conexao->query($sql_script);

		$caminho_imagem = "http://". R_IP . "/" . R_IPRODUTOS;

		if($result && $result->num_rows > 0){
			while($linha = $result->fetch_assoc()){
				$jsonLinha = array(
					"id"			=> $linha["id"],
					"nome"			=> $linha['nome_produto'],
					"referencia"	=> $linha['referencia'],
					"descricao"		=> $linha['descricao_produto'],
					"marca"			=> $linha['marca'],
					"modelo"		=> $linha['modelo'],
					"status"		=> $linha['status'],
					"fotoProduto"		=> $caminho_imagem . $linha["foto_produto"]
				);
				$jsonArray[] = $jsonLinha;
			}
		}

		echo json_encode($jsonArray, JSON_PRETTY_PRINT);

	}
}
?>