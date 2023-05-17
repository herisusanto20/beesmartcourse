<!-- kuota -->
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
    $kursus = $_POST['kursustk'];
    
    // Memeriksa apakah masih ada kuota tersedia untuk kursus yang dipilih
    if ($kursus == 'Calistung' && $jeniskursustk == 'Reguler' && $sisaKuotaCal > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_tk (kursustk) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaCal--;
        }
    }elseif ($kursus == 'Calistung' && $jeniskursustk == 'Privat' && $sisaKuotaCal1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_tk (kursustk) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaCal1--;
        }
    }elseif ($kursus == 'Tematik' && $jeniskursustk == 'Reguler' && $sisaKuotaTem > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_tk (kursustk) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaTem--;
        }
    }elseif ($kursus == 'Tematik' && $jeniskursustk == 'Privat' && $sisaKuotaTem1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_tk (kursustk) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaTem1--;
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
    <title>Pendaftaran Tematik Reguler</title>
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
                    <h3>Pendaftaran TK</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <input type="text" name="data_id" placeholder="ID Anda" class="input-controll" required> <br> -->
                        <input type="text" name="namatk" placeholder="Nama Lengkap" class="input-controll" required> <br>
                        <script>
    function setTodayDate() {
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0');
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var year = today.getFullYear();
        var todayDate = year + '-' + month + '-' + day;

        document.getElementById("tanggaltk").setAttribute("value", todayDate);
    }
</script>

<p>Tanggal Pendaftaran</p>
<input type="date" name="tanggaltk" id="tanggaltk" placeholder="Tanggal" class="input-controll" readonly required> <br>

<script>
    setTodayDate();
</script>

                        <input type="text" name="namaortutk" placeholder="Nama Orang Tua" class="input-controll" required>
                        <input type="text" name="nohandphonetk" id="nohandphonetk" placeholder="No Handphone atau WA, contoh: 62819157788649" class="input-controll" required>
<span id="error-message" class="error-message"></span>

<script>
   var input = document.getElementById('nohandphonetk');
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
                        <input type="text" name="alamattk" placeholder="Alamat" class="input-controll" required>
                        <input type="hidden" name="statustk" placeholder="Keterangan" class="input-controll">
                        <select  name="kursustk" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Tematik</option>
                        </optgroup>
                        </select >
                        <select  name="jeniskursustk" class="input-controll" required>
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
    $namatk = $_POST['namatk'];
    $tanggaltk = $_POST['tanggaltk'];
    $namaortutk = $_POST['namaortutk'];
    $nohandphonetk = $_POST['nohandphonetk'];
    $alamattk = $_POST['alamattk'];
    $kursustk = $_POST['kursustk'];
    $statustk = $_POST['statustk'];
    $jeniskursustk = $_POST['jeniskursustk'];

    $query = "INSERT INTO tb_tk (namatk, tanggaltk, namaortutk, nohandphonetk, alamattk, kursustk, statustk, jeniskursustk) 
              VALUES ('$namatk', '$tanggaltk', '$namaortutk', '$nohandphonetk', '$alamattk', '$kursustk', '$statustk', '$jeniskursustk')";

    if(mysqli_query($connection, $query)) {
        echo "Data berhasil disimpan ke database.";
    } else {
        echo "Data gagal disimpan ke database: " . mysqli_error($connection);
    }
    echo "<meta http-equiv=refresh content=0.1;URL='kuotatk.php'>";
}
?>


                </div>
            </div>
        </section>
        
            

        <script>
            feather.replace()
          </script>
          <!-- Script buat hamburger -->
          <script src="js/script.js"></script>
</body>

</html>