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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Deskripsi Kursus</title>
                <!-- Fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Swipe CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
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

body{
    font-family: "Poppins", sans-serif;
}

/* Tata letak untuk handphone dengan lebar maksimum 480px */
@media only screen and (max-width: 100px) {
  form {
    margin: 10px;
  }

  .labell {
    margin-top: 15rem;
  }
}

/* Tata letak untuk tablet dengan lebar maksimum 768px */
@media only screen and (max-width: 768px) {
  form {
    margin: 20px;
  }

  .labell {
    margin-top: 10rem;
  }
}

/* Tata letak untuk komputer dengan lebar minimum 769px */
@media only screen and (min-width: 769px) {
  form {
    margin: 40px;
  }

  label {
    margin-top: 7rem;
  }
}

/* Aturan tata letak umum */
form {
  margin: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

input[type="text"],
textarea,
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 12px;
}

textarea {
  resize: vertical;
}

input[type="submit"] {
  background-color: #0062cc;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #004999;
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
<form method="POST" action="">
    <label for="nama_kursus" class="labell">Nama Kursus:</label>
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
      <!-- Feather Icons -->
 <script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
    </body>
    <!-- SWIPE JAVASCRIPT -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JAVASCRIPT -->
            <script src="js/script2.js"></script>
</body>
</html>


