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

// Memeriksa apakah formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data yang diisi oleh pengguna
    $kursus = $_POST['kursussd'];
    
    // Memeriksa apakah masih ada kuota tersedia untuk kursus yang dipilih
    if ($kursus == 'Matematika' && $jeniskursussd == 'Reguler' && $sisaKuotaMat > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMat--;
        }
    }elseif ($kursus == 'Matematika' && $jeniskursussd == 'Privat' && $sisaKuotaMat1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMat1--;
        }
    }elseif ($kursus == 'Bahasa Inggris' && $jeniskursussd == 'Reguler' && $sisaKuotaBing > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaBing--;
        }
    }elseif ($kursus == 'Bahasa Inggris' && $jeniskursussd == 'Privat' && $sisaKuotaBing1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaBing1--;
        }
    }elseif ($kursus == 'IPA' && $jeniskursussd == 'Reguler' && $sisaKuotaIP > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaIP--;
        }
    }
    elseif ($kursus == 'IPA' && $jeniskursussd == 'Privat' && $sisaKuotaIP1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_sd (kursussd) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaIP1--;
        }
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Matematika Reguler</title>
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
            <a href="index.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="index.php">Home</a>
                <a href="index.php#about">Tentang Kami</a>
                <a href="index.php#tutor">Tutor</a>
                <a href="index.php#course">Kursus</a>
                <a href="index.php#contact">Kontak</a>
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End -->
        <!-- konten -->
        <section>
        <div class="sections">
                <div class="containers">
                    <h3>Pendaftaran SD</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <input type="text" name="data_id" placeholder="ID Anda" class="input-controll" required> <br> -->
                        <input type="text" name="namasd" placeholder="Nama Lengkap" class="input-controll" required> <br>
                        
                        <script>
    function setTodayDate() {
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0');
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var year = today.getFullYear();
        var todayDate = year + '-' + month + '-' + day;

        document.getElementById("tanggalsd").setAttribute("value", todayDate);
    }
</script>

<p>Tanggal Pendaftaran</p>
<input type="date" name="tanggalsd" id="tanggalsd" placeholder="Tanggal" class="input-controll" readonly required> <br>

<script>
    setTodayDate();
</script>
                        <select name="kelassd" class="input-controll" required>
                        <optgroup label="Kelas">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                        </optgroup>
                        </select>
                        <input type="text" name="nohandphonesd" id="nohandphonesd" placeholder="No Handphone atau WA, contoh: 62819157788649" class="input-controll" required>
<span id="error-message" class="error-message"></span>

<script>
   var input = document.getElementById('nohandphonesd');
var errorMessage = document.getElementById('error-message');

input.addEventListener('input', function() {
  var pattern = /^[0-9]{10,14}$/;
  var isValid = pattern.test(input.value);

  if (!isValid) {
    errorMessage.textContent = 'Nomor handphone harus terdiri dari 10 hingga 14 digit angka';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
});

</script>
                        <input type="text" name="alamatsd" placeholder="Alamat" class="input-controll" required>
                        <input type="hidden" name="statussd" placeholder="Keterangan" class="input-controll" required>
                        <select  name="kursussd" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Matematika</option>
                        </optgroup>
                        </select >
                        <select  name="jeniskursussd" class="input-controll" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Reguler</option>
                        </optgroup>
                        </select >
                        <!-- <p>Tanggal Masuk</p>
                        <input type="date" name="tanggalmasuk" placeholder="Tanggalmasuk" class="input-controll" required> <br> -->
                        <!-- <input type="text" name="jenis_kursus" placeholder="Jenis Kursus" class="input-controll" required> -->
                        <input type="submit" value="DAFTAR" class="btn" name="proses">
                       </form> 
                       
                       <?php
                        // membuat koneksi ke database
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "registrasi";

                        // membuat koneksi
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        if (isset($_POST['proses'])) {
                             $namasd = $_POST['namasd'];
                             $tanggalsd = $_POST['tanggalsd'];
                             $kelassd = $_POST['kelassd'];
                             $nohandphonesd = $_POST['nohandphonesd'];
                             $alamatsd = $_POST['alamatsd'];
                             $statussd = $_POST['statussd'];
                             $kursussd = $_POST['kursussd'];
                             $jeniskursussd = $_POST['jeniskursussd'];
                    
                            $query = "INSERT INTO tb_sd (namasd, tanggalsd, kelassd, nohandphonesd, alamatsd, statussd, kursussd, jeniskursussd) 
                            VALUES ('$namasd', '$tanggalsd', '$kelassd', '$nohandphonesd', '$alamatsd', '$statussd', '$kursussd', '$jeniskursussd')";

                            if(mysqli_query($connection, $query)) {
                                echo "Data berhasil disimpan ke database.";
                                    } else {
                                                echo "Data gagal disimpan ke database: " . mysqli_error($connection);
                                            }
                                            echo "<meta http-equiv=refresh content=0.1;URL='kuotasd.php'>";
                        }
                        ?>
                </div>
            </div>
        </section>
                <?php
                // Mengecek apakah formulir telah dikirim
                if (isset($_POST['proses'])) {
                    // Kode koneksi ke database
                    
                    // Kode penyimpanan data formulir ke tabel tb_sd
                    
                    // Mengurangi kuota
                    $query = "SELECT COUNT(*) AS total FROM tb_sd";
                    $result = mysqli_query($connection, $query);
                
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $sisaKuota = 5 - $row['total']; // Menghitung sisa kuota
                
                        // Mengurangi kuota jika masih ada sisa
                        if ($sisaKuota > 0) {
                            $query = "UPDATE tb_kuota SET sisa_kuota = sisa_kuota - 1";
                            mysqli_query($connection, $query);
                        }
                    }
                }
                
                mysqli_close($connection);
                ?>

        <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>

</html>