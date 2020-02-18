
<?php

include './connection.php';


$conexao = getConnection();

$sql = "SELECT * FROM info_pilotos";

$stmt = $conexao->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();

foreach($result as $value){
    echo 'Indice: '.$value['id'].'<br>';
    echo 'Nome do piloto: '.$value['piloto'].'<br>';
    echo 'Veiculo: '.$value['veiculo'].'<br><br><br>';
}
?>


