<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Gelombang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Manajemen Gelombang</h1>

    <!-- Form untuk menambahkan data -->
    <form action="tambah_gelombang.php" method="POST">
        <input type="text" name="nama_gelombang" placeholder="Nama Gelombang" required>
        <input type="number" name="kuota" placeholder="Kuota" required>
        <input type="text" name="periode" placeholder="Periode" required>
        <input type="submit" value="Tambah">
    </form>

    <!-- Tabel untuk menampilkan data -->
    <table>
        <tr>
            <th>Nama Gelombang</th>
            <th>Kuota</th>
            <th>Periode</th>
            <th>Aksi</th>
        </tr>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect('localhost', 'root', '', 'registrasi');

        // Mengambil data dari tabel "gelombang"
        $query = "SELECT * FROM gelombang";
        $result = mysqli_query($conn, $query);

        // Menampilkan data dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nama_gelombang'] . "</td>";
            echo "<td>" . $row['kuota'] . "</td>";
            echo "<td>" . $row['periode'] . "</td>";
            echo "<td><a href='edit_gelombang.php?nama_gelombang=" . $row['nama_gelombang'] . "'>Edit</a> | <a href='hapus_gelombang.php?nama_gelombang=" . $row['nama_gelombang'] . "'>Hapus</a></td>";
            echo "</tr>";
        }

        // Menutup koneksi database
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
