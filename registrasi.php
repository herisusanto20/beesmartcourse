

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
                        <p>Tanggal Pendaftaran</p>
                        <input type="date" name="tanggal" placeholder="Tanggal" class="input-controll" required> <br>
                        <select name="kelas" class="input-controll" required>
                        <optgroup label="Kelas">
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                        </optgroup>
                        </select>
                        <input type="text" name="no_handphone" placeholder="No Handphone, contoh : 62819157788649" class="input-controll" required>
                        <input type="text" name="alamat" placeholder="Alamat" class="input-controll" required>
                        <input type="text" name="statussma" placeholder="Keterangan Tambahan" class="input-controll" required>
                        <select  name="kursus" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Matematika</option>
                            <option>Desain Grafis</option>
                            <option>Pemrograman</option>
                            <option>Bahasa Inggris</option>
                            <option>IPA</option>
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