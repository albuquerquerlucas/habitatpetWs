<?php

require_once "include/PlantasDAO.php";
$db = new PlantasDAO();

$db->exibirListaJson();
?>