<!DOCTYPE html>
<html>
<head>
	<title>Fitur Presensi</title>
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
		form {
			color: white;
			font-family: "Poppins", sans-serif;
			align-items: center;
			display: inline-block;
			margin: 20px;
			padding: 20px;
			background-color: #1e90ff;
			border: 1px solid white;
		}
    h1 {
		margin-top: 7rem;
		font-family: "Poppins", sans-serif;
        text-align: center;
        font-size: 36px;
    }

    .form-container {
        max-width: 500px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label {
		font-family: "Poppins", sans-serif;
        font-size: 18px;
		margin-bottom: 50px;
    }

    input[type=text], input[type=date], input[type=file] {
        width: 100%;
        font-size: 16px;
        margin-bottom: 10px;
        padding: 5px;
        border: 1px solid white;
        border-radius: 3px;
    }

    input[type=submit] {
  background-color: orange;
  color: white;
  padding: 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  width: 100%;
  transition: transform 0.3s ease-in-out;
}

input[type=submit]:hover {
  transform: scale(1.05);
}

</style>
</head>
<body>
<!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="datasiswa.php">Data Siswa</a>
                <!-- <a href="gaji.php">Penggajian</a> -->
                <a href="presensi.php">Presensi</a>
            </div>
            <div class="navbar-extra">
                <a href="login.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
    <h1>Fitur Presensi</h1>
    <div class="form-container">
        <form method="post" action="simpan_presensi.php" enctype="multipart/form-data">
            <label>Nama Tutor:</label>
            <input type="text" name="nama_tutor" required> <br>

            <label>Tanggal Presensi:</label>
            <input type="date" name="tanggal_presensi" required> <br>

            <label>Nama Siswa:</label>
            <input type="text" name="nama_siswa" required> <br>

			<label>Kursus :</label>
            <input type="text" name="kursus_presensi" required> <br>

			<label>Jenis Kursus :</label>
            <select  name="jenis_presensi" class="input-controll" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Reguler</option>
                            <option>Privat</option>
                            <option>Online</option>
                        </optgroup>
                        </select > <br> <br>

            <label>Bukti Presensi:</label>
            <input type="file" name="bukti_presensi" required> <br>

            <input type="submit" value="Simpan">
        </form>
    </div>


	<!-- Feather Icons -->
			<script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
</body>

</html>
