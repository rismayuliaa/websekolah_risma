<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_wali = mysqli_real_escape_string($koneksi, $_POST['nama_wali']);
    $kontak = mysqli_real_escape_string($koneksi, $_POST['kontak']);

    if (!empty($nama_wali) && !empty($kontak)) {
        $query = "INSERT INTO wali_murid (nama_wali, kontak) VALUES ('$nama_wali', '$kontak')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Wali Murid berhasil ditambahkan!'); window.location='wali_murid.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan wali murid!');</script>";
        }
    } else {
        echo "<script>alert('Nama dan kontak tidak boleh kosong!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3">Tambah Wali Murid</h2>
        <a href="wali_murid.php" class="btn btn-primary mb-3">Kembali ke Data Wali Murid</a>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama_wali" class="form-label">Nama Wali</label>
                <input type="text" name="nama_wali" id="nama_wali" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kontak" class="form-label">No. Telepon</label>
                <input type="text" name="kontak" id="kontak" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>