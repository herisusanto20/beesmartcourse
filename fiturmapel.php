<?php
// Koneksi ke basis data (disesuaikan dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menambahkan mata pelajaran baru
function tambahMataPelajaran($tabel, $kursus, $jenis_kursus, $kuota)
{
    global $conn;

    // Menggunakan prepared statement untuk menghindari SQL injection
    $stmt = $conn->prepare("INSERT INTO tb_kuota (tabel, kursus, jenis_kursus, kuota) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $tabel, $kursus, $jenis_kursus, $kuota);

    if ($stmt->execute()) {
        echo "Mata pelajaran berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan mata pelajaran: " . $stmt->error;
    }

    $stmt->close();
}

// Proses penambahan mata pelajaran jika form disubmit
if (isset($_POST['submit'])) {
    $tabel = $_POST['tabel'];
    $kursus = $_POST['kursus'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $kuota = $_POST['kuota'];

    tambahMataPelajaran($tabel, $kursus, $jenis_kursus, $kuota);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Pelajaran</title>
</head>
<body>
    <h2>Form Tambah Mata Pelajaran</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="tabel">Tabel:</label>
        <input type="text" name="tabel" id="tabel" required><br><br>

        <label for="kursus">Kursus:</label>
        <input type="text" name="kursus" id="kursus" required><br><br>

        <label for="jenisKursus">Jenis Kursus:</label>
        <select name="jenis_kursus" id="jenis_kursus" required>
            <option value="Reguler">Reguler</option>
            <option value="Privat">Privat</option>
        </select><br><br>

        <label for="kuota">Kuota:</label>
        <input type="number" name="kuota" id="kuota" required><br><br>

        <input type="submit" name="submit" value="Tambah Mata Pelajaran">
    </form>
</body>
</html>
gatau