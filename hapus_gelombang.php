<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'registrasi');

// Mengambil data dari URL
$nama_gelombang = $_GET['nama_gelombang'];

// Menghapus data gelombang berdasarkan nama_gelombang
$query = "DELETE FROM gelombang WHERE nama_gelombang = '$nama_gelombang'";
mysqli_query($conn, $query);

// Menutup koneksi database
mysqli_close($conn);

// Mengalihkan kembali ke halaman utama
header('Location: gelombang.php');
?>
