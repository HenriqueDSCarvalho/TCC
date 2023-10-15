<?php

//Conexao com o banco de dados
$host = "localhost";
$username = "root";
$password = "32265256";
$database = "superestoque";
$port = "3308";

$conn = mysqli_connect($host, $username, $password, $database, $port);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

?>