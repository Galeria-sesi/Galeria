<?php

$db1 = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'upload'
];

$db2 = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'name' => 'login'
];


function connectDB($dbConfig) {
    $conn = new mysqli($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['name']);
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados " . $dbConfig['name'] . ": " . $conn->connect_error);
    }
    return $conn;
}

// Conectando aos bancos de dados
$conn1 = connectDB($db1); // Para o banco de dados 'upload'
$conn2 = connectDB($db2); // Para o banco de dados 'login'
?>
