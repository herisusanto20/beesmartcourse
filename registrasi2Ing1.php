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
    $kursus = $_POST['kursussmp'];
    
    // Memeriksa apakah masih ada kuota tersedia untuk kursus yang dipilih
    if ($kursus == 'Matematika' && $jeniskursussmp == 'Reguler' && $sisaKuotaMatematika > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMatematika--;
        }
    }elseif ($kursus == 'Matematika' && $jeniskursussmp == 'Privat' && $sisaKuotaMatematika1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMatematika1--;
        }
    } elseif ($kursus == 'IPA'  && $jeniskursussmp == 'Reguler' && $sisaKuotaIPA > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaIPA--;
        }
    }elseif ($kursus == 'IPA'  && $jeniskursussmp == 'Reguler' && $sisaKuotaIPA1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaIPA1--;
        }
    } elseif ($kursus == 'Desain Grafis'   && $jeniskursussmp == 'Reguler' && $sisaKuotaDesain > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaDesain--;
        }
    }elseif ($kursus == 'Desain Grafis'  && $jeniskursussmp == 'Privat' && $sisaKuotaDesain1 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaDesain1--;
        }    
}elseif ($kursus == 'Pemrograman'  && $jeniskursussmp == 'Reguler' && $sisaKuotaPem > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaPem--;
    }    
}elseif ($kursus == 'Pemrograman'  && $jeniskursussmp == 'Privat' && $sisaKuotaPem > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaPem--;
    }    
}elseif ($kursus == 'Bahasa Inggris'  && $jeniskursussmp == 'Reguler' && $sisaKuotaIng > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaIng--;
    }    
}elseif ($kursus == 'Bahasa Inggris'  && $jeniskursussmp == 'Privat' && $sisaKuotaIng1 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_smp (kursussmp) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaIng1--;
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
    <title>Pendaftaran Bahasa Inggris Privat</title>
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
                    <h3>Pendaftaran SMP</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <input type="text" name="data_id" placeholder="ID Anda" class="input-controll" required> <br> -->
                        <input type="text" name="namasmp" placeholder="Nama Lengkap" class="input-controll" required> <br>
                        <script>
    function setTodayDate() {
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0');
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var year = today.getFullYear();
        var todayDate = year + '-' + month + '-' + day;

        document.getElementById("tanggalsmp").setAttribute("value", todayDate);
    }
</script>

<p>Tanggal Pendaftaran</p>
<input type="date" name="tanggalsmp" id="tanggalsmp" placeholder="Tanggal" class="input-controll" readonly required> <br>

<script>
    setTodayDate();
</script>
                        <select name="kelassmp" class="input-controll" required>
                        <optgroup label="Kelas">
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </optgroup>
                        </select>
                        <input type="text" name="nohandphonesmp" id="nohandphonesmp" placeholder="No Handphone atau WA, contoh: 62819157788649" class="input-controll" required>
<span id="error-message" class="error-message"></span>

<script>
   var input = document.getElementById('nohandphonesmp');
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
                        <input type="text" name="alamatsmp" placeholder="Alamat" class="input-controll" required>
                        <input type="hidden" name="statussmp" placeholder="Keterangan Tambahan" class="input-controll" required>
                        <select  name="kursussmp" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Bahasa Inggris</option>
                        </optgroup>
                        </select >
                        <?php
// Inisialisasi variabel sisa kuota
$sisaKuotaIng = 5; // Contoh nilai awal, bisa diganti sesuai kebutuhan
$sisaKuotaIng1 = 3; // Contoh nilai awal, bisa diganti sesuai kebutuhan

// ...
?>
                        <select name="jeniskursussmp" class="input-controll" required>
    <optgroup label="Jenis Kursus">
        <option <?php echo ($sisaKuotaIng1 > 3) ? 'disabled' : ''; ?>>Privat</option>
    </optgroup>
</select>

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
                             $namasmp = $_POST['namasmp'];
                             $tanggalsmp = $_POST['tanggalsmp'];
                             $kelassmp = $_POST['kelassmp'];
                             $nohandphonesmp = $_POST['nohandphonesmp'];
                             $alamatsmp = $_POST['alamatsmp'];
                             $statussmp = $_POST['statussmp'];
                             $kursussmp = $_POST['kursussmp'];
                             $jeniskursussmp = $_POST['jeniskursussmp'];
                    
                            $query = "INSERT INTO tb_smp (namasmp, tanggalsmp, kelassmp, nohandphonesmp, alamatsmp, statussmp, kursussmp, jeniskursussmp) 
                            VALUES ('$namasmp', '$tanggalsmp', '$kelassmp', '$nohandphonesmp', '$alamatsmp', '$statussmp', '$kursussmp', '$jeniskursussmp')";

                            if(mysqli_query($connection, $query)) {
                                echo "Data berhasil disimpan. Terima kasih sudah mendaftar sobat BEE SMART COURSE";
                                    } else {
                                                echo "Data gagal disimpan ke database: " . mysqli_error($connection);
                                            }
                                            echo "<meta http-equiv=refresh content=0.1;URL='kuotasmp.php'>";
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