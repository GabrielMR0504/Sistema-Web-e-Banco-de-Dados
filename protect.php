<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['cpf'])){
    die("Usuário não está logado.<p><a href=\"index.php\">Entrar</a></p>");
}
?>