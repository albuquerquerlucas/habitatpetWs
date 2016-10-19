<?php

require_once "include/PlantasDAO.php";
$db = new PlantasDAO();

$response = array("error" => FALSE);

if($_POST['salvar']){

	$nome_planta = $_POST['nomePlanta'];
	$nome_planta_cientifico = $_POST['nomeCientifico'];
	$crescimento = $_POST['crescimento'];
	$plantio = $_POST['plantio'];
	$posicao_aquario = $_POST['posicaoNoAquario'];
	$ph = $_POST['ph'];
	$temperatura = $_POST['temperatura'];
	$tamanho = $_POST['tamanho'];
	$substrato_fertil = $_POST['substrato'];
	$co2 = $_POST['co2'];
	$suporta_emersao = $_POST['supoertaEmersao'];
	$status = $_POST['status'];
	$foto_planta = $_FILES['fotoPlanta'];

	if(!empty($foto_planta["name"])){

		if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto_planta["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	}

   	 	$db->inserir($nome_planta, $nome_planta_cientifico, $crescimento, $plantio, $posicao_aquario, $ph, $temperatura, $tamanho, $substrato_fertil, $co2, $suporta_emersao, $status, $foto_planta);
	}else{
		$response["error"] = TRUE;
    	$response["error_msg"] = "Você deixou de preencher um dos campos!";
    	echo json_encode($response);
	} 
}
?>