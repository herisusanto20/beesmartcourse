

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
        
        <h2 class="h2data">Data Pendaftaran TK</h2>
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
            <th colspan="2">Konfirmasi</th>
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
                echo "<td><a href='https://api.whatsapp.com/send?phone=".$row['nohandphonetk']."'>Hubungi Siswa</a></td>";
                echo "</tr>";
            }
        ?>
    </tbody>

    </thead>
</table>

<?php
if(isset($_GET['kode'])){
    mysqli_query($conn, "delete from tb_tk where no_handphone='$_GET[kode]'");

    echo "Data Telah Terhapus";
    echo "<meta http-equiv=refresh content=2;URL='data-registrasi.php'>";
}
?>

<!-- Feather Icons -->
<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
