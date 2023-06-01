<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");
// Inisialisasi variabel $container
$container = "";

// Periksa apakah ada permintaan untuk menambahkan data ke tabel tb_kuota
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tabel = $_POST["tabel"];
  $kursus = $_POST["kursus"][0];
  $jenis_kursus = $_POST["jenis_kursus"];
  $kuota = $_POST["kuota"];

  // Tambahkan data ke tabel tb_kuota
  for ($i = 0; $i < count($jenis_kursus); $i++) {
    $jenis_kursus_item = $jenis_kursus[$i];
    $kuota_item = $kuota[$i];

    $query = "INSERT INTO tb_kuota (tabel, kursus, jenis_kursus, kuota) VALUES ('$tabel', '$kursus', '$jenis_kursus_item', '$kuota_item')";
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
  
    header("Location: kuotasd.php?container=" . urlencode($container));
    exit();
  } elseif ($tabel === 'tb_smp') {
    // Sama seperti sebelumnya untuk tabel 'tb_smp'
    ob_start();
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
    
    $container .= '</div>';
    ob_end_clean();
  
    header("Location: kuotasmp.php?container=" . urlencode($container));
    exit();
  } elseif ($tabel === 'tb_data') {
    // Sama seperti sebelumnya untuk tabel 'tb_data'
    ob_start();
    $container .= '<div class="container">';
    $container .= '<h3>Kursus: ' . $kursus . '</h3>';
    
    // Sisipkan konten container di sini
    
    $container .= '</div>';
    ob_end_clean();
  
    header("Location: kuotasma.php?container=" . urlencode($container));
    exit();
  }
  


  $container .= '</div>';
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .container {
    margin-left: 10px;
    margin-right: 10px;
    max-width: 500px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
  <h2>Form Tambah Mapel</h2>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <label for="tabel">Tabel:</label>
  <select name="tabel" id="tabel">
    <option value="tb_tk">tb_tk</option>
    <option value="tb_sd">tb_sd</option>
    <option value="tb_smp">tb_smp</option>
    <option value="tb_data">tb_data</option>
  </select>
  <br><br>
  
  <label for="kursus">Kursus:</label>
  <input type="text" id="kursus" name="kursus[]" required>
  <br>
  <label for="jenis_kursus1">Jenis Kursus 1:</label>
  <select id="jenis_kursus1" name="jenis_kursus[]" required>
    <option value="Reguler">Reguler</option>
    <option value="Privat">Privat</option>
  </select>
  <br>
  <label for="kuota1">Kuota 1:</label>
  <input type="number" id="kuota1" name="kuota[]" required>
  <br>
  <label for="jenis_kursus2">Jenis Kursus 2:</label>
  <select id="jenis_kursus2" name="jenis_kursus[]" required>
    <option value="Reguler">Reguler</option>
    <option value="Privat">Privat</option>
  </select>
  <br>
  <label for="kuota2">Kuota 2:</label>
  <input type="number" id="kuota2" name="kuota[]" required>
  <br><br>
  
  <input type="submit" value="Tambahkan">
</form>

<?php
// Tampilkan container yang telah dibuat
echo $container;
?>

</body>
</html>
