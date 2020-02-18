<?php

require_once "banco.php";

header('Content-Type: application/json');


$exibirTodos = $con->prepare("SELECT * FROM usuarios");

if($exibirTodos->execute()){
	$usuarios = $exibirTodos->fetchAll(PDO::FETCH_ASSOC);	
}

echo  json_encode($usuarios);


?>