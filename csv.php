<?php

require_once "conexao.php";

header("Content-type: text/csv");

$exibirTodos = $con->prepare("SELECT * FROM usuario");

if($exibirTodos->execute()){
	$usuario = $exibirTodos->fetchAll(PDO::FETCH_ASSOC);	
}

$dados = '';

foreach($usuario as $info){
	$dados.= '"'. $info['id']. '",';
	$dados.= '"'. $info['email']. '",';
	$dados.= '"'. $info['senha']. '",';

}

echo $dados;

?>