<?php

require_once "include/PeixesDAO.php";
$db = new PeixesDAO();

$db->exibirListaJson();
?>