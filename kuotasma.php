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
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Matematika
$queryMatematika2 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Matematika' AND jenis_kursus = 'Reguler'";
$resultMatematika2 = mysqli_query($connection, $queryMatematika2);

if ($resultMatematika2) {
    $rowMatematika2 = mysqli_fetch_assoc($resultMatematika2);
    $sisaKuotaMatematika2 = 5 - $rowMatematika2['total']; // Menghitung sisa kuota Matematika
} else {
    $sisaKuotaMatematika2 = 5; // Jika terjadi kesalahan, mengatur sisa kuota Matematika menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Matematika
$queryMatematika3 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Matematika' AND jenis_kursus = 'Privat'";
$resultMatematika3 = mysqli_query($connection, $queryMatematika3);

if ($resultMatematika3) {
    $rowMatematika3 = mysqli_fetch_assoc($resultMatematika3);
    $sisaKuotaMatematika3 = 3 - $rowMatematika3['total']; // Menghitung sisa kuota Matematika
} else {
    $sisaKuotaMatematika3 = 3; // Jika terjadi kesalahan, mengatur sisa kuota Matematika menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Matematika
$queryMatematika4 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Matematika' AND jenis_kursus = 'Online'";
$resultMatematika4 = mysqli_query($connection, $queryMatematika4);

if ($resultMatematika4) {
    $rowMatematika4 = mysqli_fetch_assoc($resultMatematika4);
    $sisaKuotaMatematika4 = 5 - $rowMatematika4['total']; // Menghitung sisa kuota Matematika
} else {
    $sisaKuotaMatematika4 = 5; // Jika terjadi kesalahan, mengatur sisa kuota Matematika menjadi 5
}

// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus IPA reguler
$queryIPA2 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'IPA' AND jenis_kursus = 'Reguler'";
$resultIPA2 = mysqli_query($connection, $queryIPA2);

if ($resultIPA2) {
    $rowIPA2 = mysqli_fetch_assoc($resultIPA2);
    $sisaKuotaIPA2 = 5 - $rowIPA2['total']; // Menghitung sisa kuota IPA
} else {
    $sisaKuotaIPA2 = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus IPA reguler
$queryIPA3 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'IPA' AND jenis_kursus = 'Privat'";
$resultIPA3 = mysqli_query($connection, $queryIPA3);

if ($resultIPA3) {
    $rowIPA3 = mysqli_fetch_assoc($resultIPA3);
    $sisaKuotaIPA3 = 3 - $rowIPA3['total']; // Menghitung sisa kuota IPA
} else {
    $sisaKuotaIPA3 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus IPA reguler
$queryIPA4 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'IPA' AND jenis_kursus = 'Online'";
$resultIPA4 = mysqli_query($connection, $queryIPA4);

if ($resultIPA4) {
    $rowIPA4 = mysqli_fetch_assoc($resultIPA4);
    $sisaKuotaIPA4 = 5 - $rowIPA4['total']; // Menghitung sisa kuota IPA
} else {
    $sisaKuotaIPA4 = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryDesain2 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Desain Grafis' AND jenis_kursus = 'Reguler'";
$resultDesain2 = mysqli_query($connection, $queryDesain2);

if ($resultDesain2) {
    $rowDesain2 = mysqli_fetch_assoc($resultDesain2);
    $sisaKuotaDesain2 = 5 - $rowDesain2['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaDesain2 = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Pem reguler
$queryDesain3 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Desain Grafis' AND jenis_kursus = 'Privat'";
$resultDesain3 = mysqli_query($connection, $queryDesain3);

if ($resultDesain3) {
    $rowDesain3 = mysqli_fetch_assoc($resultDesain3);
    $sisaKuotaDesain3 = 3 - $rowDesain3['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaDesain3 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Pem reguler
$queryDesain4 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Desain Grafis' AND jenis_kursus = 'Online'";
$resultDesain4 = mysqli_query($connection, $queryDesain4);

if ($resultDesain4) {
    $rowDesain4 = mysqli_fetch_assoc($resultDesain4);
    $sisaKuotaDesain4 = 5 - $rowDesain4['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaDesain4 = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryPem2 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Pemrograman' AND jenis_kursus = 'Reguler'";
$resultPem2 = mysqli_query($connection, $queryPem2);

if ($resultPem2) {
    $rowPem2 = mysqli_fetch_assoc($resultPem2);
    $sisaKuotaPem2 = 5 - $rowPem2['total']; // Menghitung sisa kuota 
} else {
    $sisaKuotaPem2 = 5; // Jika terjadi kesalahan, mengatur sisa kuota 
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus 
$queryPem3 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Pemrograman' AND jenis_kursus = 'Privat'";
$resultPem3 = mysqli_query($connection, $queryPem3);

if ($resultPem3) {
    $rowPem3 = mysqli_fetch_assoc($resultPem3);
    $sisaKuotaPem3 = 3 - $rowPem3['total']; // Menghitung sisa kuota 
} else {
    $sisaKuotaPem3 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus 
$queryPem4 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Pemrograman' AND jenis_kursus = 'Online'";
$resultPem4 = mysqli_query($connection, $queryPem4);

if ($resultPem4) {
    $rowPem4 = mysqli_fetch_assoc($resultPem4);
    $sisaKuotaPem4 = 5 - $rowPem4['total']; // Menghitung sisa kuota 
} else {
    $sisaKuotaPem4 = 5; // Jika terjadi kesalahan, mengatur sisa kuota 
}

// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus 
$queryIng2 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Bahasa Inggris' AND jenis_kursus = 'Reguler'";
$resultIng2 = mysqli_query($connection, $queryIng2);

if ($resultIng2) {
    $rowIng2 = mysqli_fetch_assoc($resultIng2);
    $sisaKuotaIng2 = 5 - $rowIng2['total']; // Menghitung sisa kuota 
} else {
    $sisaKuotaIng2 = 5; // Jika terjadi kesalahan,
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus inggris privat
$queryIng3 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Bahasa Inggris' AND jenis_kursus = 'Privat'";
$resultIng3 = mysqli_query($connection, $queryIng3);

if ($resultIng3) {
    $rowIng3 = mysqli_fetch_assoc($resultIng3);
    $sisaKuotaIng3 = 3 - $rowIng3['total']; // Menghitung sisa kuota inggris reguler
} else {
    $sisaKuotaIng3 = 3; // Jika terjadi kesalahan, mengatur sisa kuota Inggris
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus 
$queryIng4 = "SELECT COUNT(*) AS total FROM tb_data WHERE kursus = 'Bahasa Inggris' AND jenis_kursus = 'Online'";
$resultIng4 = mysqli_query($connection, $queryIng4);

if ($resultIng4) {
    $rowIng4 = mysqli_fetch_assoc($resultIng4);
    $sisaKuotaIng4 = 5 - $rowIng4['total']; // Menghitung sisa kuota 
} else {
    $sisaKuotaIng4 = 5; // Jika terjadi kesalahan, 
}

$sisaKuotaMatematika2 = isset($sisaKuotaMatematika2) ? $sisaKuotaMatematika2 : 5;
$sisaKuotaMatematika3 = isset($sisaKuotaMatematika3) ? $sisaKuotaMatematika3 : 3;
$sisaKuotaMatematika4 = isset($sisaKuotaMatematika4) ? $sisaKuotaMatematika4 : 5;
$sisaKuotaIPA2 = isset($sisaKuotaIPA2) ? $sisaKuotaIPA2 : 5;
$sisaKuotaIPA3 = isset($sisaKuotaIPA3) ? $sisaKuotaIPA3 : 3;
$sisaKuotaIPA4 = isset($sisaKuotaIPA4) ? $sisaKuotaIPA4 : 5;
$sisaKuotaDesain2 = isset($sisaKuotaDesain2) ? $sisaKuotaDesain2 : 5;
$sisaKuotaDesain3 = isset($sisaKuotaDesain3) ? $sisaKuotaDesain3 : 3;
$sisaKuotaDesain4 = isset($sisaKuotaDesain4) ? $sisaKuotaDesain4 : 5;
$sisaKuotaPem2 = isset($sisaKuotaPem2) ? $sisaKuotaPem2 : 5;
$sisaKuotaPem3 = isset($sisaKuotaPem3) ? $sisaKuotaPem3 : 3;
$sisaKuotaPem3 = isset($sisaKuotaPem4) ? $sisaKuotaPem4 : 5;
$sisaKuotaIng2 = isset($sisaKuotaIng2) ? $sisaKuotaIng2 : 5;
$sisaKuotaIng3 = isset($sisaKuotaIng3) ? $sisaKuotaIng3 : 3;
$sisaKuotaIng3 = isset($sisaKuotaIng3) ? $sisaKuotaIng3 : 5;


session_start();
$_SESSION['sisaKuotaMatematika2'] = $sisaKuotaMatematika2;
$_SESSION['sisaKuotaMatematika3'] = $sisaKuotaMatematika3;
$_SESSION['sisaKuotaMatematika4'] = $sisaKuotaMatematika4;
$_SESSION['sisaKuotaIPA2'] = $sisaKuotaIPA2;
$_SESSION['sisaKuotaIPA3'] = $sisaKuotaIPA3;
$_SESSION['sisaKuotaIPA4'] = $sisaKuotaIPA4;
$_SESSION['sisaKuotaDesain2'] = $sisaKuotaDesain2;
$_SESSION['sisaKuotaDesain3'] = $sisaKuotaDesain3;
$_SESSION['sisaKuotaDesain4'] = $sisaKuotaDesain4;
$_SESSION['sisaKuotaDesain2'] = $sisaKuotaPem2;
$_SESSION['sisaKuotaDesain3'] = $sisaKuotaPem3;
$_SESSION['sisaKuotaDesain4'] = $sisaKuotaPem4;
$_SESSION['sisaKuotaIng2'] = $sisaKuotaIng2;
$_SESSION['sisaKuotaIng3'] = $sisaKuotaIng3;
$_SESSION['sisaKuotaIng4'] = $sisaKuotaIng4;

?>
<?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabledMatematika2 = $sisaKuotaMatematika2 == 0 ? 'disabled' : '';
        $isDisabledMatematika3 = $sisaKuotaMatematika3 == 0 ? 'disabled' : '';
        $isDisabledMatematika4 = $sisaKuotaMatematika4 == 0 ? 'disabled' : '';
        $isDisabledIPA2 = $sisaKuotaIPA2 == 0 ? 'disabled' : '';
        $isDisabledIPA3 = $sisaKuotaIPA3 == 0 ? 'disabled' : '';
        $isDisabledIPA4 = $sisaKuotaIPA4 == 0 ? 'disabled' : '';
        $isDisabledDesain2 = $sisaKuotaDesain2 == 0 ? 'disabled' : '';
        $isDisabledDesain3 = $sisaKuotaDesain3 == 0 ? 'disabled' : '';
        $isDisabledDesain4 = $sisaKuotaDesain4 == 0 ? 'disabled' : '';
        $isDisabledPem2 = $sisaKuotaPem2 == 0 ? 'disabled' : '';
        $isDisabledPem3 = $sisaKuotaPem3 == 0 ? 'disabled' : '';
        $isDisabledPem4 = $sisaKuotaPem4 == 0 ? 'disabled' : '';
        // $sisaKuotaIng2 = $sisaKuotaIng2 == 0 ? 'disabled' : '';
        // $sisaKuotaIng3 = $sisaKuotaIng3 == 0 ? 'disabled' : '';
        // $sisaKuotaIng4 = $sisaKuotaIng4 == 0 ? 'disabled' : '';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuota</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
            rel="stylesheet">
        <!-- Feather Icons -->
        <script src="https://unpkg.com/feather-icons"></script>
        <!-- Swipe CSS -->
        <link rel="stylesheet" href="css/swiper-bundle.min.css">
        <!-- My Style CSS -->
        <link rel="stylesheet" href="css/style.css">
    <style>
        body {
    font-family: "Poppins", sans-serif;
    background-color: #f5f5f5;
    margin-top: 7rem;
    display: flex;
    margin-left: 10px;
    margin-right: 10px;
}

.container {
    margin-left: 10px;
    margin-right: 10px;
    max-width: 500px;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Tampilan untuk handphone */
@media (max-width: 767px) {
    body {
        margin-top: 3rem;
        flex-direction: column;
    }

    .container {
        margin-left: 0;
        margin-right: 0;
        max-width: 100%;
    }
}

/* Tampilan untuk tablet */
@media (min-width: 768px) and (max-width: 991px) {
    body {
        margin-top: 5rem;
    }
}

/* Tampilan untuk komputer */
@media (min-width: 992px) {
    body {
        margin-top: 7rem;
    }
}


        h2 {
            margin-top: 0;
        }

        p {
            margin-bottom: 20px;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
        .disabled {
            opacity: 0.5;
            pointer-events: none;
        }
            /* chatbot css tk */
            .ulchatbot {
    cursor: pointer;
}

.chat-header {
    border-radius: 10px 10px 0 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
}

.chat-header h4 {
  margin: 0;
}

.chat-header button {
  border: none;
  background-color: transparent;
  color: #fff;
  cursor: pointer;
}


.chat-body {
  max-height: 300px; /* atur tinggi maksimum chatbox */
  overflow-y: scroll; /* tambahkan scrollbar ketika isi pesan melebihi ukuran elemen */
  padding: 10px;
  flex-grow: 1;
}


.chat-message {
  display: flex;
  margin-bottom: 20px;
}

.user-message {
  background-color: orange;
  color: #000;
  align-self: flex-start;
  border-radius: 10px;
  max-width: 80%;
  padding: 10px;
  margin-left: 80%;
}

.chatbot-message {
  background-color: #007bff;
  color: #fff;
  align-self: flex-end;
  border-radius: 10px;
  max-width: 80%;
  padding: 10px;
  margin-right: 10px;
}
.chatbot-message li:hover{
    color: orange;
}

                .chat-button {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #2979ff;
  color: #fff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  text-align: center;
  line-height: 60px;
  font-size: 24px;
  cursor: pointer;
}
.chat-button:hover{
    color: orange;
}

.chat-container {
  display: none;
  position: fixed;
  bottom: 100px;
  right: 20px;
  width: 400px;
  border: 1px solid #ddd;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  z-index: 9999;
  margin-left: 40px;
}
        
    </style>
</head>
<body>
            <!-- Navbar Start -->
            <nav class="navbar">
            <a href="#" class="navbar-logo"><span>Bee Smart </span>Course</a>
            <div class="navbar-nav">
                <a href="index.php#home">Home</a>
                <a href="index.php#about">Tentang Kami</a>
                <a href="index.php#tutor">Tutor</a>
                <a href="index.php#course">Kursus</a>
                <a href="index.php#contact">Kontak</a>
            </div>
            <div class="navbar-extra">
                
                    <a href="login.php">
                        <i data-feather="log-in"></i>
                    </a>
                </button>
                <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->
<div class="container">
<h2>Kuota Matematika</h2>
<br>
<p>
    Kuota Reguler: <?php echo ($sisaKuotaMatematika2 <= 0) ? 'Tidak tersedia' : $sisaKuotaMatematika2 . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaMatematika3 <= 0) ? 'Tidak tersedia' : $sisaKuotaMatematika3 . ' orang'; ?> <br>
    Kuota Online: <?php echo ($sisaKuotaMatematika4 <= 0) ? 'Tidak tersedia' : $sisaKuotaMatematika4 . ' orang'; ?> <br>
</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaMatematika2 == 0 ? 'disabled' : '';
        $isDisabled1 = $sisaKuotaMatematika3 == 0 ? 'disabled' : '';
        $isDisabled2 = $sisaKuotaMatematika4 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi.php" class="button <?php echo $isDisabled; ?>">Daftar Reguler</a>
    <a href="registrasiMat.php" class="button <?php echo $isDisabled1; ?>">Daftar Privat</a>
    <a href="registrasiMat1.php" class="button <?php echo $isDisabled2; ?>">Daftar Online</a>
</div> <br> <br>
<div class="container">
    <h2>Kuota IPA</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaIPA2 <= 0) ? 'Tidak tersedia' : $sisaKuotaIPA2 . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaIPA3 <= 0) ? 'Tidak tersedia' : $sisaKuotaIPA3 . ' orang'; ?> <br>
    Kuota Online: <?php echo ($sisaKuotaIPA4 <= 0) ? 'Tidak tersedia' : $sisaKuotaIPA4 . ' orang'; ?> <br>
</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaIPA2 == 0 ? 'disabled' : '';
        $isDisabled1 = $sisaKuotaIPA3 == 0 ? 'disabled' : '';
        $isDisabled2 = $sisaKuotaIPA4 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasiIP.php" class="button <?php echo $isDisabled; ?>">Daftar Reguler</a>
    <a href="registrasiIP1.php" class="button <?php echo $isDisabled1; ?>">Daftar Privat</a>
    <a href="registrasiIP2.php" class="button <?php echo $isDisabled2; ?>">Daftar Online</a>
</div> <br> <br>
<div class="container">
    <h2>Kuota Desain Grafis</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaDesain2 <= 0) ? 'Tidak tersedia' : $sisaKuotaDesain2 . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaDesain3 <= 0) ? 'Tidak tersedia' : $sisaKuotaDesain3 . ' orang'; ?> <br>
    Kuota Online: <?php echo ($sisaKuotaDesain4 <= 0) ? 'Tidak tersedia' : $sisaKuotaDesain4 . ' orang'; ?>
</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaDesain2 == 0 ? 'disabled' : '';
        $isDisabled1 = $sisaKuotaDesain3 == 0 ? 'disabled' : '';
        $isDisabled2 = $sisaKuotaDesain4 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasiDes.php" class="button <?php echo $isDisabled; ?>">Daftar Reguler</a>
    <a href="registrasiDes1.php" class="button <?php echo $isDisabled1; ?>">Daftar Privat</a>
    <a href="registrasiDes2.php" class="button <?php echo $isDisabled2; ?>">Daftar Online</a>
</div> <br> <br>
<div class="container">
    <h2>Kuota Pemrograman</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaPem2 <= 0) ? 'Tidak tersedia' : $sisaKuotaPem2 . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaPem3 <= 0) ? 'Tidak tersedia' : $sisaKuotaPem3 . ' orang'; ?> <br>
    Kuota Online: <?php echo ($sisaKuotaPem4 <= 0) ? 'Tidak tersedia' : $sisaKuotaPem4 . ' orang'; ?>

</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaPem2 == 0 ? 'disabled' : '';
        $isDisabled1 = $sisaKuotaPem3 == 0 ? 'disabled' : '';
        $isDisabled2 = $sisaKuotaPem4 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasiPem.php" class="button <?php echo $isDisabled; ?>">Daftar Reguler</a>
    <a href="registrasiPem1.php" class="button <?php echo $isDisabled1; ?>">Daftar Privat</a>
    <a href="registrasiPem2.php" class="button <?php echo $isDisabled2; ?>">Daftar Online</a>
</div> <br> <br>
<div class="container">
    <h2>Kuota Bahasa Inggris</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaIng2 <= 0) ? 'Tidak tersedia' : $sisaKuotaIng2 . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaIng3 <= 0) ? 'Tidak tersedia' : $sisaKuotaIng3 . ' orang'; ?> <br>
    Kuota Privat: <?php echo ($sisaKuotaIng4 <= 0) ? 'Tidak tersedia' : $sisaKuotaIng4 . ' orang'; ?> <br>

</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaIng2 == 0 ? 'disabled' : '';
        $isDisabled1 = $sisaKuotaIng3 == 0 ? 'disabled' : '';
        $isDisabled2 = $sisaKuotaIng4 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasiIng.php" class="button <?php echo $isDisabled; ?>">Daftar Reguler</a>
    <a href="registrasiIng1.php" class="button <?php echo $isDisabled; ?>">Daftar Privat</a>
    <a href="registrasiIng2.php" class="button <?php echo $isDisabled; ?>">Daftar Online</a>
</div> 
        <!-- chatbot start -->
                <!-- chatbot -->
                <div class="chat-button" onclick="showChat()">
            <i data-feather="message-circle"></i></div>

            <div class="chat-container" id="chat-container">
            <div class="chat-header">
                 <h4>Chatbot Bee Smart Course</h4>
             <button class="close-button" onclick="hideChat()">X</button>
             </div>
  <div class="chat-body" id="chat-body">
    <div class="chat-message">
      <div class="chatbot-message">
        <p>Halo! Ada yang bisa saya bantu?</p>
        <ul class="ulchatbot">
          <li onclick="selectOption('register')">Kapan pendaftaran TK tersedia?</li>
          <li onclick="selectOption('course')">Pembelajaran seperti apa yang Bee smart course berikan?</li>
        </ul>
                  </div>
                </div>
            </div>
        <script>
            function showChat() {
  var chatContainer = document.getElementById('chat-container');
  chatContainer.style.display = 'block';
}

function hideChat() {
  var chatContainer = document.getElementById('chat-container');
  chatContainer.style.display = 'none';
  
}

            function selectOption(option) {
                event.preventDefault();
  var chatBody = document.querySelector('.chat-body');
  var chatMessage = document.createElement('div');
  chatMessage.classList.add('chat-message');
  var userMessage = document.createElement('div');
  userMessage.classList.add('user-message');
  var messageText = document.createElement('p');
  messageText.innerHTML = option;
  userMessage.appendChild(messageText);
  chatMessage.appendChild(userMessage);
  chatBody.appendChild(chatMessage);
  
  // cek opsi yang dipilih dan tampilkan jawaban yang sesuai
  switch (option) {
    case 'register':
      showAnswer('Untuk mendaftar di Bee Smart Course, silakan mengakses website kami dan mengisi formulir pendaftaran.');
      break;
    case 'course':
      showAnswer('Kami memberikan pembelajaran yang asik dan tentunya memberikan pemahaman kepada siswa secara efektif. Untuk informasi lengkap silakan lihat di metode pembejalaran pada website Bee Smart Course');
      break;
    default:
      showAnswer('Maaf, saya tidak mengerti pertanyaan anda. Silakan coba pertanyaan yang lain.');
      break;
  }
}

function showAnswer(answer) {
  var chatBody = document.querySelector('.chat-body');
  var chatMessage = document.createElement('div');
  chatMessage.classList.add('chat-message');
  var chatbotMessage = document.createElement('div');
  chatbotMessage.classList.add('chatbot-message');
  var messageText = document.createElement('p');
  messageText.innerHTML = answer;
  chatbotMessage.appendChild(messageText);
  chatMessage.appendChild(chatbotMessage);
  chatBody.appendChild(chatMessage);
}

        </script>
        <!-- chatbot end-->

</body>
 <!-- Feather Icons -->
 <script>
            feather.replace()
          </script>
        <!-- My Javascript -->
        <script src="js/script.js"></script>
    </body>
    <!-- SWIPE JAVASCRIPT -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JAVASCRIPT -->
            <script src="js/script2.js"></script>
</html>