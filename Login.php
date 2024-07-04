<?php
// Inclua a conexão com o banco de dados
include 'ligacao.php';

// Verifique se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtenha os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Realize a verificação na tabela 'utilizadores' (substitua 'utilizadores' pelo nome real da sua tabela)
    $sql = "SELECT * FROM utilizadores WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Se a consulta retornar algum resultado, o login é bem-sucedido
    if ($result->num_rows > 0) {
        echo "Login bem-sucedido!";
        // Você pode redirecionar o usuário para a página desejada após o login
    } else {
        echo "Login falhou. Verifique suas credenciais.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <h2>Login</h2>
   <form method="post" action="">
      <label for="username">Nome de Utilizador:</label>
      <input type="text" name="username" required>

      <label for="password">Palavra-passe:</label>
      <input type="password" name="password" required>

      <button type="submit">Entrar</button>
   </form>
</body>
</html>
