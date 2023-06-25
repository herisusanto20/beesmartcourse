<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'root', '', 'registrasi');

// Mengambil data dari URL
$nama_gelombang = $_GET['nama_gelombang'];

// Mengambil data gelombang berdasarkan nama_gelombang
$query = "SELECT * FROM gelombang WHERE nama_gelombang = '$nama_gelombang'";
$result = mysqli_query($conn, $query);
$gelombang = mysqli_fetch_assoc($result);

// Menutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Gelombang</title>
</head>
<body>
    <h1>Edit Gelombang</h1>

    <!-- Form untuk mengedit data -->
    <form action="update_gelombang.php" method="POST">
        <input type="text" name="nama_gelombang" value="<?php echo $gelombang['nama_gelombang']; ?>">
        <input type="number" name="kuota" value="<?php echo $gelombang['kuota']; ?>" required>
        <input type="text" name="periode" value="<?php echo $gelombang['periode']; ?>" required>
        <input type="submit" value="Update">
    </form>
</body>
</html>
