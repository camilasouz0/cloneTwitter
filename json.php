<?php

require_once "conexao.php";

header('Content-Type: application/json');


$exibirTodos = $con->prepare("SELECT * FROM usuario");

if($exibirTodos->execute()){
	$usuario = $exibirTodos->fetchAll(PDO::FETCH_ASSOC);	
}

echo  json_encode($usuario);


?>