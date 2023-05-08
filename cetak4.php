<?php
include "db.php";

// Query untuk mendapatkan data dari tabel tk
$query = "SELECT * FROM tb_tk";
$result = mysqli_query($koneksi, $query);

// Membuat tabel untuk menampilkan data TK
echo "<h1>Laporan Data TK</h1>";
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama TK</th><th>Alamat</th><th>No. Telepon</th></tr>";

while($row = mysqli_fetch_array($result)){
  echo "<tr><td>".$row['id_tk']."</td><td>".$row['nama_tk']."</td><td>".$row['alamat_tk']."</td><td>".$row['telepon_tk']."</td></tr>";
}

echo "</table>";
?>
