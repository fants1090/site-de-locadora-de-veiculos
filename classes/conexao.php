<?php

$host = "localhost:8080";
$usuario = "root";
$senha = "";
$bd = "test;

$mysql = new mysql($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>