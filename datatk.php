

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
    <style>
    form.ketik {
        margin-bottom: 20px;
    }

    form.ketik label {
        display: block;
        margin-bottom: 5px;
    }

    form.ketik input[type="text"],
    form.ketik input[type="submit"] {
        padding: 8px;
        font-size: 16px;
    }

    form.ketik input[type="text"] {
        width: 200px;
    }

    form.ketik input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }

    form.ketik input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

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
                <a href="editkursus.php">Kursus</a>
                <!-- <a href="datagaji.php">Penggajian</a> -->
                <a href="register.php">Daftar Akses</a>
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
        
        <h2 class="h2data">Data Pendaftaran TK</h2>
        <div class="table-wrapper">
<table cellspacing='0'>
    <thead>
        <!-- sesi search on -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="ketik">
		<label for="keyword">Silakan Ketik : </label>
		<input type="text" id="keyword" name="keyword">
		<input type="submit" value="Cari">
	</form> <br>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "registrasi");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// Mengecek apakah form pencarian sudah di-submit
	if (isset($_POST['keyword'])) {
		$keyword = $_POST['keyword'];
		// Query untuk mencari data pertemuan berdasarkan keyword pada semua kolom
		$sql = "SELECT * FROM tb_tk WHERE namatk LIKE '%$keyword%' OR tanggaltk LIKE '%$keyword%' OR namaortutk LIKE '%$keyword%' OR nohandphonetk LIKE '%$keyword%' OR alamattk LIKE '%$keyword%' OR kursustk LIKE '%$keyword%' OR jeniskursustk LIKE '%$keyword%' OR statustk LIKE '%$keyword%'";
	} else {
		// Query untuk mengambil semua data dari tabel pertemuan
		$sql = "SELECT * FROM tb_tk ORDER BY tanggaltk ASC";
	}

	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die("Query failed: " . mysqli_error($conn));
	}
	?>
    <!-- sesi search off -->
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
