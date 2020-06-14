<?php

session_start();

// finaliza a sessão
unset($_SESSION['sessao_id']);

session_destroy();
 
// retorna para a inicio.php
header('Location: inicio');exit;

?>