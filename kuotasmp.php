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
$queryMatematika = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Matematika' AND jeniskursussmp = 'Reguler'";
$resultMatematika = mysqli_query($connection, $queryMatematika);

if ($resultMatematika) {
    $rowMatematika = mysqli_fetch_assoc($resultMatematika);
    $sisaKuotaMatematika = 5 - $rowMatematika['total']; // Menghitung sisa kuota Matematika
} else {
    $sisaKuotaMatematika = 5; // Jika terjadi kesalahan, mengatur sisa kuota Matematika menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Matematika
$queryMatematika1 = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Matematika' AND jeniskursussmp = 'Privat'";
$resultMatematika1 = mysqli_query($connection, $queryMatematika1);

if ($resultMatematika1) {
    $rowMatematika1 = mysqli_fetch_assoc($resultMatematika1);
    $sisaKuotaMatematika1 = 3 - $rowMatematika1['total']; // Menghitung sisa kuota Matematika
} else {
    $sisaKuotaMatematika = 3; // Jika terjadi kesalahan, mengatur sisa kuota Matematika menjadi 5
}

// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus IPA reguler
$queryIPA = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'IPA' AND jeniskursussmp = 'Reguler'";
$resultIPA = mysqli_query($connection, $queryIPA);

if ($resultIPA) {
    $rowIPA = mysqli_fetch_assoc($resultIPA);
    $sisaKuotaIPA = 5 - $rowIPA['total']; // Menghitung sisa kuota IPA
} else {
    $sisaKuotaIPA = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus IPA reguler
$queryIPA1 = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'IPA' AND jeniskursussmp = 'Privat'";
$resultIPA1 = mysqli_query($connection, $queryIPA1);

if ($resultIPA1) {
    $rowIPA1 = mysqli_fetch_assoc($resultIPA1);
    $sisaKuotaIPA1 = 3 - $rowIPA1['total']; // Menghitung sisa kuota IPA
} else {
    $sisaKuotaIPA1 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryDesain = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Desain Grafis' AND jeniskursussmp = 'Reguler'";
$resultDesain = mysqli_query($connection, $queryDesain);

if ($resultDesain) {
    $rowDesain = mysqli_fetch_assoc($resultDesain);
    $sisaKuotaDesain = 5 - $rowDesain['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaDesain = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Pem reguler
$queryDesain1 = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Desain Grafis' AND jeniskursussmp = 'Privat'";
$resultDesain1 = mysqli_query($connection, $queryDesain1);

if ($resultDesain1) {
    $rowDesain1 = mysqli_fetch_assoc($resultDesain1);
    $sisaKuotaDesain1 = 3 - $rowDesain1['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaDesain1 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryPem = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Pemrograman' AND jeniskursussmp = 'Reguler'";
$resultPem = mysqli_query($connection, $queryPem);

if ($resultPem) {
    $rowPem = mysqli_fetch_assoc($resultPem);
    $sisaKuotaPem = 5 - $rowPem['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaPem = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryPem1 = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Pemrograman' AND jeniskursussmp = 'Privat'";
$resultPem1 = mysqli_query($connection, $queryPem1);

if ($resultPem1) {
    $rowPem1 = mysqli_fetch_assoc($resultPem1);
    $sisaKuotaPem1 = 3 - $rowPem1['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaPem1 = 3; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryIng = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Bahasa Inggris' AND jeniskursussmp = 'Reguler'";
$resultIng = mysqli_query($connection, $queryIng);

if ($resultIng) {
    $rowIng = mysqli_fetch_assoc($resultIng);
    $sisaKuotaIng = 5 - $rowIng['total']; // Menghitung sisa kuota Desain reguler
} else {
    $sisaKuotaIng = 5; // Jika terjadi kesalahan, mengatur sisa kuota IPA menjadi 5
}
// Menghitung jumlah baris yang terisi dalam tabel tb_smp untuk kursus Desain reguler
$queryIng1 = "SELECT COUNT(*) AS total FROM tb_smp WHERE kursussmp = 'Bahasa Inggris' AND jeniskursussmp = 'Privat'";
$resultIng1 = mysqli_query($connection, $queryIng1);

if ($resultIng1) {
    $rowIng1 = mysqli_fetch_assoc($resultIng1);
    $sisaKuotaIng1 = 3 - $rowIng1['total']; // Menghitung sisa kuota inggris reguler
} else {
    $sisaKuotaIng1 = 3; // Jika terjadi kesalahan, mengatur sisa kuota Inggris
}

$sisaKuotaMatematika = isset($sisaKuotaMatematika) ? $sisaKuotaMatematika : 5;
$sisaKuotaMatematika1 = isset($sisaKuotaMatematika1) ? $sisaKuotaMatematika1 : 3;
$sisaKuotaIPA = isset($sisaKuotaIPA) ? $sisaKuotaIPA : 5;
$sisaKuotaIPA1 = isset($sisaKuotaIPA1) ? $sisaKuotaIPA1 : 3;
$sisaKuotaDesain = isset($sisaKuotaDesain) ? $sisaKuotaDesain : 5;
$sisaKuotaDesain1 = isset($sisaKuotaDesain1) ? $sisaKuotaDesain1 : 3;
$sisaKuotaPem = isset($sisaKuotaPem) ? $sisaKuotaPem : 5;
$sisaKuotaPem1 = isset($sisaKuotaPem1) ? $sisaKuotaPem1 : 3;
$sisaKuotaIng = isset($sisaKuotaIng) ? $sisaKuotaIng : 5;
$sisaKuotaIng1 = isset($sisaKuotaIng1) ? $sisaKuotaIng1 : 3;


session_start();
$_SESSION['sisaKuotaMatematika'] = $sisaKuotaMatematika;
$_SESSION['sisaKuotaMatematika1'] = $sisaKuotaMatematika1;
$_SESSION['sisaKuotaIPA'] = $sisaKuotaIPA;
$_SESSION['sisaKuotaIPA1'] = $sisaKuotaIPA1;
$_SESSION['sisaKuotaDesain'] = $sisaKuotaDesain;
$_SESSION['sisaKuotaDesain1'] = $sisaKuotaDesain1;
$_SESSION['sisaKuotaDesain1'] = $sisaKuotaPem;
$_SESSION['sisaKuotaDesain1'] = $sisaKuotaPem1;
$_SESSION['sisaKuotaIng'] = $sisaKuotaIng;
$_SESSION['sisaKuotaIng1'] = $sisaKuotaIng1;

?>
<?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabledMatematika = $sisaKuotaMatematika == 0 ? 'disabled' : '';
        $isDisabledMatematika1 = $sisaKuotaMatematika1 == 0 ? 'disabled' : '';
        $isDisabledIPA = $sisaKuotaIPA == 0 ? 'disabled' : '';
        $isDisabledIPA1 = $sisaKuotaIPA1 == 0 ? 'disabled' : '';
        $isDisabledDesain = $sisaKuotaDesain == 0 ? 'disabled' : '';
        $isDisabledDesain1 = $sisaKuotaDesain1 == 0 ? 'disabled' : '';
        $isDisabledPem = $sisaKuotaPem == 0 ? 'disabled' : '';
        $isDisabledPem1 = $sisaKuotaPem1 == 0 ? 'disabled' : '';
        // $sisaKuotaIng = $sisaKuotaIng == 0 ? 'disabled' : '';
        // $sisaKuotaIng1 = $sisaKuotaIng1 == 0 ? 'disabled' : '';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterangan Kuota</title>
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
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin-top: 7rem;
        }

        .container {
            
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
<h2>Keterangan Kuota Matematika</h2>
<br>
<p>
    Kuota Reguler: <?php echo ($sisaKuotaMatematika <= 0) ? 'Tidak tersedia' : $sisaKuotaMatematika . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaMatematika1 <= 0) ? 'Tidak tersedia' : $sisaKuotaMatematika1 . ' orang'; ?>
</p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaMatematika == 0 ? 'disabled' : '';
        $isDisabled = $sisaKuotaMatematika1 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi2.php" class="button <?php echo $isDisabled; ?>">Daftar</a>
</div> <br> <br>
<div class="container">
    <h2>Keterangan Kuota IPA</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaIPA <= 0) ? 'Tidak tersedia' : $sisaKuotaIPA . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaIPA1 <= 0) ? 'Tidak tersedia' : $sisaKuotaIPA1 . ' orang'; ?></p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaIPA == 0 ? 'disabled' : '';
        $isDisabled = $sisaKuotaIPA1 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi2.php" class="button <?php echo $isDisabled; ?>">Daftar</a>
</div> <br> <br>
<div class="container">
    <h2>Keterangan Kuota Desain Grafis</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaDesain <= 0) ? 'Tidak tersedia' : $sisaKuotaDesain . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaDesain1 <= 0) ? 'Tidak tersedia' : $sisaKuotaDesain1 . ' orang'; ?></p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaDesain == 0 ? 'disabled' : '';
        $isDisabled = $sisaKuotaDesain1 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi2.php" class="button <?php echo $isDisabled; ?>">Daftar</a>
</div> <br> <br>
<div class="container">
    <h2>Keterangan Kuota Pemrograman</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaPem <= 0) ? 'Tidak tersedia' : $sisaKuotaPem . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaPem1 <= 0) ? 'Tidak tersedia' : $sisaKuotaPem1 . ' orang'; ?></p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaPem == 0 ? 'disabled' : '';
        $isDisabled = $sisaKuotaPem1 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi2.php" class="button <?php echo $isDisabled; ?>">Daftar</a>
</div> <br> <br>
<div class="container">
    <h2>Keterangan Kuota Bahasa Inggris</h2> <br>
    <p>Kuota Reguler: <?php echo ($sisaKuotaIng <= 0) ? 'Tidak tersedia' : $sisaKuotaIng . ' orang'; ?><br>
    Kuota Privat: <?php echo ($sisaKuotaIng1 <= 0) ? 'Tidak tersedia' : $sisaKuotaIng1 . ' orang'; ?></p>
    <?php
        // Menentukan apakah tombol harus dinonaktifkan
        $isDisabled = $sisaKuotaIng == 0 ? 'disabled' : '';
        $isDisabled = $sisaKuotaIng1 == 0 ? 'disabled' : '';
    ?>
    <a href="registrasi2.php" class="button <?php echo $isDisabled; ?>">Daftar</a>
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
