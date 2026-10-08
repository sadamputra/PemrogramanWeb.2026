<?php
$host = 'localhost';
$port = '5432';
$db   = 'simpus_mini';
$user = 'postgres';
$pass = '060579'; // Pastikan password ini sudah benar

$dsn = "pgsql:host=$host;port=$port;dbname=$db";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

echo "Hore! Koneksi ke PostgreSQL berhasil!";
?>