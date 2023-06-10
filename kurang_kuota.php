<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

// Periksa apakah ada permintaan untuk menghapus data kursus
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["hapus"])) {
  $tabel = $_POST["tabel"];
  $kursus = $_POST["kursus"];
  $jenis_kursus = $_POST["jenis_kursus_item"];

  // Hapus data kursus berdasarkan kolom "tabel", "kursus", dan "jenis_kursus"
  $query = "DELETE FROM tb_kuota WHERE tabel = '$tabel' AND kursus = '$kursus'";
  mysqli_query($koneksi, $query);

  // Redirect kembali ke halaman kuota dengan data kursus yang diperbarui
  header("Location: kurang_kuota.php?tabel=" . urlencode($tabel) . "&kursus=" . urlencode($kursus));
  exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<style>
    body {
      margin-top: 5rem;
      font-family: "Poppins", sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }
    
    h2 {
      color: #333333;
      text-align: center;
    }
    
    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    select,
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 20px;
      box-sizing: border-box;
      font-size: 14px;
    }
    
    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #1e90ff;
      color: #ffffff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
    
    input[type="submit"]:hover {
      background-color: #0066cc;
    }
  </style>
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
                <a href="updatekuota.php">Kuota</a>
                <a href="editkursus.php">Kursus</a>
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
  <h2>Form Hapus Kursus</h2> <br>
  <form method="post" action="kurang_kuota.php">
    <label for="tabel">Tabel:</label>
    <select name="tabel" id="tabel">
      <option value="tb_tk">tb_tk</option>
      <option value="tb_sd">tb_sd</option>
      <option value="tb_smp">tb_smp</option>
      <option value="tb_data">tb_data</option>
    </select>
    <br><br>
    
    <label for="kursus">Kursus:</label>
    <input type="text" id="kursus" name="kursus" required>
    <br>
    <!-- <label for="jenis_kursus">Jenis Kursus:</label>
    <select id="jenis_kursus" name="jenis_kursus" required>
      <option value="Reguler">Reguler</option>
      <option value="Privat">Privat</option>
      <option value="Online">Online (SMA)</option>
    </select>
    <br><br> -->
    
    <input type="submit" name="hapus" value="Hapus">
  </form>
  <!-- Feather -->
  <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
