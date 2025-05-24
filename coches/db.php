<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'sql208.infinityfree.com'; // puedes confirmarlo en tu panel si es este el correcto
$dbname = 'if0_39062686_coches';   // si tu base de datos tiene exactamente ese nombre
$username = 'if0_39062686';
$password = 'T29032006'; // tu contraseña FTP y de MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>