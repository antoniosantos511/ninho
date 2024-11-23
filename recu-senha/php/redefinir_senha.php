<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $nova_senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $conn = new mysqli("localhost", "root", "", "sistema_recuperacao");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Validar token
    $stmt = $conn->prepare("SELECT email FROM tokens_recuperacao WHERE token = ? AND expiracao > NOW()");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $email = $result->fetch_assoc()['email'];

        // Atualizar senha
        $stmt = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $stmt->bind_param("ss", $nova_senha, $email);
        $stmt->execute();

        echo "Senha atualizada com sucesso!";
    } else {
        echo "Token inválido ou expirado.";
    }

    $stmt->close();
    $conn->close();
} else if (isset($_GET['token'])) {
    $token = $_GET['token'];
    echo '
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Redefinir Senha</title>
    </head>
    <body>
        <div class="container">
            <h1>Redefinir Senha</h1>
            <form method="POST">
                <input type="hidden" name="token" value="' . htmlspecialchars($token) . '">
                <label for="senha">Nova Senha:</label>
                <input type="password" id="senha" name="senha" required>
                <button type="submit">Redefinir Senha</button>
            </form>
        </div>
    </body>
    </html>';
}
?>
