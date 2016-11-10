<?php

require_once "include/PeixesDAO.php";
$db = new PeixesDAO();

$response = array("error" => FALSE);

if($_POST['salvar']){

	$nome_peixe = $_POST['nome'];
	$nome_peixe_cientifico = $_POST['nomeCientifico'];
	$descricao_peixe = $_POST['descricao'];
	$alimentacao = $_POST['alimentacao'];
	$ph = $_POST['ph'];
	$temperatura = $_POST['temperatura'];
	$tamanho = $_POST['tamanho'];
	$posicao_aquario = $_POST['posicaoNoAquario'];
	$tipo = $_POST['tipo'];
	$status = $_POST['status'];
	$foto_peixe = $_FILES['fotoPeixe'];

	if(!empty($foto_peixe["name"])){

		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto_peixe["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	}

   	 	$db->inserir($nome_peixe, $nome_peixe_cientifico, $descricao_peixe, $alimentacao, $ph, $temperatura, $tamanho, $posicao_aquario, $tipo, $status, $foto_peixe);
	}else{
		$response["error"] = TRUE;
    	$response["error_msg"] = "Você deixou de preencher um dos campos!";
    	echo json_encode($response);
	} 
}
?>