
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $namasd = $_POST["namasd"];
    $statussd = $_POST["statussd"];

    // Update data pada database
    $sql = "UPDATE tb_sd SET statussd='$statussd' WHERE namasd='$namasd'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "<meta http-equiv=refresh content=1;URL='datasd.php'>";

    // Tutup koneksi
    mysqli_close($conn);
}

?>
<?php
$namasd = $_GET['namasd'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama : <input type="text" name="namasd" value="<?php echo $namasd; ?>"><br><br>
    Keterangan : <input type="text" name="statussd"><br><br>
    <input type="submit" name="submit" value="Update">
  </form>

</body>
</html>
