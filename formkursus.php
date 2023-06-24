<?php
// Menghubungkan ke database (Contoh: MySQL)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'registrasi';

$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menambahkan data kursus baru
if (isset($_POST['submit'])) {
    $namaKursus = $_POST['nama_kursus'];
    $penjelasan = $_POST['penjelasan'];
    $tingkatan = $_POST['tingkatan'];

    $query = "INSERT INTO kursusbeesmart (nama_kursus, penjelasan, tingkatan) VALUES ('$namaKursus', '$penjelasan', '$tingkatan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data kursus berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="POST" action="">
    <label for="nama_kursus">Nama Kursus:</label>
    <input type="text" name="nama_kursus" id="nama_kursus" required><br>

    <label for="penjelasan">Penjelasan:</label>
    <textarea name="penjelasan" id="penjelasan" rows="4" required></textarea><br>

    <label for="tingkatan">Tingkatan:</label>
    <select name="tingkatan" id="tingkatan" required>
        <option value="TK">TK</option>
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
    </select><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Mengambil data dari tabel kursus jika data dikirimkan melalui formulir
if (isset($_POST['submit'])) {
    // Mengambil data dari tabel kursus
    $query = "SELECT * FROM kursusbeesmart";
    $result = mysqli_query($conn, $query);

    // Memeriksa apakah query berhasil dieksekusi dan ada data yang ditemukan
    if ($result && mysqli_num_rows($result) > 0) {
        // Menampilkan header tabel
        echo "<table>
                <tr>
                    <th>Nama Kursus</th>
                    <th>Penjelasan</th>
                    <th>Tingkatan</th>
                </tr>";

        // Menampilkan data kursus
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['nama_kursus']."</td>
                    <td>".$row['penjelasan']."</td>
                    <td>".$row['tingkatan']."</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data kursus yang ditemukan.";
    }
}

// Menutup koneksi
mysqli_close($conn);
?>
