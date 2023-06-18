<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");
// Inisialisasi variabel $container
$container = "";

// Periksa apakah ada permintaan untuk menambahkan data ke tabel tb_kuota
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tabel = $_POST["tabel"];
  $kursus = $_POST["kursus"];
  $jenis_kursus = $_POST["jenis_kursus"];

  // Definisikan nilai kuota berdasarkan jenis kursus
  $kuota_values = array(
    "Reguler" => 5,
    "Privat" => 2,
    "Online" => 5
  );

  // Tambahkan data ke tabel tb_kuota
  foreach ($jenis_kursus as $jenis) {
    $kuota_item = $kuota_values[$jenis];

    $query = "INSERT INTO tb_kuota (tabel, kursus, jenis_kursus, kuota) VALUES ('$tabel', '$kursus', '$jenis', '$kuota_item')";
    mysqli_query($koneksi, $query);
  }

  // Ambil data kuota berdasarkan inputan
  $query = "SELECT jenis_kursus, kuota FROM tb_kuota WHERE tabel = '$tabel' AND kursus = '$kursus'";
  $result = mysqli_query($koneksi, $query);

  // Buat container berdasarkan jenis kursus yang ada
  $container .= '<div class="container">';
  $container .= '<h3>Kursus: ' . $kursus . '</h3>';

  while ($row = mysqli_fetch_assoc($result)) {
    $jenis_kursus = $row["jenis_kursus"];
    $kuota = $row["kuota"];

    $container .= '<p>Kuota ' . $jenis_kursus . ' = ' . $kuota . '</p>';
  }
  // Redirect ke halaman kuota berdasarkan tabel yang dipilih
  if ($tabel === 'tb_tk') {
    ob_start(); // Mulai menyimpan output ke buffer
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
  
    $container .= '</div>';
    ob_end_clean(); // Hapus konten output yang telah disimpan di buffer
  
    // Redirect ke halaman kuotatk1.php dengan menyertakan data container melalui URL
    header("Location: kuotatk1.php?container=" . urlencode($container));
    exit();
  } elseif ($tabel === 'tb_sd') {
    // Sama seperti sebelumnya untuk tabel 'tb_sd'
    ob_start();
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
    
    $container .= '</div>';
    ob_end_clean();
  
    header("Location: kuotasd1.php?container=" . urlencode($container));
    exit();
  } elseif ($tabel === 'tb_smp') {
    // Sama seperti sebelumnya untuk tabel 'tb_smp'
    ob_start();
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
    
    $container .= '</div>';
    ob_end_clean();
  
    header("Location: kuotasmp1.php?container=" . urlencode($container));
    exit();
  } elseif ($tabel === 'tb_data') {
    // Sama seperti sebelumnya untuk tabel 'tb_data'
    ob_start();
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
    
    $container .= '</div>';
    ob_end_clean();
  
    header("Location: kuotasma1.php?container=" . urlencode($container));
    exit();
  }

  $container .= '</div>';
}
?>



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
    body {
      margin-top: 3rem;
      font-family: "Poppins", sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f5f5;
    }

    h2 {
      font-size: 20px;
      color: #333333;
      text-align: center;
    }

    .container {
      width: 100%;
      max-width: 500px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-top: 20px;
    }

    .container label {
      display: block;
      margin-bottom: 5px;
    }

    .container input[type="text"],
    .container input[type="number"],
    .container select {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .container input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #1e90ff;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .container input[type="submit"]:hover{
      color: red;
      background-color: orange;
    }

    /* Tampilan untuk perangkat handphone */
    @media only screen and (max-width: 600px) {
      .container {
        /* Gaya CSS untuk handphone */
      }
    }

    /* Tampilan untuk perangkat tablet */
    @media only screen and (min-width: 601px) and (max-width: 1024px) {
      .container {
        /* Gaya CSS untuk tablet */
      }
    }

    /* Tampilan untuk perangkat komputer */
    @media only screen and (min-width: 1025px) {
      .container {
        /* Gaya CSS untuk komputer */
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
        <div class="container">
    <h2>Form Tambah Kursus</h2>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="tabel">Tingkat :</label>
        <select name="tabel" id="tabel">
            <option value="tb_tk">TK</option>
            <option value="tb_sd">SD</option>
            <option value="tb_smp">SMP</option>
            <option value="tb_data">SMA</option>
        </select>
        <br><br>

        <label for="kursus">Kursus:</label>
        <input type="text" name="kursus" id="kursus">
        <br><br>

        <label for="jenis_kursus">Jenis Kursus:</label>
<br>
<input type="checkbox" name="jenis_kursus[Reguler]" value="Reguler"> Reguler<br>
<input type="checkbox" name="jenis_kursus[Privat]" value="Privat"> Privat<br>
<input type="checkbox" name="jenis_kursus[Online]" value="Online"> Online (Khusus SMA)<br>
<br><br>


        <input type="submit" value="Tambahkan">
    </form>

</div>
</div>

  </div>
   <!-- Feather -->
   <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>

