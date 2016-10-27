<?php

require_once "include/UsuariosDAO.php";
$db = new UsuariosDAO();

$db->exibirLista();
?>
