<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

if (isset($_POST['proses'])) {
  // Ambil data dari form
  $namatk = $_POST['namasd'];
  $tanggaltk = $_POST['tanggalsd'];
  $namaortutk = $_POST['kelassd'];
  $nohandphonetk = $_POST['nohandphonesd'];
  $alamattk = $_POST['alamatsd'];
  $statustk = $_POST['statussd'];
  $kursustk = $_POST['kursussd'];
  $jeniskursustk = $_POST['jeniskursussd'];

  // Periksa apakah kuota tersedia
  $query = "SELECT kuota FROM tb_kuota WHERE tabel = 'tb_sd' AND kursus = '$kursustk' AND jenis_kursus = '$jeniskursustk'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($result);
  $kuota = $row['kuota'];

  if ($kuota > 0) {
    // Kurangi kuota
    $updated_kuota = $kuota - 1;
    $update_query = "UPDATE tb_kuota SET kuota = $updated_kuota WHERE tabel = 'tb_sd' AND kursus = '$kursustk' AND  jenis_kursus = '$jeniskursustk'";
    mysqli_query($koneksi, $update_query);

    // Lanjutkan dengan menyimpan data pendaftaran ke database
    $insert_query = "INSERT INTO tb_sd (namasd, tanggalsd, kelassd, nohandphonesd, alamatsd, statussd, kursussd, jeniskursussd) VALUES ('$namatk', '$tanggaltk', '$namaortutk', '$nohandphonetk', '$alamattk', '$statustk', '$kursustk', '$jeniskursustk')";
    mysqli_query($koneksi, $insert_query);

    echo "Pendaftaran berhasil!";
  } else {
    echo "Kuota untuk jenis kursus '$jeniskursustk' pada tabel 'tb_sd' telah habis.";
  }
  echo "<meta http-equiv=refresh content=2;URL='kuotasd1.php'>";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form SD</title>
  <style>
  body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  .container {
    margin-right: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .form-container {
    margin-right: 1rem;
    max-width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .form-container .input-controll,
  .form-container .btn {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
  }

  .form-container .btn {
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
  }

  .form-container .btn:hover {
    background-color: #0056b3;
  }

  .form-container .error-message {
    color: red;
    font-size: 12px;
    margin-top: -10px;
    margin-bottom: 10px;
  }

  .form-container .error {
    border-color: red;
  }

  .form-container label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .form-container select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
  }

  .sidebar {
    flex: 0 0 30%;
    background-color: #007bff;
    color: #fff;
    padding: 20px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
  }

  .sidebar h2 {
    margin-top: 0;
    margin-bottom: 10px;
  }

  .sidebar p {
    margin-top: 0;
    margin-bottom: 10px;
  }

  .sidebar ul {
    
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .sidebar ul li {
    margin: 1rem;
    display: flex;
    margin-bottom: 5px;
  }

  .sidebar ul li a {
    
    color: #fff;
    text-decoration: none;
  }

  .sidebar ul li a:hover {
    color: orange;
    text-decoration: underline;
  }
  .input-wrapper {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
  }

  .country-code {
    display: inline-block;
    padding: 8px;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    border-right: none;
  }

  .phone-input {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ccc;
  }

  .error-message {
    color: red;
  }
</style>


</head>
<body>
<body>
  <div class="container">
    <div class="form-container">
      <form action="" method="POST" enctype="multipart/form-data">
      <input type="text" name="namasd" placeholder="Nama Lengkap" class="input-controll" required oninput="validateNamaSd(this)" />
      <span id="namasd-error" class="error-message"></span>

      <p>Tanggal Pendaftaran</p>
      <input type="date" name="tanggalsd" id="tanggalsd" placeholder="Tanggal" class="input-controll" readonly required><br>

      <select name="kelassd" class="input-controll" required onchange="validateKelasSd(this)">
    <option value="">Pilih Kelas</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
</select>
<span id="kelassd-error" class="error-message"></span>


      <div class="input-wrapper">
  <span class="country-code">+62</span>
  <input type="text" name="nohandphonesd" id="nohandphonesd" placeholder="Nomor Handphone atau WA" class="phone-input" required oninput="validateNoHandphoneSd()">
  <span id="nohandphonesd-error" class="error-message"></span>
</div>
<input type="text" name="alamatsd" placeholder="Alamat" class="input-controll" required oninput="validateAlamatSd(this)" />
      <span id="alamatsd-error" class="error-message"></span>

      <input type="hidden" name="statussd" placeholder="Keterangan" class="input-controll">
      <label for="kursussd">Kursus:</label>
      <select name="kursussd" class="input-controll" required>
        <option value="">-- Kursus --</option>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "registrasi");

        // Nilai dari kolom "tabel" yang ingin Anda gunakan
        $tabel = $_POST['tabel'];
        $tabel = 'tb_sd';
        $jenis_kursus = 'Reguler';

        // Query untuk mengambil data dari tabel tb_kuota berdasarkan kolom "tabel"
        $sql = "SELECT * FROM tb_kuota WHERE tabel = '$tabel' AND jenis_kursus = '$jenis_kursus'";

        $result = mysqli_query($conn, $sql);

        // Loop untuk menampilkan data kursus pada dropdown
        while ($row = mysqli_fetch_assoc($result)) {
          $kursus = $row['kursus'];
          $kuota = $row['kuota'];

          if ($kuota > 0) {
            echo "<option value='" . $kursus . "'>" . $kursus . "</option>";
          }
        }
        ?>

      </select>

      <select name="jeniskursussd" class="input-controll" required>
        <optgroup label="Jenis Kursus">
          <option>Reguler</option>
        </optgroup>
      </select>
      <input type="submit" value="DAFTAR" class="btn" name="proses" id="daftar-button2">
</form>
    </div>
    <script>
  function setTodayDate() {
  var today = new Date();
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var year = today.getFullYear();
  var todayDate = year + '-' + month + '-' + day;

  document.getElementById('tanggalsd').value = todayDate;
}

function validateNamaSd(input) {
  var regex = /^[a-zA-Z\s]+$/;
  var errorMessage = document.getElementById('namasd-error');
  var daftarButton = document.getElementById('daftar-button2');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Nama hanya boleh mengandung huruf';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
  checkFormValidity();
}

function validateKelasSd(input) {
  var regex = /^[0-9]+$/;
  var errorMessage = document.getElementById('kelassd-error');
  var daftarButton = document.getElementById('daftar-button2');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Kelas tidak boleh mengandung huruf atau simbol';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
  checkFormValidity();
}


function validateNoHandphoneSd() {
  var input = document.getElementById('nohandphonesd');
  var errorMessage = document.getElementById('nohandphonesd-error');
  var phoneNumber = input.value.trim();

  var startsWithEight = phoneNumber.startsWith('8');
  var hasValidLength = phoneNumber.length >= 11 && phoneNumber.length <= 13;
  var onlyDigits = /^\d+$/.test(phoneNumber);

  if (!startsWithEight || !hasValidLength || !onlyDigits) {
    errorMessage.textContent = 'Nomor handphone harus dimulai dengan angka 8 dan terdiri dari 9 hingga 13 digit angka';
    errorMessage.classList.add('error-message');
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    errorMessage.classList.remove('error-message');
    input.classList.remove('error');
  }
  checkFormValidity();
}

function validateAlamatSd(input) {
  var regex = /^[a-zA-Z]+\s*\d*[a-zA-Z0-9\s]*$/;
  var errorMessage = document.getElementById('alamatsd-error');
  var daftarButton = document.getElementById('daftar-button2');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Alamat tidak valid';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
  checkFormValidity();
}

function checkFormValidity() {
  var daftarButton = document.getElementById('daftar-button2');
  var inputs = document.querySelectorAll('input.error');

  daftarButton.disabled = inputs.length > 0;
}

// Set tanggal hari ini saat halaman dimuat
setTodayDate();

// Tambahkan event listener untuk input nama TK
var namaSdInput = document.getElementById('namasd');
namaSdInput.addEventListener('input', function () {
  validateNamaSd(this);
});

// Tambahkan event listener untuk input nama orang tua TK
var kelasSdInput = document.getElementById('kelassd');
kelasSdInput.addEventListener('input', function () {
  validateKelasSd(this);
});

// Tambahkan event listener untuk input nomor handphone TK
var nohandphoneSdInput = document.getElementById('nohandphonesd');
nohandphoneSdInput.addEventListener('input', function () {
  validateNoHandphoneSd();
});

// Tambahkan event listener untuk input alamat TK
var alamatSdInput = document.getElementById('alamatsd');
alamatSdInput.addEventListener('input', function () {
  validateAlamatSd(this);
});

// Panggil fungsi checkFormValidity() saat halaman dimuat untuk menginisialisasi tombol DAFTAR
checkFormValidity();

</script>
    <div class="sidebar">
      <h2>Informasi Tambahan</h2>
      <p>Selamat datang di halaman pendaftaran. Silakan isi formulir di sebelah kiri untuk mendaftar.</p>

      <h2>Tautan Navigasi</h2>
      <ul>
        <li><a href="index.php#home">Beranda</a></li>
        <li><a href="index.php#about">Tentang Kami</a></li>
        <li><a href="index.php#contact">Kontak</a></li>
      </ul>

      <h2>Kontak</h2>
      <p>Email: info@example.com</p>
      <p>Telepon: 123-456-789</p>
    </div>
  </div>
</body>
</html>

