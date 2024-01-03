<?php

$mensagem = '';


  
// Conecte-se ao banco de dados
$host = "localhost";
$usuario = "root";
$senha_db = "admin";
$banco_de_dados = "mydb";


$conn = new mysqli($host, $usuario, $senha_db, $banco_de_dados);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}