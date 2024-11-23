<?php
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/x-icon" href="imagens00/000.png">
    <link rel="stylesheet" href="CADASTRO.CSS">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title>Tela Usuario logado</title>
</head>

<body>

    <header class="header">
        <div class="logo">
            <h1></h1>
        </div>
        <nav class="nav">
            <ul class="nav-list">
                <li>
                    <a href="historia/historia.html">HISTÓRIA</a>
                </li>
                <li>
                    <a href="titulos/titulos.html">TÍTULOS</a>
                </li>
                <li>
                    <a href="fotos/fotos.html">FOTOS</a>
                </li>
                <li>
                    <a href="zico/zico.html">ZICO</a>
                </li>

                <li>
                    <a><i class="fa-duotone fa-regular fa-user"></i><?php echo $nome; ?></a>
                </li>

            </ul>
        </nav>
    </header>

    <!-- INICIO CONTEUDO PRINCIPAL -->
    <main>
        <h2 class="title-forms"><u>Bem vindo(a),<?php echo $nome; ?></u>
        </h2>

        <div class="container-content">
            <a href="../recu-senha/index.html">
                <div class="texto">
                    <h2>GERENCIE SEUS DADOS</h2>
                    <p>Altere sua senha ou outras informações pessoais</p>
                </div>
            </a>
        </div>

        <div class="container-content">
            <a href="../index.html">
                <div class="texto2">
                    <h2>INICIO</h2>
                    <p>Pagina inicial </p>
                </div>
            </a>
        </div>

        <div class="container-content">
            <a href="../index.html">
                <div class="texto">
                    <h2>SAIR DA CONTA</h2>
                    <p></p>
                </div>
            </a>
        </div>

    </main>
</body>


<!--inicio do rodape (kaiky)-->
<footer class="rodape-superior">
</footer>

<footer class="rodape-inferior">
    <div class="flex">
        <nav class="menu-simplificado">
            <ul>
                <h2>Menu</h2>
            </ul>
            <ul>
                <li><a href="historia/historia.html">História</a></li>
                <li><a href="fotos/fotos.html">Fotos</a></li>
                <li><a href="titulos/titulos.html">Títulos</a></li>
                <li><a href="zico/zico.html">Zico</a></li>
            </ul>
        </nav>

        <nav class="copyright">
            <p>&copy; 2024 Por Dentro do Ninho</p>
        </nav>

        <div class="suporte">
            <h2>Suporte</h2>
            <p>Pordentrodoninho@contato.com.br</p>
            <p>+55 (21) 97295-5678</p>
        </div>
    </div>
</footer>
<!--fim do rodape (kaiky)-->

</html>