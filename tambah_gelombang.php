<?php
// Mengambil data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_gelombang = $_POST["nama_gelombang"];
    $kuota = $_POST["kuota"];
    $periode = $_POST["periode"];

    // Lakukan validasi atau manipulasi data jika diperlukan sebelum menyimpan ke database

    // Simpan data ke database atau lakukan operasi tambah lainnya

    // Contoh: Menyimpan data ke dalam tabel 'gelombang' di database
    $koneksi = mysqli_connect("localhost", "root", "", "registrasi");
    $query = "INSERT INTO gelombang (nama_gelombang, kuota, periode) VALUES ('$nama_gelombang', '$kuota', '$periode')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Terjadi kesalahan saat menambahkan data.";
    }

    // Tutup koneksi ke database jika sudah selesai
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Gelombang</title>
      <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
    <style>
         /* Tata letak untuk handphone dengan lebar maksimum 480px */
@media only screen and (max-width: 480px) {
  .navbar .navbar-logo {
    font-size: 1.2rem;
  }

  .navbar .navbar-nav a {
    font-size: 0.9rem;
  }
}

/* Tata letak untuk tablet dengan lebar maksimum 768px */
@media only screen and (max-width: 768px) {
  .navbar .navbar-logo {
    font-size: 1.5rem;
  }

  .navbar .navbar-nav a {
    font-size: 1.1rem;
  }
}

/* Tata letak untuk komputer dengan lebar minimum 769px */
@media only screen and (min-width: 769px) {
  .navbar .navbar-logo {
    font-size: 2rem;
  }

  .navbar .navbar-nav a {
    font-size: 1.3rem;
  }
}

/* Aturan tata letak umum */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.4rem 7%;
  background-color: rgba(6, 126, 246, 0.8);
  border-bottom: 1px solid var(--primary);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.navbar .navbar-logo {
  text-decoration: none;
  font-weight: 700;
  color: #fffff0;
}

.navbar .navbar-logo span {
  color: orange;
}

.navbar .navbar-nav a {
  text-decoration: none;
  color: white;
  display: inline-block;
  margin: 0 1rem;
}

.navbar .navbar-nav span {
  color: orange;
}

.navbar .navbar-nav a:hover {
  color: orange;
}

.navbar .navbar-nav a::after {
  content: "";
  display: block;
  padding-bottom: 0.5rem;
  border-bottom: 0.1rem solid orange;
  transform: scaleX(0);
  transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after {
  transform: scaleX(1);
}

.navbar .navbar-extra a {
  color: white;
  margin: 0 2rem;
}

.navbar-extras a {
  color: var(--primary);
  width: 5rem;
  margin: 0 8rem;
}

#hamburger-menu {
  display: none;
}
        body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    margin-top: 7rem;
    text-align: center;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
   
}

input[type="text"],
input[type="number"] {
    padding: 10px;
    margin-right: 10px;
    border: 1px solid #1e90ff;
    border-radius: 4px;
    font-size: 16px;
    
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #1e90ff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: orange;
}

table {
    border: 1px solid black;
    width: 100%;
    border-collapse: collapse;
}

table th,
table td {
    padding: 10px;
    text-align: left;
    border: 1px solid black;
}

table th {
    background-color: #1e90ff;
    font-weight: bold;
}

table td a {
    text-decoration: none;
    color: #1e90ff;
}

table td a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
     <!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data</a>
                <a href="laporan_dataall.php">Laporan</a>
                <!-- <a href="updatekuota.php">Kuota</a> -->
                <a href="tampildata.php">Kursus</a>
                <!-- <a href="datagaji.php">Penggajian</a> -->
                <!-- <a href="register.php">Daftar Akses</a> -->
                <!-- <a href="datapresensi.php">Presensi</a> -->
                
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="login.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End -->
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
         <!-- Feather -->
 <script>
    
    feather.replace()
  </script>
  <!-- Script buat hamburger -->
  <script src="js/script.js"></script>
</body>
</html>
