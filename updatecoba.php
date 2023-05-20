<?php
session_start();

// Memeriksa apakah data kuota dikirimkan melalui formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan nilai yang dikirimkan dari formulir
    $kursus = $_POST['kursus'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $kuota = $_POST['kuota'];

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

    // Memperbarui kuota dalam database
    $query = "UPDATE tb_kuota SET kuota = $kuota WHERE kursus = '$kursus' AND jenis_kursus = '$jenis_kursus'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Kuota berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan saat memperbarui kuota: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>
