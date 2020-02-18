<?php

define( 'host', '10.1.11.152' );
define( 'user', 'web' );
define( 'password', 'coyote' );
define( 'database', 'desafio-nicoly');


try
{
    $con = new PDO( 'mysql:host=' . host . ';dbname=' . database, user, password );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}

if($_POST['email']){
$email = $_POST['email'];
$senha = $_POST['senha'];

$inserirBanco = $con -> prepare("INSERT INTO usuarios(email, senha) VALUES ('$email', '$senha')");
$inserirBanco -> bindParam(':email', $email);
$inserirBanco -> bindParam(':senha', $senha);
$inserirBanco -> execute();

}






?>