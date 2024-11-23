<?php
include('C:/xampp/htdocs/ninho/login/conexao/conexao.php');

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);
$endereco = htmlspecialchars($_POST['endereco']);
$telefone = htmlspecialchars($_POST['telefone']);

$sql = "INSERT INTO dados_fla (nome, email, senha, endereco, telefone) VALUES ('$nome', '$email', '$senha', '$endereco', '$telefone')";


if ($conn->query($sql) === TRUE) {
    echo "Sócio adicionado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}



$conn->close();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Procesa Dados</title>
</head>


.
.
<div class="container-content">
    <button onclick="window.location.href='../CADASTRO/CADASTRO.HTML'">
        <div class="texto2">
            <h2>CONTA CRIADA COM SUCESSO!</h2>
            <p>ENTRAR</p>
        </div>
    </button>
</div>


<!--<body>

    <main>
        <h1>Dados Recebidos:</h1>
        <p>nome:</strong> <?php echo $nome; ?></p>
        <p>E-mail:</strong> <?php echo $email; ?></p>
        <p>senha:</strong> <?php echo $senha; ?></p>
        <p>telefone:</strong> <?php echo $telefone; ?></p>
        <p>endereço:</strong> <?php echo $endereco; ?></p>

        <a href="index.htm">voltar</a>
    </main>
</body>

</html>