<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria - Contatos</title>
    <link rel="stylesheet" href="contatos.css">
</head>

<body>

    <div class="header">
        <div class="logo">
            <img src="img/logo.png" alt="Logo da Galeria">
        </div>
        <div class="user-icon">
            <a href="login.php">
                <img src="img/aizen.png" alt="Usuário">
            </a>
        </div>
    </div>

    <div class="container">
        <!-- Texto Redes Sociais -->
        <div class="socials">
            <div class="arrow">
                <img src="img/seta.png" alt="Seta">
            </div>
        </div>

        <!-- Botões de Instagram e Contato -->
        <div class="buttons">
            <a href="#" class="button instagram">
                <div class="icon">
                    <img src="img/logo do ig.png" alt="Instagram">
                </div>
                <span>TERCEIRAO.SESIVASCO</span>
            </a>
            <a href="tel:+558198764532" class="button contact">
                <span>CONTATO: (81)9876-4532</span>
            </a>
        </div>
    </div>
</body>

</html>
