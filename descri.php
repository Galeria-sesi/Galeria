<?php
session_start();
include("connect.php");

// Verifica se o parâmetro image está presente na URL
if (!isset($_GET['image']) || !isset($_GET['description'])) {
    die("Parâmetros necessários não fornecidos.");
}

// Obtém os parâmetros da URL e sanitiza
$imagePath = htmlspecialchars($_GET['image']);
$description = htmlspecialchars($_GET['description']);

// O nome pode ser obtido diretamente da imagem (não é necessário buscar no banco de dados)
$name = pathinfo($imagePath, PATHINFO_FILENAME);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <link rel="stylesheet" href="style4.css?v=1.1">
</head>

<body>
<div class="header">
    <div class="logo">
        <img src="./img/logo.png" alt="Logo">
    </div>
    <div class="user-icon">
        <a href="login.php">
            <img src="./img/aizen.png" alt="Usuário">
        </a>
    </div>
</div>

<div class="description">
    <h2><?php echo $name; ?></h2>
    <img src="<?php echo $imagePath; ?>" alt="<?php echo $name; ?>">
    <p><?php echo $description; ?></p>
    <button class="more-button">+</button>
</div>

<div class="footer">
<a href="contatos.php" class="add-btn">REDES SOCIAIS</a>
    <a href="test.php" class="add-btn">ADICIONAR IMAGEM</a>
    <a href="sobrenos.php" class="add-btn">SOBRE NÓS</a>
</div>

<script src="script.js"></script>
</body>
</html>
