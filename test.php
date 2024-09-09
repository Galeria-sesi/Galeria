<?php
require 'connect.php';

$conn = $conn1; // Certifique-se de que o caminho está correto

// Verificar se o diretório de upload existe
if (!is_dir('img')) {
    mkdir('img', 0777, true);
}

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"]; // Captura a descrição
    if ($_FILES["image"]["error"] == 4) {
        echo "<script>alert('Image Does Not Exist');</script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        
        if (!in_array($imageExtension, $validImageExtension)) {
            echo "<script>alert('Invalid Image Extension');</script>";
        } else if ($fileSize > 1000000) {
            echo "<script>alert('Image Size Is Too Large');</script>";
        } else {
            // Define o novo nome da imagem baseado no nome fornecido pelo usuário
            $newImageName = preg_replace('/[^a-zA-Z0-9]/', '_', strtolower($name)) . '.' . $imageExtension;

            if (move_uploaded_file($tmpName, 'img/' . $newImageName)) {
                $query = "INSERT INTO tb_upload (name, image, description) VALUES ('$name', '$newImageName', '$description')";
                if (mysqli_query($conn, $query)) {
                    echo "<script>alert('Successfully Added'); document.location.href = 'index.php';</script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "<script>alert('Failed to Upload Image');</script>";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
    <link rel="stylesheet" href="style3.css?v=1.1">
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
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required value=""> <br>
        <label for="description">Description: </label>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea> <br><br>
        <label for="image">Image: </label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
</body>
</html>
