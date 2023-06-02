

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
                <a href="data-registrasi.php">Data</a>
                <a href="laporan_dataall.php">Laporan</a>
                <a href="updatekuota.php">Kuota</a>
                <a href="tambah_kuota.php">Tambah Kursus</a>
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
        <section class="pilih">
        <a href="laporan_datatk.php" class="cta1">Kelas TK</a>
                <a href="laporan_datasd.php" class="cta1">Kelas SD</a>
                <a href="laporan_datasmp.php" class="cta1">Kelas SMP</a>
                <a href="laporan_data.php" class="cta1">Kelas SMA</a>
        </section>
<!-- Feather Icons -->
<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
