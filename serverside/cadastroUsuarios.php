<?php
/*	Recebe os dados de cadastro.
*	Lucas Albuquerque
*/

require_once 'include/UsuariosDAO.php';
$db = new UsuariosDAO();

$response = array("error" => FALSE);

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	//$senhaConfirm = $_POST['senhaConfirm'];

	if(!strcmp($senha,$senha)){

		if ($db->verificaSeUsuarioExiste($email)){
			
			$response["error"] = TRUE;
			$response["error_msg"] = "Usuário já cadastrado com o email: " . $email;
			echo json_encode($response);
		} else {
			$usuario = $db->salvarUsuario($nome, $email, $senha);
			
			if ($usuario){
				$response["error"] = FALSE;
	            $response["id_unico"] = $usuario["id_unico"];
	            $response["usuario"]["nome"] = $usuario["nome"];
	            $response["usuario"]["email"] = $usuario["email"];
	            $response["usuario"]["data_de_criacao"] = $usuario["data_de_criacao"];
	            $response["usuario"]["data_de_atualizacao"] = $usuario["data_de_atualizacao"];
	            echo json_encode($response);
			} else {
				$response["error"] = TRUE;
	            $response["error_msg"] = "Ocorreu um erro ao cadastrar o usuario!";
	            echo json_encode($response);
			}
		}
	}else{
		$response["error"] = TRUE;
   	 	$response["error_msg"] = "As senhas informadas nao correspondem!";
   	 	echo json_encode($response);
	}
} else {
	$response["error"] = TRUE;
    $response["error_msg"] = "Um dos parâmetros nao foi informado.";
    echo json_encode($response);
}
?>