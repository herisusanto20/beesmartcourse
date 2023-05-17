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
    $kursus = $_POST['kursus'];
    
    // Memeriksa apakah masih ada kuota tersedia untuk kursus yang dipilih
    if ($kursus == 'Matematika' && $jenis_kursus == 'Reguler' && $sisaKuotaMatematika2 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMatematika2--;
        }
    }elseif ($kursus == 'Matematika' && $jenis_kursus == 'Privat' && $sisaKuotaMatematika3 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMatematika3--;
        }
    }elseif ($kursus == 'Matematika' && $jenis_kursus == 'Online' && $sisaKuotaMatematika4 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota Matematika
            $sisaKuotaMatematika4--;
        }
    }elseif ($kursus == 'IPA'  && $jenis_kursus == 'Reguler' && $sisaKuotaIPA2 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaIPA2--;
        }
    }elseif ($kursus == 'IPA'  && $jenis_kursus == 'Privat' && $sisaKuotaIPA3 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaIPA3--;
        }
    }elseif ($kursus == 'IPA'  && $jenis_kursus == 'Online' && $sisaKuotaIPA4 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaIPA4--;
        }
    } elseif ($kursus == 'Desain Grafis'   && $jenis_kursus == 'Reguler' && $sisaKuotaDesain2 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaDesain2--;
        }
    }elseif ($kursus == 'Desain Grafis'  && $jenis_kursus == 'Privat' && $sisaKuotaDesain3 > 0) {
        // Memasukkan data pengguna ke dalam tabel
        $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            // Mengurangi sisa kuota IPA
            $sisaKuotaDesain3--;
        }    
}elseif ($kursus == 'Desain Grafis'  && $jenis_kursus == 'Online' && $sisaKuotaDesain4 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaDesain4--;
    }    
}elseif ($kursus == 'Pemrograman'  && $jenis_kursus == 'Reguler' && $sisaKuotaPem2 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaPem2--;
    }    
}elseif ($kursus == 'Pemrograman'  && $jenis_kursus == 'Privat' && $sisaKuotaPem3 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaPem3--;
    }    
}elseif ($kursus == 'Pemrograman'  && $jenis_kursus == 'Online' && $sisaKuotaPem4 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaPem4--;
    }    
}elseif ($kursus == 'Bahasa Inggris'  && $jenis_kursus == 'Reguler' && $sisaKuotaIng2 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaIng2--;
    }    
}elseif ($kursus == 'Bahasa Inggris'  && $jenis_kursus == 'Privat' && $sisaKuotaIng3 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaIng3--;
    }    
}elseif ($kursus == 'Bahasa Inggris'  && $jenis_kursus == 'Online' && $sisaKuotaIng4 > 0) {
    // Memasukkan data pengguna ke dalam tabel
    $query = "INSERT INTO tb_data (kursus) VALUES ('$kursus')";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        // Mengurangi sisa kuota IPA
        $sisaKuotaIng4--;
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
    <title>Pendaftaran SMA</title>
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
                    <h3>Pendaftaran SMA</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <!-- <input type="text" name="data_id" placeholder="ID Anda" class="input-controll" required> <br> -->
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-controll" required> <br>
                        <script>
    function setTodayDate() {
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0');
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var year = today.getFullYear();
        var todayDate = year + '-' + month + '-' + day;

        document.getElementById("tanggal").setAttribute("value", todayDate);
    }
</script>

<p>Tanggal Pendaftaran</p>
<input type="date" name="tanggal" id="tanggal" placeholder="Tanggal" class="input-controll" readonly required> <br>

<script>
    setTodayDate();
</script>
                        <select name="kelas" class="input-controll" required>
                        <optgroup label="Kelas">
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </optgroup>
                        </select>
                        <input type="text" name="no_handphone" id="no_handphone" placeholder="No Handphone atau WA, contoh: 62819157788649" class="input-controll" required>
<span id="error-message" class="error-message"></span>

<script>
   var input = document.getElementById('no_handphone');
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
                        <input type="text" name="alamat" placeholder="Alamat" class="input-controll" required>
                        <input type="hidden" name="statussma" placeholder="Keterangan Tambahan" class="input-controll" required>
                        <select  name="kursus" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Matematika</option>
                        </optgroup>
                        </select >
                        <select  name="jenis_kursus" class="input-controll" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Privat</option>
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
                             $nama = $_POST['nama'];
                             $tanggal = $_POST['tanggal'];
                             $kelas = $_POST['kelas'];
                             $no_handphone = $_POST['no_handphone'];
                             $alamat = $_POST['alamat'];
                             $statussma = $_POST['statussma'];
                             $kursus = $_POST['kursus'];
                             $jenis_kursus = $_POST['jenis_kursus'];
                    
                            $query = "INSERT INTO tb_data (nama, tanggal, kelas, no_handphone, alamat, statussma, kursus, jenis_kursus) 
                            VALUES ('$nama', '$tanggal', '$kelas', '$no_handphone', '$alamat', '$statussma', '$kursus', '$jenis_kursus')";

                            if(mysqli_query($connection, $query)) {
                                echo "Data berhasil disimpan. Terima kasih sudah mendaftar sobat BEE SMART COURSE";
                                    } else {
                                                echo "Data gagal disimpan ke database: " . mysqli_error($connection);
                                            }
                                            // echo "<script>alert('Terima kasih sudah mendaftar di BEE SMART COURSE');</script>";
                                            echo "<meta http-equiv=refresh content=0.1;URL='kuotasma.php'>";
                                            
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