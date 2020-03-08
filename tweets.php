<?php 
include_once("conexao.php");
//require 'conexao.php';
$con = getConexao();

        
if(isset($_POST['botao']) && $_POST['botao'] == "enviar"){

        $tweet = $_POST['tweet'];     
        $inserirTweet = $con -> prepare("INSERT INTO postTweet (tweet) VALUES (:tweet)");
        $inserirTweet -> bindValue(':tweet', $tweet);

        if($inserirTweet -> execute()){
                header("Refresh:1; url = menu_usuario.php"); //recarrega a página ao enviar tweet
        }

}


?>

