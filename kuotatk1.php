<!DOCTYPE html>
<html>
<head>
<style>
    body {
      font-family: Arial, sans-serif;
    }
    
    .container {
      margin: 10px;
      max-width: 500px;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }
    
    p {
      margin: 0 0 10px;
    }
    
    .button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #3498db;
      color: #ffffff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
      border: none;
      cursor: pointer;
      font-size: 14px;
      font-weight: bold;
      text-transform: uppercase;
    }
    
    .button:hover {
      background-color: #2980b9;
    }
    
    .button.disabled {
      background-color: #cccccc;
      pointer-events: none;
      cursor: not-allowed;
    }
    
    .button.disabled:hover {
      background-color: #cccccc;
    }
  </style>
</head>
<body>
  <?php
  // Koneksi ke database (sesuaikan dengan pengaturan server Anda)
  $koneksi = mysqli_connect("localhost", "root", "", "registrasi");

  // Ambil data kuota berdasarkan kolom "tabel" dengan nilai "tb_tk"
  $query = "SELECT kursus, jenis_kursus, kuota FROM tb_kuota WHERE tabel = 'tb_tk'";
  $result = mysqli_query($koneksi, $query);

  // Inisialisasi variabel array untuk menyimpan data kuota berdasarkan kursus
  $data_kuota = array();

  // Iterasi data kuota dan menyimpannya dalam array $data_kuota
  while ($row = mysqli_fetch_assoc($result)) {
    $kursus = $row["kursus"];
    $jenis_kursus = $row["jenis_kursus"];
    $kuota = $row["kuota"];

    // Tambahkan data kuota ke dalam array $data_kuota
    if (!isset($data_kuota[$kursus])) {
      $data_kuota[$kursus] = array();
    }

    // Tambahkan data jenis kursus dan kuota ke dalam array $data_kuota[$kursus]
    $data_kuota[$kursus][$jenis_kursus] = $kuota;
  }

  // Tampilkan data kuota
  foreach ($data_kuota as $kursus => $kuota) {
    echo '<div class="container">';
    echo '<h3>Kursus: ' . $kursus . '</h3>';
    echo '<p>Kuota Reguler: ' . $kuota['Reguler'] . '</p>';
    echo '<p>Kuota Privat: ' . $kuota['Privat'] . '</p>';

    // Periksa kuota Reguler, jika 0 maka nonaktifkan tombol "Daftar Reguler"
    if ($kuota['Reguler'] > 0) {
      echo '<a href="formtk.php?kursus=' . $kursus . '">Daftar Reguler</a>';
    } else {
      echo '<a href="#" disabled>Daftar Reguler</a>';
    }

    echo '<br>';

    // Periksa kuota Privat, jika 0 maka nonaktifkan tombol "Daftar Privat"
    if ($kuota['Privat'] > 0) {
      echo '<a href="daftar_privat.php?kursus=' . $kursus . '">Daftar Privat</a>';
    } else {
      echo '<a href="#" disabled>Daftar Privat</a>';
    }

    echo '</div>';
  }

  // Tutup koneksi ke database
  mysqli_close($koneksi);
  ?>
</body>
</html>
