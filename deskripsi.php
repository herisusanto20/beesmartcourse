<!DOCTYPE html>
<html>
<head>
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
    <style>
    .hm {
        /* background-image: url("../img/dataregis.jpg"); */
        background-color: white;
    }

    .container {
    width: 100%;
    margin: 5px;
    margin-top: 1rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Mengatur kontainer agar ditampilkan di tengah */
    align-items: flex-start; /* Mengatur kontainer agar elemen-elemennya ditampilkan di atas */
}

.sub-container {
    margin-top: 10px;
    flex-basis: calc(25% - 20px); /* Mengatur lebar sub-container agar menempati 25% lebar kontainer dengan ruang sekitar 20px */
}

.course-container {
    margin-top: 5px;
    padding: 10px;
    background-color: #f2f2f2;
    border-radius: 5px;
    height: 100%; /* Mengatur tinggi course-container agar memenuhi sub-container */
}


.course-container h5 {
    margin: 0;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.2; /* Mengatur jarak antara baris agar lebih nyaman dibaca */
}

.course-container p {
    margin: 5px 0;
    font-size: 14px;
    line-height: 1.2; /* Mengatur jarak antara baris agar lebih nyaman dibaca */
}


    @media (min-width: 1024px) {
        .sub-container {
            flex-basis: 100%;
        }
        
        .container {
            flex-direction: row;
        }
    }

    body {
    font-family: "Poppins", sans-serif;
    margin: 20px;
}

h1 {
    margin-top: 7rem;
    text-align: center;
    color: #1e90ff;
    font-size: 24px;
    margin-bottom: 20px;
}

.table-container {
  width: 100%;
  table-layout: fixed;
  overflow-x: auto;
}

.table-container table {
  width: auto;
  max-width: 100%;
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

.th1 {
    color: white;
    background-color: orange;
    font-weight: bold;
}
</style>

</head>
<body class="hm">
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
                <a href="formkursus.php" class="cta1">Tambah Deskripsi Kursus</a>
                <a href="edit_deskripsi.php" class="cta1">Edit Deskripsi Kursus</a>
                <a href="hapus_deskripsi.php" class="cta1">Hapus Deskripsi Kursus</a>
                
        </section>
        <section>
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

        </section>
       
 <!-- Feather -->
 <script>
    
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
