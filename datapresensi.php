<!DOCTYPE html>
<html>
<head>
	<title>Tabel Presensi</title>
		     <!-- Fonts -->
			 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Swipe CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <!-- My Style CSS
        <link rel="stylesheet" href="css/style.css"> -->
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
        h1{
            text-align: center;
			font-family: "Poppins", sans-serif;
        }

		th, td {
			font-family: "Poppins", sans-serif;
			padding: 8px;
			text-align: center;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		th {
			font-family: "Poppins", sans-serif;
			background-color: blue;
			color: white;
		}
		.ketik {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Tabel Presensi</h1>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="ketik">
		<label for="keyword">Silakan Ketik:</label>
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
		$sql = "SELECT * FROM presensi WHERE nama_tutor LIKE '%$keyword%' OR tanggal_presensi LIKE '%$keyword%' OR nama_siswa LIKE '%$keyword%' OR kursus_presensi LIKE '%$keyword%' OR jenis_presensi LIKE '%$keyword%'";
	} else {
		// Query untuk mengambil semua data dari tabel pertemuan
		$sql = "SELECT * FROM presensi ORDER BY tanggal_presensi ASC";
	}

	$result = mysqli_query($conn, $sql);
	if (!$result) {
		die("Query failed: " . mysqli_error($conn));
	}
	?>
	<table>
		<thead>
			<tr>
				<th>Nama Tutor</th>
				<th>Tanggal Presensi</th>
				<th>Nama Siswa</th>
				<th>Kursus</th>
				<th>Jenis Kursus</th>
				<th>Bukti Presensi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row["nama_tutor"]; ?></td>
				<td><?php echo $row["tanggal_presensi"]; ?></td>
				<td><?php echo $row["nama_siswa"]; ?></td>
				<td><?php echo $row["kursus_presensi"]; ?></td>
				<td><?php echo $row["jenis_presensi"]; ?></td>
				<td><img src="uploads/<?php echo $row["bukti_presensi"]; ?>" width="100"></td>
			</tr>
			<?php
					}
				} else {
					echo "<tr><td colspan='5'>Tidak ada data.</td></tr>";
				}
			?>
		</tbody>
	</table>
	<?php
	mysqli_close($conn);
	?>
	<!-- Feather -->
	<script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
