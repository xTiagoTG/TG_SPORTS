<?php
$servername = "";
$username = "root";
$password = "";
$dbname = "tgsports";

// Criar ligação
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar ligação    
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
