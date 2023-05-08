<?php
include "db.php"; 
$sql=mysqli_query($conn, "select * from tb_data where data_id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
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
                    <h3>Registrasi</h3>
                    <div class="boxsss">
                       <form action="" method="POST" enctype="multipart/form-data">
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama" class="input-controll" required> <br>
                        <input type="text" name="jadwal" value="<?php echo $data['jadwal']; ?>"  placeholder="Jadwal" class="input-controll" required> <br>
                        <input type="text" name="kursuss" value="<?php echo $data['kursuss']; ?>"  placeholder="Kursus" class="input-controll" required> <br>
                        <input type="text" name="jenis_kursuss" value="<?php echo $data['jenis_kursuss']; ?>"  placeholder="Jenis Kursus" class="input-controll" required>
                        <input type="text" name="no_handphone" value="<?php echo $data['no_handphone']; ?>"  placeholder="No Handphone" class="input-controll" required>
                        <input type="submit" value="DAFTAR" class="btn" name="prosess">
                       </form> 
                       
                       
                       <?php
                        include 'db.php';
                        if(isset($_POST['prosess'])) {
                            mysqli_query($conn, "insert into nofal_form set
                            nama = '$_POST[nama]',
                            jadwal = '$_POST[jadwal]',
                            kursuss = '$_POST[kursuss]',
                            jenis_kursuss = '$_POST[jenis_kursuss]',
                            no_handphone = '$_POST[no_handphone]'");
                             
                            echo "DATA REGISTRASI TELAH TERUPDATE";
                            echo "<meta http-equiv=refresh content=1;URL='data-registrasi.php'>";
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