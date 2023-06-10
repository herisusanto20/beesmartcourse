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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedTabel = $_POST['tabel'];

    // Query untuk mendapatkan data kursus
    $query = "SELECT kursus FROM $selectedTabel";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>" . $row['kursus'] . "</li>";
        }
        echo "</ul>";
    } elseif ($result === false) {
    echo "Terjadi kesalahan dalam eksekusi query: " . mysqli_error($connection);
} else {
    echo "Data kursus tidak ditemukan.";
}

    mysqli_close($connection);
}
?>
