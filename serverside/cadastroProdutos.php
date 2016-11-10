<?php
require_once "include/ProdutosDAO.php";
$db = new ProdutosDAO();

$response = array("error" => FALSE);

if($_POST['salvar']){

	$nome_produto = $_POST['nome'];
	$referencia = $_POST['referencia'];
	$$descricao_produto = $_POST['descricao'];
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$status = $_POST['status'];
	$foto_produto = $_FILES['fotoProduto'];

	if(!empty($foto_produto["name"])){

		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto_produto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	}

   	 	$db->inserir($nome_produto, $referencia, $$descricao_produto, $marca, $modelo, $status, $foto_produto);
	}else{
		$response["error"] = TRUE;
    	$response["error_msg"] = "Você deixou de preencher um dos campos!";
    	echo json_encode($response);
	} 
}
?>