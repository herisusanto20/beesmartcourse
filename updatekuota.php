<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

// Membuat koneksi
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kursus = $_POST['kursus'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $kuota = $_POST['kuota'];
    $tabel = $_POST['tabel'];

    // Query untuk update kuota
    $query = "UPDATE tb_kuota SET kuota = $kuota WHERE kursus = '$kursus' AND jenis_kursus = '$jenis_kursus'";

    if (mysqli_query($connection, $query)) {
        echo "Kuota berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan saat memperbarui kuota: " . mysqli_error($connection);
    }

    mysqli_close($connection);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Update Kuota</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
        }
        .container {
            max-width: 300px;
            margin: 0 auto;
            margin-top: 7rem;
            padding: 20px;
            background-color: orange;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 2rem;
            text-align: center;
            color: #333;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        select {
            height: 30px;
        }

        input[type="submit"] {
            background-color: #1e90ff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        input[type="submit"]:hover {
            background-color: orange;
        }
    </style>
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
</head>
<body>
    <!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data Daftar</a>
                <a href="laporan_dataall.php">Laporan</a>
                <a href="updatekuota.php">Kuota Pendaftaran</a>
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
        <div class="container">
        <h2>Form Update Kuota</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="kursus">Kursus:</label>
        <select name="kursus" id="kursus">
            <option value="Matematika">Matematika</option>
            <option value="IPA">IPA</option>
            <option value="Desain Grafis">Desain Grafis</option>
            <option value="Pemrograman">Pemrograman</option>
            <option value="Bahasa Inggris">Bahasa Inggris</option>
            <option value="Calistung">Calistung</option>
            <option value="Tematik">Tematik</option>
        </select>

        <br><br>

        <label for="jenis_kursus">Jenis Kursus:</label>
        <select name="jenis_kursus" id="jenis_kursus">
            <option value="Reguler">Reguler</option>
            <option value="Privat">Privat</option>
            <option value="Online">Online</option>
        </select>

        <br><br>

        <label for="kuota">Kuota:</label>
        <input type="number" name="kuota" id="kuota" required>

        <br><br>

        <label for="tabel">Tingkat:</label>
        <select name="tabel" id="tabel">
            <option value="tb_tk">TK</option>
            <option value="tb_sd">SD</option>
            <option value="tb_smp">SMP</option>
            <option value="tb_data">SMA</option>
        </select>

        <br><br>

        <input type="submit" value="Update Kuota">
    </form>
        </div>

    <!-- Feather -->
    <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
