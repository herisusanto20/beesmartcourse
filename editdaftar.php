
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
    $namatk = $_POST["namatk"];
    $statustk = $_POST["statustk"];

    // Update data pada database
    $sql = "UPDATE tb_tk SET statustk='$statustk' WHERE namatk='$namatk'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "<meta http-equiv=refresh content=1;URL='datatk.php'>";
    // Tutup koneksi
    mysqli_close($conn);
}

?>
<?php
$namatk = $_GET['namatk'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama : <input type="text" name="namatk" value="<?php echo $namatk; ?>"><br><br>
    Keterangan : <input type="text" name="statustk"><br><br>
    <input type="submit" name="submit" value="Update">
  </form>

</body>
</html>
