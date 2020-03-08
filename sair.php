<?php

session_start();

// finaliza a sessão
unset($_SESSION['sessao_id']);

session_destroy();
 
// retorna para a index.php
header('Location: index.php');exit;

?>