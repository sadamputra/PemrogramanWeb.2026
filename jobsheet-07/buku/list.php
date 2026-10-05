<?php
// Wajib memanggil session_start() di paling atas untuk bisa membaca $_SESSION
session_start();

$_rel = '../';
include __DIR__ . '/../includes/header.php';

// Mengambil data buku dari session. Jika belum ada, isi dengan array kosong []
$daftarBuku = $_SESSION['buku'] ?? [];
?>

<h2>Data Buku</h2>
<a href="tambah.php">Tambah Buku</a>
<br><br>

<!-- Menampilkan Flash Message Error (jika ada) -->
<?php if (isset($_SESSION['flash_error'])): ?>
    <div class="flash flash-error" style="color: red; margin-bottom: 10px;">
        <?= $_SESSION['flash_error']; ?>
    </div>
    <?php unset($_SESSION['flash_error']); // Hapus pesan agar tidak muncul terus saat di-refresh ?>
<?php endif; ?>

<!-- Menampilkan Flash Message Success (jika ada) -->
<?php if (isset($_SESSION['flash_success'])): ?>
    <div class="flash flash-success" style="color: green; margin-bottom: 10px;">
        <?= $_SESSION['flash_success']; ?>
    </div>
    <?php unset($_SESSION['flash_success']); // Hapus pesan setelah ditampilkan ?>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($daftarBuku)): ?>
            <tr>
                <td colspan="4" style="text-align: center;">Belum ada data buku.</td>
            </tr>
        <?php else: ?>
            <!-- Melakukan perulangan untuk setiap buku di dalam array -->
            <?php foreach ($daftarBuku as $buku): ?>
                <tr>
                    <td><?= $buku['judul'] ?></td>
                    <td><?= $buku['pengarang'] ?></td>
                    <td><?= $buku['tahun'] ?></td>
                    <td>
                        <a href="#">Edit</a> | <a href="#">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<?php
include __DIR__ . '/../includes/footer.php';
?>