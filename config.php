<?php
$_ENV = parse_ini_file('.env');
if (!$_ENV) {
    die("Ha ocurrido un error. Asegúrate de haber creado el archivo .env");
}

$type = $_ENV['DB_CONNECTION'];
$host = $_ENV['DB_HOST'];
$database = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

try {
    $pdo = new PDO("$type:host=$host;dbname=$database;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
