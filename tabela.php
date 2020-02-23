<?php  require_once "./php/conexao.php";
$exibirTodos = $con->prepare("SELECT * FROM usuario");
if($exibirTodos->execute()){
	$usuarios = $exibirTodos->fetchAll(PDO::FETCH_ASSOC);	}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <table>
        <tr>
        <td>Id</td>
        <td>Email</td>
        <td>Senha</td>
         </tr>
        <?php
        
     foreach($usuario as $exibir){
        echo '<tr>';
        echo   '<td>'. $exibir['id'] . '</td>';
        echo   ' <td>'. $exibir['email']. '</td>';
        echo   "<td>". $exibir['senha']. "</td>";
        echo '</tr>';
         };
        ?>
        </table>
    </body>
</html>