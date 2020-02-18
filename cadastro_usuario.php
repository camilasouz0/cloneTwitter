<?php
//     include_once("conexao.php");
//     $nome_usuario = $_POST['nome_usuario'];
//     $email_usuario = $_POST['email_usuario'];
//     echo "$nome_usuario - $email_usuario";

//     $result_usuario = "INSERT INTO usuarios(nome. email) VALUES" ('$nome', '$email');
//     $resultado_usuario = mysqli_query($conexao, $result_usuario);
//         if(mysqli_affected_rows($conexao) != 0){
//             echo "
//                     <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/twitter/cadastro.php'>"; 
//                 "Usuario cadastrado com Sucesso.";
//             }else{
//                 echo "
//                     <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/twitter/cadastro.php'>"; 
//                     "O Usuario não foi cadastrado com Sucesso.";   
//             }

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
