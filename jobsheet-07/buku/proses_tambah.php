<?php
// 1. Memulai session agar bisa menyimpan data sementara di $_SESSION
session_start();

// 2. Memastikan bahwa file ini diakses melalui metode POST (dari pengiriman form)
// Jika diakses langsung via URL (GET), kita tolak dan kembalikan ke form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: tambah.php');
    exit;
}

// 3. Menangkap data yang dikirim dari form (menggunakan $_POST)
// trim() digunakan untuk menghapus spasi berlebih di awal/akhir input
$judul = trim($_POST['judul'] ?? '');
$pengarang = trim($_POST['pengarang'] ?? '');
$tahun = trim($_POST['tahun'] ?? '');

// 4. Validasi Data (Server-Side Validation)
$errors = [];
if ($judul === '') {
    $errors[] = 'Judul buku wajib diisi.';
}
if ($pengarang === '') {
    $errors[] = 'Pengarang wajib diisi.';
}
if ($tahun === '') {
    $errors[] = 'Tahun terbit wajib diisi.';
}

// 5. Cek hasil validasi
if (!empty($errors)) {
    // Jika ada error, simpan pesan error di session dan kembalikan ke list.php
    // (Di jobsheet ini, untuk penyederhanaan, jika error dikembalikan ke list.php)
    $_SESSION['flash_error'] = implode('<br>', $errors);
    header('Location: list.php');
    exit;
}

// 6. Jika validasi sukses, buat array data buku baru
$bukuBaru = [
    'judul' => $judul,
    'pengarang' => $pengarang,
    'tahun' => $tahun
];

// 7. Simpan ke dalam Session
// Inisialisasi array kosong jika $_SESSION['buku'] belum pernah dibuat
if (!isset($_SESSION['buku'])) {
    $_SESSION['buku'] = [];
}
// Tambahkan buku baru ke dalam array $_SESSION['buku']
$_SESSION['buku'][] = $bukuBaru;

// 8. Berikan pesan sukses (Flash Message)
$_SESSION['flash_success'] = "Buku '$judul' berhasil ditambahkan!";

// 9. Redirect (arahkan kembali) ke halaman list.php
header('Location: list.php');
exit;