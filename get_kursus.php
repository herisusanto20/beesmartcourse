<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

// Membuat koneksi
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan nilai tingkat dari parameter URL
$tabel = $_GET['tabel'];

// Query untuk mengambil data kursus dari tabel tb_kuota berdasarkan kolom "tabel"
$sql = "SELECT kursus FROM tb_kuota WHERE tabel = '$tabel' AND jenis_kursus = 'Reguler'";

$result = mysqli_query($connection, $sql);

$kursus = array();

// Loop untuk menambahkan data kursus ke array
while ($row = mysqli_fetch_assoc($result)) {
    $kursus[] = $row['kursus'];
}

// Mengembalikan data kursus sebagai respons JSON
echo json_encode($kursus);

mysqli_close($connection);
?>
