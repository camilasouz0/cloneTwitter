<?php

include './connection.php';

$conexao = getConnection();

$sql = 'INSERT INTO info_pilotos (piloto, veiculo) VALUES (:piloto, :veiculo)';

$stmt = $conexao->prepare($sql);

$piloto = $_POST['piloto'];
$veiculo= $_POST['veiculo'];


$stmt->bindParam(':piloto', $piloto);
$stmt->bindParam(':veiculo', $veiculo);

if($stmt->execute()){
    echo 'Ai sim, cadastrou o piloto com sucesso';
}else{
    echo 'Ih rapaz, n cadastrou o piloto';
}


?>