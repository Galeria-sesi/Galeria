<?php
require 'connect.php';


$conn = $conn1;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM tb_upload";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    
    echo "<h1>Uploaded Images</h1>";
    while ($row = $result->fetch_assoc()) {
        $imagePath = 'img/' . $row['image'];
        echo "<div>";
        echo "<p>Name: " . htmlspecialchars($row['name']) . "</p>";
        echo "<img src='" . htmlspecialchars($imagePath) . "' alt='" . htmlspecialchars($row['name']) . "' width='200'>";
        echo "</div><br>";
    }
} else {
    echo "<p>No images found.</p>";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Data</title>
</head>
<body>
    <a href="test.php">Upload More Images</a>
</body>
</html>
