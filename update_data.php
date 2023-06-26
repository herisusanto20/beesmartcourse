<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Memeriksa apakah ada data yang dikirim dari form
if (isset($_POST['nama_kursus']) && isset($_POST['penjelasan']) && isset($_POST['tingkatan'])) {
    $nama_kursus = $_POST['nama_kursus'];
    $penjelasan = $_POST['penjelasan'];
    $tingkatan = $_POST['tingkatan'];

    // Melakukan pembaruan data kursus
    $query = "UPDATE kursusbeesmart SET penjelasan='$penjelasan' WHERE nama_kursus='$nama_kursus' AND tingkatan='$tingkatan'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data berhasil diubah.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Redirect kembali ke deskripsi.php setelah proses update selesai
header("Location: deskripsi.php");
exit();
?>
