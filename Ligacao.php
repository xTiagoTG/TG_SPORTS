<?php
$servername = "localhost"; // ou o endereço IP do servidor MySQL, se não for local
$username = "root"; // ou o nome de usuário do MySQL
$password = ""; // senha do MySQL
$dbname = "tgsports"; // nome da base de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Exemplo de consulta SQL
$sql = "SELECT * FROM sua_tabela";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Fechar conexão
$conn->close();
?>
