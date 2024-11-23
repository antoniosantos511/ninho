<?php
$servername = "localhost";
$username = "meu_usuario";
$password = "minha_senha";
$dbname = "bd_fla";

// Criar conexão
$conn = mysqli_connect ($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


?>