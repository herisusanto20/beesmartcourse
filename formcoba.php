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
    $kursus = $_POST['kursus'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $kuota = $_POST['kuota'];
    $tabel = $_POST['tabel'];

    // Query untuk update kuota
    $query = "UPDATE tb_kuota SET kuota = $kuota WHERE kursus = '$kursus' AND jenis_kursus = '$jenis_kursus'";

    if (mysqli_query($connection, $query)) {
        echo "Kuota berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan saat memperbarui kuota: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Update Kuota</title>
</head>
<body>
    <h2>Form Update Kuota</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="kursus">Kursus:</label>
        <select name="kursus" id="kursus">
            <option value="Matematika">Matematika</option>
            <option value="IPA">IPA</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Pemrograman">Pemrograman</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Calistung">Calistung</option>
            <option value="Tematik">Tematik</option>
        </select>

        <br><br>

        <label for="jenis_kursus">Jenis Kursus:</label>
        <select name="jenis_kursus" id="jenis_kursus">
            <option value="Reguler">Reguler</option>
            <option value="Privat">Privat</option>
            <option value="Online">Online</option>
        </select>

        <br><br>

        <label for="kuota">Kuota:</label>
        <input type="number" name="kuota" id="kuota" required>

        <br><br>

        <label for="tabel">Pilih Tabel:</label>
        <select name="tabel" id="tabel">
            <option value="tb_tk">Tabel TK</option>
            <option value="tb_sd">Tabel SD</option>
            <option value="tb_smp">Tabel SMP</option>
            <option value="tb_data">Tabel Data</option>
        </select>

        <br><br>

        <input type="submit" value="Update Kuota">
    </form>
</body>
</html>
