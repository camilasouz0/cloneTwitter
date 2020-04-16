<?php 
include_once("conexao.php");
//require 'conexao.php';
$con = getConexao();
        
if(isset($_POST['seguir'])){
        
        $id = $_SESSION['sessao_id'];   
        $idSeguir = $_SESSION['naoLogadoo'];
        
        //echo $_SESSION['sessao_id'];//esse é o id do usuario logado
        
        $seguirUsuario = $con -> prepare("INSERT INTO seguirUsuario (id, idSeguir) VALUES (:id, :idSeguir)");
        $seguirUsuario -> bindParam(':id', $id);
        $seguirUsuario -> bindParam(':idSeguir', $idSeguir);
        
        if($seguirUsuario -> execute()){
                header("Refresh:1; url = perfilUsuario.php"); //recarrega a página ao seguir usuario
                echo"<script language='javascript' type='text/javascript'>
                alert('Usuario seguido com sucesso')</script>";
        }else{
            echo "erro";
            echo $idSeguir;
        }

}

//if(!$_SESSION['sessao_id']){
        //$quem = $con->prepare("SELECT * FROM usuario WHERE id <> 1");
        //$quem->execute();
       //while($ue = $quem->fetch(PDO::FETCH_ASSOC)){  
        //$_SESSION['naoLogadoo'] = $ue['id'];
      //}
    //}


?>