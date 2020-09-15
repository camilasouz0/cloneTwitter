<?php 
include_once("conexao.php");
/* include_once("../pages/login.php"); *///para pegar o id usuario
//require 'conexao.php';
$con = getConexao();

        
if($_GET["idPost"]){

        $idUser = $_SESSION['sessao_id'];
        $idPost = $_GET["idPost"];
        /* $idUser= $_POST['like']; */
        
        $darLike = $con -> prepare("INSERT INTO likePost (idUser, idPost) VALUES (:idUser, :idPost)");
        $darLike -> bindParam(':idUser', $idUser);
        $darLike -> bindParam(':idPost', $idPost);
        if($darLike -> execute()){
                $resultPost = $con->query("SELECT COUNT(idPost) FROM likePost");
                $resultTweet = $con->query("SELECT COUNT(idTweet) FROM post");
                $row1 = $resultPost->fetch(PDO::FETCH_ASSOC);
                $row2 = $resultTweet->fetch(PDO::FETCH_ASSOC);

                while ($row1['COUNT(idPost)'] < $row2['COUNT(idTweet)']) {
                        
                        $postSemLike = $con -> prepare("INSERT INTO likePost (idUser, idPost) VALUES (0, 0)");
                        $postSemLike -> bindValue(':idUser', 0);
                        $postSemLike -> bindValue(':idPost', 0);
                        $postSemLike -> execute();
                }
                header("Refresh:1; url = menuUsuario");
        }else{
                echo'erro';
        }

}


?>