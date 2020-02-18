<?php

include './connection.php';


header('Content-Type: text/csv');


$conexao = getConnection();

$sql = "SELECT * FROM info_pilotos";

$stmt = $conexao->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

$tabela = "";

foreach($result as $value){
    $tabela .= $value['piloto'].",";
    $tabela .= $value['veiculo'].",";

}

echo $tabela;




?>