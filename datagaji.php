<!DOCTYPE html>
<html>
<head>
	<title>Data Pertemuan</title>
	     <!-- Fonts -->
		 <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
		
	<style>
    .laporan{
      align-items: center;
      background-color: orange;
      font-family: "Poppins", sans-serif;
      border-radius: 10px;
      color: white;
      margin-left: 80%;
    }
    .laporan:hover{
      background-color: rgba(6, 126, 246, 0.8);
    }
		/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1.4rem 7%;
  background-color: rgba(6, 126, 246, 0.8);
  border-bottom: 1px solid var(--primary);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
}

.navbar .navbar-logo {
  text-decoration: none;
  font-size: 2rem;
  font-weight: 700;
  color: #fffff0;
}

.navbar .navbar-logo span {
  color: orange;
}

.navbar .navbar-nav a {
  color: white;
  text-decoration: none;
  display: inline-block;
  font-size: 1.3rem;
  margin: 0 1rem;
}

.navbar .navbar-nav span {
  color: orange;
}

.navbar .navbar-nav a:hover {
  color: orange;
}

.navbar .navbar-nav a::after {
  content: "";
  display: block;
  padding-bottom: 0.5rem;
  border-bottom: 0.1rem solid orange;
  transform: scaleX(0);
  transition: 0.2s linear;
}

.navbar .navbar-nav a:hover::after {
  transform: scaleX(1);
}

.navbar .navbar-extra a {
  color: white;
  margin: 0 2rem;
}

.navbar-extras a {
  color: var(--primary);
  width: 5rem;
  margin: 0 8rem;
}

.navbar .navbar-extra a:hover {
  color: orange;
}
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}
		h1 {
			text-align: center;
			margin-top: 150px;
		}
		table {
			margin: 30px auto;
			border-collapse: collapse;
			background-color: #fff;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			width: 80%;
		}
		th, td {
			text-align: left;
			padding: 12px;
			border: 1px solid #ddd;
			font-size: 14px;
		}
		th {
			background-color: #f8f8f8;
			font-weight: bold;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		form {
			margin: 30px auto;
			text-align: center;
		}
		label {
			font-size: 18px;
			margin-right: 10px;
		}
		input[type="text"] {
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			margin-right: 10px;
		}
		input[type="submit"] {
			padding: 5px 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			background-color: orange;
			color: #fff;
			cursor: pointer;
		}
		input[type="submit"]:hover {
			background-color: blue;
		}

		/* media */
		/* leptop */
@media (max-width: 1700px) {
  #hamburger-menu {
    display: none;
  }
}

/* tablet */
@media (max-width: 758px) {
  html {
    font-size: 62.5%;
  }
  #hamburger-menu {
    display: inline-block;
  }
  .navbar .navbar-nav {
    position: absolute;
    top: 100%;
    right: -100%;
    background-color: rgba(6, 126, 246, 0.8);
    width: 30rem;
    height: 100vh;
    transition: 0.3s;
  }
  .navbar .navbar-nav.active {
    right: 0;
  }
  .navbar .navbar-nav a {
    color: white;
    display: block;
    margin: 1.5rem;
    padding: 0.5rem;
    font-size: 2rem;
  }
  .navbar .navbar-nav a::after {
    transform-origin: 0 0;
  }
  .navbar .navbar-nav a:hover::after {
    transform: scaleX(0.2);
  }
}
	</style>

</head>

	    <!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
            <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data Daftar</a>
                <a href="laporan_dataall.php">Laporan</a>
                <a href="datagaji.php">Penggajian</a>
                <a href="register.php">Daftar Akses</a>
                <a href="datapresensi.php">Presensi</a>
                
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
	<h1>Data Kelas Tutor BEE SMART COURSE</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="keyword">Tutor ID:</label>
		<input type="text" id="keyword" name="keyword">
		<input type="submit" value="Cari">
    
	</form>

	<table border="1">
		<thead>
			<tr>
				<th>ID Tutor</th>
				<th>ID Kursus</th>
				<th>Bulan</th>
				<th>Nama Siswa</th>
				<th>Jumlah Pertemuan</th>
				<th>Jenis Pertemuan</th>
				<th>Biaya Pertemuan</th>
				<th>Total Biaya Pertemuan</th>
			</tr>
		</thead>
		<tbody>
		<?php
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "registrasi");

    // Mengecek apakah form pencarian sudah di-submit
    if (isset($_POST['keyword'])) {
        $keyword = $_POST['keyword'];
        // Query untuk mencari data pertemuan berdasarkan keyword pada semua kolom
        $sql = "SELECT * FROM pertemuan WHERE tutor_id LIKE '%$keyword%'";
        // OR course_id LIKE '%$keyword%' OR tanggal_pertemuan LIKE '%$keyword%' OR namasiswa LIKE '%$keyword%' OR meeting_type LIKE '%$keyword%' OR meeting_fee LIKE '%$keyword%' OR total_fee LIKE '%$keyword%'
        
    } else {
        // Query untuk mengambil semua data dari tabel pertemuan
        $sql = "SELECT * FROM pertemuan";
    }
    
    $result = mysqli_query($conn, $sql);

    // Cek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Inisialisasi variabel total dengan nilai 0
        $total = 0;

        // Loop untuk menampilkan data pertemuan dan menghitung total keseluruhan
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["tutor_id"] . "</td>";
            echo "<td>" . $row["course_id"] . "</td>";
            echo "<td>" . $row["tanggal_pertemuan"] . "</td>";
            echo "<td>" . $row["namasiswa"] . "</td>";
            echo "<td>" . $row["jumlah_pertemuan"] . "</td>";
            echo "<td>" . $row["meeting_type"] . "</td>";
            echo "<td>" . $row["meeting_fee"] . "</td>";
            echo "<td>" . $row["total_fee"] . "</td>";

            echo "</tr>";

            // Menambahkan nilai meeting_fee pada variabel total
            $total += intval($row["total_fee"]);
        }

        // Menampilkan total keseluruhan
        echo "<tr><td colspan='7'>Total Keseluruhan</td><td>" . $total . "</td></tr>";
    } else {
        echo "<tr><td colspan='6'>Tidak ada data ditemukan</td></tr>";
    }

    // Menutup koneksi database
    mysqli_close($conn);
?>
  


		</tbody>
	</table>
  <a href="laporangaji.php?keyword=<?php echo $keyword; ?>">
  <button class="laporan">Laporan Gaji</button>
</a>
        <!-- Feather -->
        <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
