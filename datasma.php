

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran SMA</title>
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
                <a href="datapresensi.php">Presensi</a>
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
        
        <h2 class="h2data">Data Pendaftaran SMA</h2>
<table cellspacing='0'>
    <thead>
        <!-- Filtering on -->
<?php
    include 'db.php';

    // Ambil nilai jenis kursus dari parameter GET (jika tersedia)
    $kursus = isset($_GET['kursus']) ? $_GET['kursus'] : '';

    // Validasi nilai jenis kursus
    $valid_kursus = ['Matematika', 'Desain Grafis', 'Pemrograman', 'Bahasa Inggris', 'IPA' ];
    if (!empty($kursus) && !in_array($kursus, $valid_kursus)) {
        echo "Jenis kursus tidak valid";
        exit();
    }

    // Filter data berdasarkan jenis kursus jika nilai jenis kursus tidak kosong
    $sql = "SELECT * FROM tb_data";
    if (!empty($kursus)) {
        $sql .= " WHERE kursus = '$kursus'";
    }
    // Tambahkan kondisi ORDER BY pada query SQL
    $sql .= " ORDER BY tanggal ASC";


    // Eksekusi query
    $result = mysqli_query($conn, $sql);
?>

<!-- Form untuk memfilter data berdasarkan jenis kursus -->
<form action="" method="get">
    <label>Pilih jenis kursus:</label>
    <select name="kursus">
        <option value="">Semua</option>
        <option value="Matematika" <?php if ($kursus == 'Matematika') echo 'selected'; ?>>Matematika</option>
        <option value="Desain Grafis" <?php if ($kursus == 'Desain Grafis') echo 'selected'; ?>>Desain Grafis</option>
        <option value="Pemrograman" <?php if ($kursus == 'Pemrograman') echo 'selected'; ?>>Pemrograman</option>
        <option value="Bahasa Inggris" <?php if ($kursus == 'Bahasa Inggris') echo 'selected'; ?>>Bahasa Inggris</option>
        <option value="IPA" <?php if ($kursus == 'IPA') echo 'selected'; ?>>IPA</option>
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
            <th>Kelas</th>
            <th>No Handphone</th>
            <th>Alamat</th>
            <th>Kursus</th>
            <th>Jenis Kursus</th>
            <th>Status</th>
            <th colspan="3">Tambahan</th>
        </tr>
    </thead>
    
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['tanggal']."</td>";
                echo "<td>".$row['kelas']."</td>";
                echo "<td>".$row['no_handphone']."</td>";
                echo "<td>".$row['alamat']."</td>";
                echo "<td>".$row['kursus']."</td>";
                echo "<td>".$row['jenis_kursus']."</td>";
                echo "<td>".$row['statussma']."</td>";
                echo "<td><a href='editdaftarsma.php?nama=".$row['nama']."'>Edit</a></td>";
                echo "<td><a href='hapusdaftarsma.php?nama=".$row['nama']."'>Hapus</a></td>";
                echo "<td><a href='https://api.whatsapp.com/send?phone=".$row['no_handphone']."'>Hubungi Siswa</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

    </thead>
</table>
        </body>
            

<!-- Feather Icons -->
<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
