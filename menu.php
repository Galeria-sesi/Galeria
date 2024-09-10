<?php
session_start();
include("connect.php");

$conn = $conn1;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM tb_upload";
$result = $conn->query($query);

$images = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = [
            'name' => htmlspecialchars($row['name']),
            'path' => 'img/' . htmlspecialchars($row['image']),
            'description' => htmlspecialchars($row['description'])
        ];
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Arte</title>
    <script>
        function redirecionar(imagePath, description) {
            // Redireciona para a página de descrição e passa os parâmetros na URL
            window.location.href = 'descri.php?image=' + encodeURIComponent(imagePath) + '&description=' + encodeURIComponent(description);
        }
    </script>
    <link rel="stylesheet" href="./style2.css?v=1.1">
</head>

<body>
<div class="header">
    <div class="logo">
        <img src="./img/logo.png" alt="Logo">
    </div>
    <div class="user-icon">
    <a id="user-link">
        <img src="./img/aizen.png" alt="Usuário">
    </a>
</div>
</div>

<div class="gallery-scroll-container">
    <div class="gallery-items">
        <?php foreach ($images as $image): ?>
            <div class="gallery-item" data-title="<?php echo $image['name']; ?>" data-img-src="<?php echo $image['path']; ?>" data-description="<?php echo $image['description']; ?>">
                <img src="<?php echo $image['path']; ?>" alt="<?php echo $image['name']; ?>" onclick="redirecionar('<?php echo $image['path']; ?>', '<?php echo $image['description']; ?>')">
                <p><?php echo $image['name']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="footer">
<a href="contatos.php" class="add-btn">REDES SOCIAIS</a>
    <a href="test.php" class="add-btn">ADICIONAR IMAGEM</a>
    <a href="sobrenos.php" class="add-btn">SOBRE NÓS</a>
</div>

<script src="script.js"></script>
</body>
</html>
