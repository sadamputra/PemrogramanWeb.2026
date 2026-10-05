<?php
// $base digunakan untuk mengatur path relatif (misal: ../) 
// Jika $_rel tidak diatur di halaman yang memanggil, $base akan berupa string kosong ('')
$base = $_rel ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPUS-Mini</title>
    <!-- Path CSS menyesuaikan posisi file yang memanggilnya menggunakan $base -->
    <link rel="stylesheet" href="<?= $base ?>css/style.css">
</head>
<body>
    <header>
        <h1>SIMPUS-Mini</h1>
        <nav>
            <a href="<?= $base ?>index.php">Beranda</a>
            <a href="<?= $base ?>buku/list.php">Data Buku</a>
            <a href="<?= $base ?>anggota/list.php">Data Anggota</a>
        </nav>
    </header>
    <main>