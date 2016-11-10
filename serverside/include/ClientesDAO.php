<?php

/**
 * Created by PhpStorm.
 * User: Mrluke
 * Date: 28/10/2016
 * Time: 11:17
 */
class ClientesDAO {

    private $conexao;

    function __construct(){
        require_once "CriaConexao.php";

        $db = new CriaConexao();
        $this->conexao = $db->conectar();
    }

    function __destruct(){

    }

    public function exibirListaClientes(){
        $sql_script = "SELECT * FROM usuarios";
        $result = $this->conexao->query($sql_script);

        if($result && $result->num_rows > 0){
            while($linha = $result->fetch_assoc()){
                echo "<tr class='odd gradeX'>";
                echo "<td align=center>" .$linha['id']. "</td>";
                echo "<td>" .$linha['nome']. "</td>";
                echo "<td>" .$linha['email']. "</td>";
                echo "<td class='center' align=center>";
                echo "<button class='btn btn-warning' type='submit'>";
                echo "<i class='glyphicon glyphicon-pencil'></i>";
                echo "</button> &nbsp;";
                echo "<button class='btn btn-danger' type='submit'>";
                echo "<i class='glyphicon glyphicon-trash'></i>";
                echo "</button>";
                echo "</td>";
                echo "</tr>";

                

            }
            $contador = $result->num_rows;
            echo "</tbody>";
            echo "</table><hr/>";
            echo "<div>";
            echo "Total de Clientes: <strong>" . $contador . "</strong>";
            echo "</div>";
        }
    }
        //var_dump($this->teste); die();
}