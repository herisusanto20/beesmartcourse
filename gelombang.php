<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelombang</title>
     <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- My Style CSS -->
    <link rel="stylesheet" href="css/style.css">
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
        <section class="pilih">
        <a href="tambah_Gelombang.php" class="cta1">Edit Gelombang</a>
                <!-- <a href="edit_gelombang.php" class="cta1">Edit Gelombang</a> -->
        </section>
        <section class="pilih">
        
    <table>
        <tr>
            <th>Nama Gelombang</th>
            <th>Kuota</th>
            <th>Periode</th>
        </tr>
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

        // Mendapatkan data gelombang dari database
        $query = "SELECT * FROM gelombang";
        $result = mysqli_query($conn, $query);

        // Menampilkan data gelombang dalam tabel
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nama_gelombang'] . "</td>";
            echo "<td>" . $row['kuota'] . "</td>";
            echo "<td>" . $row['periode'] . "</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
        </section>

        <!-- Feather -->
 <script>
    
    feather.replace()
  </script>
  <!-- Script buat hamburger -->
  <script src="js/script.js"></script>
    
</body>
</html>