<!DOCTYPE html>
<html>
<head>
    <title>Data Kursus</title>
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

    body {
    font-family: "Poppins", sans-serif;
    margin: 20px;
}

h1 {
    margin-top: 7rem;
    text-align: center;
    color: #0062cc;
    font-size: 24px;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th{
    padding: 10px;
    text-align: center;
    border: 1px solid black;
}
 td {
    background-color: white;
    padding: 10px;
    text-align: justify;
    border: 1px solid black;
}

th {
    color: white;
    background-color: #0062cc;
    font-weight: bold;
}

   </style>
</head>
<body>
     <!-- Navbar Start -->
     <nav class="navbar">
            <a href="#" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="index.php#home">Home</a>
                <a href="index.php#about">Tentang Kami</a>
                <a href="index.php#tutor">Tutor</a>
                <a href="index.php#course">Kursus</a>
                <a href="index.php#contact">Kontak</a>
            </div>
            <div class="navbar-extra">
                
                    <a href="login.php">
                        <i data-feather="log-in"></i>
                    </a>
                </button>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

    <h1>Data Kursus</h1>

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

// Mengatur urutan tingkatan
$urutanTingkatan = array('TK', 'SD', 'SMP', 'SMA');
$urutanTingkatanString = "'" . implode("', '", $urutanTingkatan) . "'";

// Mengambil data dari tabel kursus dengan pengurutan berdasarkan tingkatan
$query = "SELECT * FROM kursusbeesmart ORDER BY FIELD(tingkatan, $urutanTingkatanString)";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil dieksekusi
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Menampilkan header tabel
        echo "<table>
                <tr>
                    <th>Nama Kursus</th>
                    <th>Informasi</th>
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
} else {
    echo "Error: " . mysqli_error($conn);
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
