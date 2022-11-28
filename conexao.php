<?php

$hostname = "localhost";
$db = "teste1";
$user = "root";
$pass = "";

$mysqli = new mysqli($hostname, $user, $pass, $db);

if($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
    
