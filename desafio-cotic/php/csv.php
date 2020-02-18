<?php

require_once "banco.php";

header("Content-type: text/csv");

$exibirTodos = $con->prepare("SELECT * FROM usuarios");

if($exibirTodos->execute()){
	$usuarios = $exibirTodos->fetchAll(PDO::FETCH_ASSOC);	
}

$dados = '';

foreach($usuarios as $info){
	$dados.= '"'. $info['id']. '",';
	$dados.= '"'. $info['email']. '",';
	$dados.= '"'. $info['senha']. '",';

}

echo $dados;

?>