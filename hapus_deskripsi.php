<?php
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registrasi";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    // Memeriksa apakah parameter nama_kursus dan tingkatan telah diberikan
    if (isset($_GET['nama_kursus']) && isset($_GET['tingkatan'])) {
        $nama_kursus = $_GET['nama_kursus'];
        $tingkatan = $_GET['tingkatan'];
        
        // Menghapus data berdasarkan nama_kursus dan tingkatan
        $delete_query = "DELETE FROM kursusbeesmart WHERE nama_kursus='$nama_kursus' AND tingkatan='$tingkatan'";
        if (mysqli_query($conn, $delete_query)) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Gagal menghapus data: " . mysqli_error($conn);
        }
    }
    
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Gelombang Registrasi</title>
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
    text-align: center;
    font-family: Arial, sans-serif;
    margin: 20px;
}

.h2g {
    margin-top: 7rem;
    margin-bottom: 20px;
}

form {
    margin-top: 7rem;
}

label {
    display: inline-block;
    width: 100px;
}

input[type="number"],
input[type="text"] {
    width: 100%;
    height: 100px;
    padding: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #1e90ff;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: orange;
}

.error {
    color: red;
    margin-bottom: 10px;
}

/* Responsiveness for Handphone */
@media screen and (max-width: 480px) {
    .h2g,
    form {
        margin-top: 3rem;
    }

    label {
        width: 80px;
    }

    input[type="number"],
    input[type="text"] {
        width: 100%;
    }
}

/* Responsiveness for Tablet */
@media screen and (min-width: 481px) and (max-width: 768px) {
    .h2g,
    form {
        margin-top: 5rem;
    }
}

/* Responsiveness for Desktop */
@media screen and (min-width: 769px) {
    .h2g,
    form {
        margin-top: 7rem;
    }
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
        <?php
    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registrasi";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    // Mendapatkan data nama_kursus dan tingkatan dari database
    $query_kursus = "SELECT DISTINCT nama_kursus FROM kursusbeesmart";
    $query_tingkatan = "SELECT DISTINCT tingkatan FROM kursusbeesmart";
    $result_kursus = mysqli_query($conn, $query_kursus);
    $result_tingkatan = mysqli_query($conn, $query_tingkatan);
    
    // Menampilkan form untuk memilih nama_kursus dan tingkatan
    if (mysqli_num_rows($result_kursus) > 0 && mysqli_num_rows($result_tingkatan) > 0) {
        echo "<h2></h2>
            <form method='get' action=''>
                <label for='nama_kursus'>Pilih kursus:</label>
                <select id='nama_kursus' name='nama_kursus'>";
        while ($row = mysqli_fetch_assoc($result_kursus)) {
            echo "<option value='".$row['nama_kursus']."'>".$row['nama_kursus']."</option>";
        }
        echo "</select><br><br>";

        echo "<label for='tingkatan'>Pilih tingkatan:</label>
                <select id='tingkatan' name='tingkatan'>";
        while ($row = mysqli_fetch_assoc($result_tingkatan)) {
            echo "<option value='".$row['tingkatan']."'>".$row['tingkatan']."</option>";
        }
        echo "</select><br><br>";

        echo "<input type='submit' value='Hapus'>
            </form>";
    } else {
        echo "Tidak ada data deskripsi.";
    }
    
    mysqli_close($conn);
?>

       <!-- Feather -->
 <script>
    
    feather.replace()
  </script>
  <!-- Script buat hamburger -->
  <script src="js/script.js"></script>
</body>
</html>
