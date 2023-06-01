

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran TK</title>
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="body_kategori">
    <!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
            <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data Daftar</a>
                <a href="laporan_dataall.php">Laporan</a>
                <!-- <a href="datagaji.php">Penggajian</a> -->
                <a href="register.php">Daftar Akses</a>
                <!-- <a href="datapresensi.php">Presensi</a> -->
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="index.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End -->
        
        <h2 class="h2data">Data Pendaftaran TK</h2>
        <div class="table-wrapper">
<table cellspacing='0'>
    <thead>
        <!-- Filtering on -->
<?php
    include 'db.php';

    // Ambil nilai jenis kursus dari parameter GET (jika tersedia)
    $kursustk = isset($_GET['kursustk']) ? $_GET['kursustk'] : '';

    // Validasi nilai jenis kursus
    $valid_kursustk = ['Matematika', 'Calistung', 'Tematik'];
    if (!empty($kursustk) && !in_array($kursustk, $valid_kursustk)) {
        echo "Jenis kursus tidak valid";
        exit();
    }

    // Filter data berdasarkan jenis kursus jika nilai jenis kursus tidak kosong
    $sql = "SELECT * FROM tb_tk";
    if (!empty($kursustk)) {
        $sql .= " WHERE kursustk = '$kursustk'";
    }
    // Urutkan data dr yg dulu
    $sql .= " ORDER BY tanggaltk ASC";

    // Eksekusi query
    $result = mysqli_query($conn, $sql);
?>

<!-- Form untuk memfilter data berdasarkan jenis kursus -->
<form action="" method="get">
    <label>Pilih jenis kursus:</label>
    <select name="kursustk">
        <option value="">Semua</option>
        <option value="Calistung" <?php if ($kursustk == 'Calistung') echo 'selected'; ?>>Calistung</option>
        <option value="Tematik" <?php if ($kursustk == 'Tematik') echo 'selected'; ?>>Tematik</option>
    </select>
    <input type="submit" value="Filter" id="filter">
</form>
<br>
<!-- Filtering off -->
    <thead>
    <tbody>
        <tr>
            <th>Nama</th>
            <th>Tanggal Pendaftaran</th>
            <th>Nama Orang Tua</th>
            <th>No Handphone</th>
            <th>Alamat</th>
            <th>Kursus</th>
            <th>Jenis Kursus</th>
            <th>Keterangan</th>
            <th colspan="3">Tambahan</th>
        </tr>
    </thead>
    
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['namatk']."</td>";
                echo "<td>".$row['tanggaltk']."</td>";
                echo "<td>".$row['namaortutk']."</td>";
                echo "<td>".$row['nohandphonetk']."</td>";
                echo "<td>".$row['alamattk']."</td>";
                echo "<td>".$row['kursustk']."</td>";
                echo "<td>".$row['jeniskursustk']."</td>";
                echo "<td>".$row['statustk']."</td>";
                echo "<td><a href='editdaftar.php?namatk=".$row['namatk']."'>Edit</a></td>";
                echo "<td><a href='hapusdaftartk.php?namatk=".$row['namatk']."'>Hapus</a></td>";
                echo "<td><a href='https://api.whatsapp.com/send?phone=".$row['nohandphonetk']."'>Hubungi Siswa</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

    </thead>
</table></div>


<!-- Feather Icons -->
<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
