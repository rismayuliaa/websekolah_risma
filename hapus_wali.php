<?php
// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if (isset($_GET['id'])) {
    // Pastikan ID merupakan integer
    $id_wali = (int)$_GET['id'];

    // Query untuk menghapus wali murid berdasarkan ID
    $query = "DELETE FROM wali_murid WHERE id_wali = '$id_wali'";
    
    if (mysqli_query($koneksi, $query)) { 
        header("Location: wali_murid.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    header("Location: wali_murid.php");
    exit();
}
?>
