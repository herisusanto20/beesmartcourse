<?php

// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "registrasi";

// membuat koneksi ke database
$conn = mysqli_connect($host, $user, $password, $database);

// memeriksa apakah koneksi berhasil dibuat atau tidak
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// memeriksa apakah form telah disubmit atau belum
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_tutor = $_POST["nama_tutor"];
    $tanggal_presensi = $_POST["tanggal_presensi"];
    $nama_siswa = $_POST["nama_siswa"];
    $kursus_presensi = $_POST["kursus_presensi"];
    $jenis_presensi = $_POST["jenis_presensi"];

    // membuat direktori uploads jika belum ada
    if (!file_exists("uploads")) {
        mkdir("uploads");
    }

    // mengunggah file bukti presensi ke server
    $bukti_presensi = $_FILES["bukti_presensi"]["name"];
    $temp = $_FILES["bukti_presensi"]["tmp_name"];
    $target_file = "uploads/" . basename($bukti_presensi);

    if (move_uploaded_file($temp, $target_file)) {
        echo "File bukti presensi berhasil diunggah.";
    } else {
        die("Upload gagal. Silahkan coba lagi.");
    }

    // menyimpan data
    $sql = "INSERT INTO presensi (nama_tutor, tanggal_presensi, nama_siswa, kursus_presensi, jenis_presensi, bukti_presensi)
VALUES ('$nama_tutor', '$tanggal_presensi', '$nama_siswa', '$kursus_presensi', '$jenis_presensi', '$bukti_presensi')";

if (mysqli_query($conn, $sql)) {
echo "Data berhasil disimpan.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi ke database
mysqli_close($conn);
}
?>
