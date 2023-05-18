
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
    $namasmp = $_POST["namasmp"];
    $statussmp = $_POST["statussmp"];

    // Update data pada database
    $sql = "UPDATE tb_smp SET statussmp='$statussmp' WHERE namasmp='$namasmp'";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    echo "<meta http-equiv=refresh content=1;URL='datasmp.php'>";

    // Tutup koneksi
    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nama: <input type="text" name="namasmp"><br><br>
        Status: <input type="text" name="statussmp"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>

</body>
</html>
