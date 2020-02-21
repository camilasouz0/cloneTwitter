<?php

include './connection.php';

$conexao = getConnection();

$sql = 'INSERT INTO info_usuario (usuario, email) VALUES (:usuario, :email)';

$stmt = $conexao->prepare($sql);

$piloto = $_POST['usuario'];
$veiculo= $_POST['email'];


$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':email', $email);

if($stmt->execute()){
    echo 'Cadastro realizado com sucesso';
}else{
    echo 'Falha';
}
 ?>
