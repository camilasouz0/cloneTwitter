<?php
/**
*
* @return \PDO
*/


function getConnection(){
    $dsn = 'mysql:host=10.1.11.152; dbtwitter; charset=utf8';
    $user = 'root';
    $pass = 'coyote';
 
    try{
        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    } catch(PDOException $e){
        echo 'Erro: '.$e->getMessage();
    }
//teste
}
?>