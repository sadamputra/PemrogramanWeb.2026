<?php
$_rel = '../';
include __DIR__ . '/../includes/header.php';
?>

<h2>Tambah Buku Baru</h2>
<!-- Form akan mengirim data ke proses_tambah.php menggunakan method POST -->
<form action="proses_tambah.php" method="post">
    <div style="margin-bottom: 10px;">
        <label for="judul">Judul Buku:</label><br>
        <input type="text" id="judul" name="judul" >
    </div>
    <div style="margin-bottom: 10px;">
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" >
    </div>
    <div style="margin-bottom: 10px;">
        <label for="tahun">Tahun Terbit:</label><br>
        <input type="number" id="tahun" name="tahun" >
    </div>
    <button type="submit">Simpan</button>
</form>

<?php
include __DIR__ . '/../includes/footer.php';
?>