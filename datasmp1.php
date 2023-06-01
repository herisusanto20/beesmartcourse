

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran SMP</title>
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
                <a href="datasiswa.php">Data Siswa</a>
                <!-- <a href="gaji.php">Penggajian</a> -->
                <!-- <a href="presensi.php">Presensi</a> -->
            </div>
            <div class="navbar-extra">
                <a href="login.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
        
        <h2 class="h2data">Data Pendaftaran SMP</h2>
<table cellspacing='0'>
    <thead>
        <!-- Filtering on -->
<?php
    include 'db.php';

    // Ambil nilai jenis kursus dari parameter GET (jika tersedia)
    $kursussmp = isset($_GET['kursussmp']) ? $_GET['kursussmp'] : '';

    // Validasi nilai jenis kursus
    $valid_kursussmp = ['Matematika', 'Desain Grafis', 'Pemrograman', 'Bahasa Inggris', 'IPA' ];
    if (!empty($kursussmp) && !in_array($kursussmp, $valid_kursussmp)) {
        echo "Jenis kursus tidak valid";
        exit();
    }

    // Filter data berdasarkan jenis kursus jika nilai jenis kursus tidak kosong
    $sql = "SELECT * FROM tb_smp";
    if (!empty($kursussmp)) {
        $sql .= " WHERE kursussmp = '$kursussmp'";
    }
    // Tambahkan kondisi ORDER BY pada query SQL
    $sql .= " ORDER BY tanggalsmp ASC";


    // Eksekusi query
    $result = mysqli_query($conn, $sql);
?>

<!-- Form untuk memfilter data berdasarkan jenis kursus -->
<form action="" method="get">
    <label>Pilih jenis kursus:</label>
    <select name="kursussmp">
        <option value="">Semua</option>
        <option value="Matematika" <?php if ($kursussmp == 'Matematika') echo 'selected'; ?>>Matematika</option>
        <option value="Desain Grafis" <?php if ($kursussmp == 'Desain Grafis') echo 'selected'; ?>>Desain Grafis</option>
        <option value="Pemrograman" <?php if ($kursussmp == 'Pemrograman') echo 'selected'; ?>>Pemrograman</option>
        <option value="Bahasa Inggris" <?php if ($kursussmp == 'Bahasa Inggris') echo 'selected'; ?>>Bahasa Inggris</option>
        <option value="IPA" <?php if ($kursussmp == 'IPA') echo 'selected'; ?>>IPA</option>
    </select>
    <input type="submit" value="Filter">
</form>

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
            <th>Keterangan</th>
            <th colspan="1">Konfirmasi</th>
        </tr>
    </thead>
    
        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['namasmp']."</td>";
                echo "<td>".$row['tanggalsmp']."</td>";
                echo "<td>".$row['kelassmp']."</td>";
                echo "<td>".$row['nohandphonesmp']."</td>";
                echo "<td>".$row['alamatsmp']."</td>";
                echo "<td>".$row['kursussmp']."</td>";
                echo "<td>".$row['jeniskursussmp']."</td>";
                echo "<td>".$row['statussmp']."</td>";
                echo "<td><a href='https://api.whatsapp.com/send?phone=".$row['nohandphonesmp']."'>Hubungi Siswa</a></td>";
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
