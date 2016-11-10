<?php

require_once "include/ProdutosDAO.php";
$db = new ProdutosDAO();

$db->exibirListaJson();
?>