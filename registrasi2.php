

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran SMP</title>
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
                        <p>Tanggal Pendaftaran</p>
                        <input type="date" name="tanggalsmp" placeholder="Tanggal" class="input-controll" required> <br>
                        <select name="kelassmp" class="input-controll" required>
                        <optgroup label="Kelas">
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                        </optgroup>
                        </select>
                        <input type="text" name="nohandphonesmp" placeholder="No Handphone, contoh : 62819157788649" class="input-controll" required>
                        <input type="text" name="alamatsmp" placeholder="Alamat" class="input-controll" required>
                        <input type="text" name="statussmp" placeholder="Keterangan Tambahan" class="input-controll" required>
                        <select  name="kursussmp" class="input-controll" required>
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
                        <select  name="jeniskursussmp" class="input-controll" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Reguler</option>
                            <option>Privat</option>
                            <option>Online</option>
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