<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "sistema_recuperacao");
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Verificar se o email existe
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $token = bin2hex(random_bytes(16));
        $stmt->close();

        // Inserir token no banco
        $stmt = $conn->prepare("INSERT INTO tokens_recuperacao (email, token, expiracao) VALUES (?, ?, ?)");
        $expiracao = date("Y-m-d H:i:s", strtotime("+1 hour"));
        $stmt->bind_param("sss", $email, $token, $expiracao);
        $stmt->execute();

        // Enviar email
        $link = "http://localhost/recuperar-senha/php/redefinir_senha.php?token=$token";
        $mensagem = "Clique no link para redefinir sua senha: $link";

        if (mail($email, "Recuperação de Senha", $mensagem)) {
            echo "Link de recuperação enviado!";
        } else {
            echo "Erro ao enviar email.";
        }
    } else {
        echo "Email não encontrado.";
    }

    $stmt->close();
    $conn->close();
}
?>
