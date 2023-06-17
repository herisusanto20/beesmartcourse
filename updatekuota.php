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
    // $kuota = $_POST['kuota'];
    $tabel = $_POST['tabel'];

  }  if (isset($_POST['kuota'])) {
    $kuota = $_POST['kuota'];
    // Query untuk update kuota
    $query = "UPDATE tb_kuota SET kuota = '$kuota' WHERE kursus = '$kursus' AND jenis_kursus = '$jenis_kursus'";

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
                <a href="data-registrasi.php">Data</a>
                <a href="laporan_dataall.php">Laporan</a>
                <!-- <a href="updatekuota.php">Kuota</a> -->
                <a href="tampildata.php">Kursus</a>
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
        <div class="container">
    <h2>Form Update Kuota</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="tabel">Tingkat:</label>
<select name="tabel" id="tabel" onchange="updateKursusOptions()">
    <option value="tb_tk">TK</option>
    <option value="tb_sd">SD</option>
    <option value="tb_smp">SMP</option>
    <option value="tb_data">SMA</option>
</select>

<label for="kursus">Kursus:</label>
<select name="kursus" id="kursus"></select>

<script>
function updateKursusOptions() {
    // Ambil nilai tingkat yang dipilih
    var selectedTingkat = document.getElementById("tabel").value;
    
    // Ambil elemen dropdown kursus
    var kursusDropdown = document.getElementById("kursus");
    
    // Kosongkan dropdown kursus
    kursusDropdown.innerHTML = "";
    
    // Buat permintaan AJAX ke file PHP untuk mengambil data kursus yang sesuai
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse JSON response
            var response = JSON.parse(xhr.responseText);
            
            // Loop untuk menambahkan opsi kursus ke dropdown
            response.forEach(function(kursus) {
                var option = document.createElement("option");
                option.value = kursus;
                option.textContent = kursus;
                kursusDropdown.appendChild(option);
            });
        }
    };
    
    // Buat URL dengan parameter tingkat yang dipilih
    var url = "get_kursus.php?tabel=" + selectedTingkat;
    
    // Kirim permintaan GET ke file PHP
    xhr.open("GET", url, true);
    xhr.send();
}

// Panggil fungsi updateKursusOptions saat halaman dimuat
window.onload = updateKursusOptions;
</script>


        <br><br>

        <label for="jenis_kursus">Jenis Kursus:</label>
        <br>
        <input type="checkbox" name="jenis_kursus[]" value="Reguler"> Reguler<br>
        <input type="checkbox" name="jenis_kursus[]" value="Privat"> Privat<br>
        <input type="checkbox" name="jenis_kursus[]" value="Online"> Online (Khusus SMA)<br>

        <br><br>

        

        <br><br>

        <input type="submit" value="Update Kuota">
    </form>
</div>

<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "registrasi");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tabel = $_POST['tabel'];
    $jenis_kursus = $_POST['jenis_kursus'];

    // Insert atau update data kuota ke tabel tb_kuota
    $kuota = 0;
    foreach ($jenis_kursus as $jenis) {

        if ($jenis === 'Reguler') {
            $kuota = 5;
        } elseif ($jenis === 'Privat') {
            $kuota = 2;
        } elseif ($jenis === 'Online') {
            $kuota = 5;
        }

        // Ambil nilai kursus berdasarkan kolom "kursus" dari tabel tb_kuota
        $kursus = $_POST['kursus'];

        // Hapus data kuota sebelumnya untuk jenis kursus dan tabel yang dipilih
        $deleteQuery = "DELETE FROM tb_kuota WHERE jenis_kursus = '$jenis' AND tabel = '$tabel' AND kursus = '$kursus'";
        mysqli_query($conn, $deleteQuery);

        // Cek apakah data kuota sudah ada untuk jenis kursus dan tabel yang dipilih
        $checkQuery = "SELECT * FROM tb_kuota WHERE jenis_kursus = '$jenis' AND tabel = '$tabel' AND kursus = '$kursus'";
        $result = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($result) > 0) {
            // Jika data kuota sudah ada, lakukan update
            $updateQuery = "UPDATE tb_kuota SET kuota = $kuota WHERE jenis_kursus = '$jenis' AND tabel = '$tabel' AND kursus = '$kursus'";
            mysqli_query($conn, $updateQuery);
        } else {
            // Jika data kuota belum ada, lakukan insert
            $insertQuery = "INSERT INTO tb_kuota (jenis_kursus, kursus, kuota, tabel) VALUES ('$jenis', '$kursus', $kuota, '$tabel')";
            mysqli_query($conn, $insertQuery);
        }
    }

    // echo "<meta http-equiv=refresh content=0;URL='kuotatk1.php'>";
}

?>

        </div>

    <!-- Feather -->
    <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>
</html>
