

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
            <!-- Navbar Start -->
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
                    <h3>Tambah Data Siswa</h3>
                    <div class="boxsss">
                    <form action="#" method="POST">
        <label for="nama">Nama</label> <br>
		<input type="text" id="nama" name="nama" required><br><br>
        <label for="jadwal">Jadwal</label> <br>
        <select  name="jadwal" id="jadwal" class="jadwal" required>
                        <optgroup label="Senin">
                            <option>Senin = 12.00-13.00 WIB</option>
                            <option>Senin = 13.00-14.00 WIB</option>
                            <option>Senin = 14.00-15.00 WIB</option>
                            <option>Senin = 16.00-17.00 WIB</option>
                        </optgroup>
                        <optgroup label="Selasa">
                            <option>Selasa = 11.00-12.00 WIB</option>
                            <option>Selasa = 13.00-14.00 WIB</option>
                        </optgroup>
                        <optgroup label="Kamis">
                            <option>Kamis = 08.00-09.00 WIB</option>
                            <option>Kamis = 10.00-11.00 WIB</option>
                            <option>Kamis = 12.00-13.00 WIB</option>
                            <option>Kamis = 14.00-15.00 WIB</option>
                            <option>Kamis = 16.00-17.00 WIB</option>
                        </optgroup>
                        <optgroup label="Jum'at">
                            <option>Jum'at = 13.00-14.00 WIB</option>
                            <option>Jum'at = 15.00-17.00 WIB</option>
                        </optgroup>
                        </select > <br> <br>
                        <label for="kursuss">Kursus</label> <br>
                        <select  name="kursuss" class="input-controll" required>
                        <optgroup label="Kursus">
                            <option>Matematika</option>
                            <option>Desain Grafis</option>
                            <option>Pemrograman</option>
                            <option>Bahasa Inggris</option>
                            <option>IPA</option>
                            <option>Calistung</option>
                            <option>Tematik</option>
                        </optgroup>
                        </select > <br> <br>
                        <label for="jenis_kursuss">Jenis Kursus</label> <br>
                        <select  name="jenis_kursuss" required>
                        <optgroup label="Jenis Kursus">
                            <!-- <option>--Jenis Kursus---</option> -->
                            <option>Reguler</option>
                            <option>Privat</option>
                            <option>Online</option>
                        </optgroup>
                        </select > <br><br>
                        <label for="no_handphone">Nomor Handphone</label> <br>
		                <input type="text" id="no_handphone" name="no_handphone" required><br><br>
                        <input type="submit" value="SIMPAN" class="btn" name="prosess">
                    </form>
                       
                       <?php
                        include 'db.php';
                        if(isset($_POST['prosess'])) {
                            mysqli_query($conn, "insert into heri_form set
                            nama = '$_POST[nama]',
                            jadwal = '$_POST[jadwal]',
                            kursuss = '$_POST[kursuss]',
                            jenis_kursuss = '$_POST[jenis_kursuss]',
                            no_handphone = '$_POST[no_handphone]'");
                    
                            echo "DATA REGISTRASI BARU TERSIMPAN";
                            echo "<meta http-equiv=refresh content=1;URL='data-siswa-heri.php'>";
                        }
                        ?>
                </div>
            </div>
        </section>
            

        <!-- My Javascript -->
        <script src="js/script.js"></script>
        <!-- Kursus End -->

        <script>
            feather.replace()
          </script>
</body>

</html>