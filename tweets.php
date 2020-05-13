<?php 
include_once("conexao.php");
include_once("login.php");//para pegar o id usuario
//require 'conexao.php';
$con = getConexao();

        
if(isset($_POST['meu_tweet']) && $_POST['meu_tweet'] == "Tweetar"){

        $id = $_SESSION['sessao_id'];   
        $tweet = $_POST['tweet'];
        
        //echo $_SESSION['sessao_id'];//esse é o id do usuario logado
        
        $inserirTweet = $con -> prepare("INSERT INTO post (id, tweet) VALUES (:id, :tweet)");
        $inserirTweet -> bindParam(':id', $id);
        //$inserirTweet -> bindValue(':idPost', $idPost);
        $inserirTweet -> bindParam(':tweet', $tweet);
        if($inserirTweet -> execute()){
                header("Refresh:1; url = menuUsuario.php"); //recarrega a página ao enviar tweet
        }

}


?>

