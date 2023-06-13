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
    .container {
        margin: 10px;
        margin-top: 7rem;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .container:hover {
        box-shadow: 0 4px 8px #3498db;
    }

    .sub-container {
        margin-top: 20px;
        flex-basis: 100%;
    }

    .course-container {
        margin-top: 10px;
        padding: 10px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    .course-container h5 {
        margin: 0;
        font-size: 16px;
        font-weight: bold;
    }

    .course-container p {
        margin: 5px 0;
        font-size: 14px;
    }

    @media (min-width: 768px) {
        .sub-container {
            flex-basis: calc(50% - 10px);
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
<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");
$query = "SELECT tabel, kursus, jenis_kursus, kuota FROM tb_kuota";
$result = mysqli_query($koneksi, $query);

// Periksa apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
    // Simpan data kursus berdasarkan kolom tabel
    $kursus_data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $tabel = $row["tabel"];

        // Ganti nama kolom "tabel" menjadi label yang lebih deskriptif
        if ($tabel === "tb_tk") {
            $label_tabel = "TK";
        } elseif ($tabel === "tb_sd") {
            $label_tabel = "SD";
        } elseif ($tabel === "tb_smp") {
            $label_tabel = "SMP";
        } elseif ($tabel === "tb_data") {
            $label_tabel = "SMA";
        } else {
            $label_tabel = $tabel;
        }

        // Tambahkan data kursus ke array
        if (!isset($kursus_data[$label_tabel])) {
            $kursus_data[$label_tabel] = array();
        }

        $kursus = $row["kursus"];
        $jenis_kursus = $row["jenis_kursus"];
        $kuota = $row["kuota"];

        // Tambahkan data jenis kursus dan kuota ke array
        if (!isset($kursus_data[$label_tabel][$kursus])) {
            $kursus_data[$label_tabel][$kursus] = array();
        }
        if (!isset($kursus_data[$label_tabel][$kursus][$jenis_kursus])) {
            $kursus_data[$label_tabel][$kursus][$jenis_kursus] = $kuota;
        } else {
            $kursus_data[$label_tabel][$kursus][$jenis_kursus] += $kuota;
        }
    }

    // Urutkan array berdasarkan kolom tabel
    $urutan_tabel = array('TK', 'SD', 'SMP', 'SMA');
    $kursus_data = array_replace(array_flip($urutan_tabel), $kursus_data);

    // Tampilkan data dalam kontainer
    foreach ($kursus_data as $tabel => $kursus) {
        echo '<div class="container">';
        echo '<h3>Kolom Tabel: ' . $tabel . '</h3>';

        foreach ($kursus as $nama_kursus => $jenis_kursus_data) {
            echo '<div class="sub-container">';
            echo '<h4>Kursus: ' . $nama_kursus . '</h4>';

            foreach ($jenis_kursus_data as $jenis_kursus => $kuota) {
                echo '<div class="course-container">';
                echo '<h5>Jenis Kursus: ' . $jenis_kursus . '</h5>';
                echo '<p>Kuota: ' . $kuota . '</p>';
                echo '</div>';
            }

            echo '</div>';
        }

        echo '</div>';
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
 <!-- Feather -->
 <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>