<?php
/*	Recebe os dados de login.
*	Lucas Albuquerque
*/

require_once 'include/UsuariosDAO.php';
$db = new UsuariosDAO();

$response = array("error" => FALSE);

if (isset($_POST['email']) && isset($_POST['senha'])) {
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$usuario = $db->getUsuarioPorEmaileSenha($email, $senha);
	
	if ($usuario != false) {
        
        $response["error"] = FALSE;
        $response["idUnico"] = $usuario["id_unico"];
        $response["usuario"]["nome"] = $usuario["nome"];
        $response["usuario"]["email"] = $usuario["email"];
        $response["usuario"]["data_de_criacao"] = $usuario["data_de_criacao"];
        $response["usuario"]["data_de_atualizacao"] = $usuario["data_de_atualizacao"];
        echo json_encode($response);
    } else {
        
        $response["error"] = TRUE;
        $response["error_msg"] = "Dados de login não encontrados. Tente novamente!";
        echo json_encode($response);
    }
} else {
	$response["error"] = TRUE;
    $response["error_msg"] = "Parâmetros obrigatórios (name, email or password) perdidos!";
    echo json_encode($response);
}

?>