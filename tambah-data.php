

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
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

            <<!-- Navbar Start -->
<nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data Registrasi</a>
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="index.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End --><!-- Navbar Start -->
            <nav class="navbar">
            <a href="dasboard.php" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="dasboard.php">Home</a>
                <a href="data-registrasi.php">Data Registrasi</a>
            </div>
            <div class="navbar-extra">
                <!-- <a href="#" id="search"><i data-feather="search"></i></a>
                <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a> -->
                <a href="index.php">
                        <i data-feather="log-out"></i>
                    </a>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>

        <!-- Navbar End -->
        <!-- konten -->
        <section>
        <div class="sections">
                <div class="containers">
                    <h3>Tambah Data</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="data_id" placeholder="ID Anda" class="input-controll" required> <br>
                        <input type="date" name="tanggal" placeholder="Tanggal" class="input-controll" required> <br>
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-controll" required> <br>
                        <input type="text" name="kelas" placeholder="Kelas" class="input-controll" required>
                        <input type="email" name="email" placeholder="Email" class="input-controll" required>
                        <input type="text" name="no_handphone" placeholder="No Handphone" class="input-controll" required>
                        <input type="text" name="alamat" placeholder="Alamat" class="input-controll" required>
                        <select  name="kursus" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Matematika</option>
                            <option>Desain Grafis</option>
                            <option>Pemrograman</option>
                            <option>Bahasa Inggris</option>
                            <option>IPA</option>
                            <option>Calistung</option>
                            <option>Tematik</option>
                        </optgroup>
                        </select >
                        <select  name="jenis_kursus" class="input-controll" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Reguler</option>
                            <option>Privat</option>
                            <option>Online</option>
                        </optgroup>
                        </select >
                        <!-- <input type="text" name="jenis_kursus" placeholder="Jenis Kursus" class="input-controll" required> -->
                        <input type="submit" value="DAFTAR" class="btn" name="proses">
                       </form> 
                       
                       <?php
                        include 'db.php';
                        if(isset($_POST['proses'])) {
                            mysqli_query($conn, "insert into tb_data set
                            data_id = '$_POST[data_id]',
                            tanggal = '$_POST[tanggal]',
                            nama = '$_POST[nama]',
                            kelas = '$_POST[kelas]',
                            email = '$_POST[email]',
                            no_handphone = '$_POST[no_handphone]',
                            alamat = '$_POST[alamat]',
                            kursus = '$_POST[kursus]',
                            jenis_kursus = '$_POST[jenis_kursus]'");
                    
                            echo "DATA REGISTRASI BARU TERSIMPAN";
                            echo "<meta http-equiv=refresh content=1;URL='laporan_data.php'>";
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