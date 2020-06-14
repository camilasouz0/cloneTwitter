<?php
    //$servidor = 'localhost';
    //$user = 'camilasouza';
    //$senha = 'camila123';
    //$banco = 'dbtwitter';

    //$conexao = mysqli_conect($servidor, $usuario, $senha, $banco);
    //$banco = mysqli_select($banco, $conexao);

session_start();

define( 'host', 'localhost' );
define( 'user', 'camilasouza' );
define( 'password', 'camila123' );
define( 'database', 'dbtwitter');

function getConexao(){
    global $con;
try
{
    $con = new PDO( 'mysql:host=' . host . ';dbname=' . database, user, password );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    //throw new PDOException($e);
}
return $con;
}
?>