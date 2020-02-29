<?php 
include_once("conexao.php");
$con = getConexao();

if($_POST['meu_tweet']){
    //$idTweet = $_POST['idTweet'];	
    $id = $_POST['id'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $twittar = $_POST['twittar'];


    $enviartwittar = $con->prepare("INSERT INTO usuario (id, email,senha,twittar) VALUES ('$id','$email','$senha','$twittar')");
    $enviartwittar->bindParam(':twittar', $twittar);
    //$enviartwittar->execute();
    
    $enviartwittar->execute();
        echo 'envio realizado com sucesso';	
    }else{	        
        echo 'Falha';
    
}
?>