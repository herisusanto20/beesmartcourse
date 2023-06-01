<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
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
		/* gaji */
		.h1form {
  margin-top: 7rem;
  text-align: center;
  font-family: "Poppins", sans-serif;
}

form {
  color: white;
  display: flex;
  flex-direction: column;
  font-family: "Poppins", sans-serif;
  font-size: 25px;
  padding: 20px;
  background-color: #1e90ff;
  border-radius: 10px;
  max-width: 600px;
  margin: 0 auto;
}

label {
  text-align: center;
  margin-bottom: 10px;
  font-weight: bold;
  align-items: center;
}

input[type="date"],
input[type="number"],
input[type="radio"],
select {
  text-align: center;
  align-items: center;
  margin-bottom: 20px;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  width: 100%;
}

select {
  margin-top: 20px;
  width: 100%;
}

input[type="submit"] {
  background-color: blue;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: red;
}


	</style>
</head>
<body>
	<!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="datasiswa.php">Data Siswa</a>
                <a href="gaji.php">Penggajian</a>
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
	<h1 class="h1form">Form Input Data Pertemuan</h1>
	<form action="proses_pertemuan.php" method="POST">
	<label>Tutor:</label>
		<select name="tutor_id">
			<option value="">-- ID Tutor --</option>
			<?php
				// Koneksi ke database
				$conn = mysqli_connect("localhost", "root", "", "registrasi");

				// Query untuk mengambil data dari tabel tutor
				$sql = "SELECT * FROM tutor";

				$result = mysqli_query($conn, $sql);

				// Loop untuk menampilkan data tutor pada dropdown
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<option value='" . $row['tutor_id'] . "'>" . $row['name'] . "</option>";
				}
			?>
		</select>
		<label>Kursus:</label>
		<select name="course_id">
			<option value="">-- Pilih Kursus --</option>
			<?php
				// Query untuk mengambil data dari tabel kursus
				$sql = "SELECT * FROM kursus";

				$result = mysqli_query($conn, $sql);

				// Loop untuk menampilkan data kursus pada dropdown
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<option value='" . $row['id_kursus'] . "'>" . $row['course_name'] . "</option>";
				}
			?>
		</select>
		<label>Nama Siswa:</label>
		<input type="text" name="namasiswa" required>
		<label>Bulan:</label>
		<input type="text" name="tanggal_pertemuan" required>

		<label>Jumlah Pertemuan:</label>
		<input type="number" name="jumlah_pertemuan" required>

		<label>Jenis Pertemuan:</label>
				<label for="regular">Reguler</label>
		<input type="radio" id="regular" name="meeting_type" value="reguler">

		<label for="private">Privat</label>
		<input type="radio" id="private" name="meeting_type" value="privat">

		<label for="online">Online</label>
		<input type="radio" id="online" name="meeting_type" value="online">

		<label>Biaya Pertemuan:</label>
		<input type="number" name="meeting_fee" required>

		<input type="submit" value="Kirim">
	</form>

	<!-- Feather Icons -->
	<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
</body>
</html>
