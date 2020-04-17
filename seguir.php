<?php 
include_once("conexao.php");
$con = getConexao();

if(isset($_POST['seguir'])){
        $id = $_SESSION['sessao_id'];
        $idSegue = ($_SESSION['naoLogadoo']-1);

        //echo $_SESSION['sessao_id'];//esse é o id do usuario logado
        
        $seguirUsuario = $con -> prepare("INSERT INTO seguirUsuario (id, idSegue) VALUES (:id, :idSegue)");
        $seguirUsuario -> bindParam(':id', $id);
        $seguirUsuario -> bindParam(':idSegue', $idSegue);
        
        if($seguirUsuario -> execute()){
                header("Refresh:1; url = perfilUsuario.php"); //recarrega a página ao seguir usuario
                        
        }else{
                echo "erro";
                echo $idSegue;

        }
        
}
?>