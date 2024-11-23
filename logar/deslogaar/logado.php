<?php
session_start();

// Simulação de um usuário autenticado (geralmente você usaria um banco de dados)
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['username'];

// Dados do usuário (essa informação viria de um banco de dados, aqui usamos um exemplo simples)
$user_data = [
    'name' => 'João da Silva',
    'email' => 'joao@example.com',
    'address' => 'Rua Exemplo, 123',
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h2>Bem-vindo, <?php echo $username; ?>!</h2>
        <form action="processa.php" method="POST">
            <div class="field">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="<?php echo $user_data['name']; ?>" required>
            </div>
            <div class="field">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $user_data['email']; ?>" required>
            </div>
            <div class="field">
                <label for="address">Endereço:</label>
                <input type="text" id="address" name="address" value="<?php echo $user_data['address']; ?>" required>
            </div>
            <button type="submit">Salvar alterações</button>
        </form>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
