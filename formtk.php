<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

if (isset($_POST['proses'])) {
  // Ambil data dari form
  $namatk = $_POST['namatk'];
  $tanggaltk = $_POST['tanggaltk'];
  $namaortutk = $_POST['namaortutk'];
  $nohandphonetk = $_POST['nohandphonetk'];
  $alamattk = $_POST['alamattk'];
  $statustk = $_POST['statustk'];
  $kursustk = $_POST['kursustk'];
  $jeniskursustk = $_POST['jeniskursustk'];

  // Periksa apakah kuota tersedia
  $query = "SELECT kuota FROM tb_kuota WHERE tabel = 'tb_tk' AND kursus = '$kursustk' AND jenis_kursus = '$jeniskursustk'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($result);
  $kuota = $row['kuota'];

  if ($kuota > 0) {
    // Kurangi kuota
    $updated_kuota = $kuota - 1;
    $update_query = "UPDATE tb_kuota SET kuota = $updated_kuota WHERE tabel = 'tb_tk' AND kursus = '$kursustk' AND  jenis_kursus = '$jeniskursustk'";
    mysqli_query($koneksi, $update_query);

    // Lanjutkan dengan menyimpan data pendaftaran ke database
    $insert_query = "INSERT INTO tb_tk (namatk, tanggaltk, namaortutk, nohandphonetk, alamattk, statustk, kursustk, jeniskursustk) VALUES ('$namatk', '$tanggaltk', '$namaortutk', '$nohandphonetk', '$alamattk', '$statustk', '$kursustk', '$jeniskursustk')";
    mysqli_query($koneksi, $insert_query);

    echo "Pendaftaran berhasil!";
  } else {
    echo "Kuota untuk jenis kursus '$jeniskursustk' pada tabel 'tb_tk' telah habis.";
  }
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
  <title>Form TK</title>
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
<div class="container">
  <div class="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="text" name="namatk" placeholder="Nama Lengkap" class="input-controll" required oninput="validateNamaTk(this)" />
      <span id="namatk-error" class="error-message"></span>

      <p>Tanggal Pendaftaran</p>
      <input type="date" name="tanggaltk" id="tanggaltk" placeholder="Tanggal" class="input-controll" readonly required><br>

      <input type="text" name="namaortutk" placeholder="Nama Orang Tua" class="input-controll" required oninput="validateNamaOrtuTk(this)" />
      <span id="namaortutk-error" class="error-message"></span>

      <div class="input-wrapper">
        <span class="country-code">+62</span>
        <input type="text" name="nohandphonetk" id="nohandphonetk" placeholder="Nomor Handphone atau WA" class="phone-input" required>
      </div>
      <span id="error-message" class="error-message"></span>

      <input type="text" name="alamattk" placeholder="Alamat" class="input-controll" required oninput="validateAlamatTk(this)" />
      <span id="alamattk-error" class="error-message"></span>

      <input type="hidden" name="statustk" placeholder="Keterangan" class="input-controll">
      <label for="kursustk">Kursus:</label>
      <select name="kursustk" class="input-controll" required>
        <option value="">-- Kursus --</option>
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "registrasi");

        // Nilai dari kolom "tabel" yang ingin Anda gunakan
        $tabel = $_POST['tabel'];
        $tabel = 'tb_tk';
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

      <select name="jeniskursustk" class="input-controll" required>
        <optgroup label="Jenis Kursus">
          <option>Reguler</option>
        </optgroup>
      </select>
      <input type="submit" value="DAFTAR" class="btn" name="proses" id="daftar-button">
    </form>
  </div>
</div>

<script>
  function checkFormValidity() {
  // Cek semua input form untuk validitas
  var inputs = document.getElementsByTagName('input');
  var isFormValid = true;

  for (var i = 0; i < inputs.length; i++) {
    if (!inputs[i].checkValidity()) {
      isFormValid = false;
      break;
    }
  }

  // Aktifkan atau nonaktifkan tombol "DAFTAR" berdasarkan validitas form
  var daftarButton = document.getElementById('daftar-button');
  daftarButton.disabled = !isFormValid;
}

function validateNamaTk(input) {
  var regex = /^[a-zA-Z\s]+$/;
  var errorMessage = document.getElementById('namatk-error');
  var daftarButton = document.getElementById('daftar-button');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Nama hanya boleh mengandung huruf';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
    checkFormValidity();
  }
}

function setTodayDate() {
  var today = new Date();
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var year = today.getFullYear();
  var todayDate = year + '-' + month + '-' + day;

  document.getElementById('tanggaltk').value = todayDate;
}

setTodayDate();

var namaTkInput = document.getElementById('namatk');
namaTkInput.addEventListener('input', function () {
  validateNamaTk(this);
});


function validateNamaOrtuTk(input) {
  var regex = /^[a-zA-Z\s]+$/;
  var errorMessage = document.getElementById('namaortutk-error');
  var daftarButton = document.getElementById('daftar-button');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Nama Orang Tua hanya boleh mengandung huruf';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
    checkFormValidity();
  }
}

var namaOrtuTkInput = document.getElementById('namaortutk');
namaOrtuTkInput.addEventListener('input', function () {
  validateNamaOrtuTk(this);
});


function validateNoHandphoneTk() {
  var input = document.getElementById('nohandphonetk');
  var errorMessage = document.getElementById('nohandphonetk-error');
  var phoneNumber = input.value.trim();
  var daftarButton = document.getElementById('daftar-button');

  if (phoneNumber.length >= 3 && !phoneNumber.startsWith('8')) {
    errorMessage.textContent = 'Nomor handphone harus dimulai dengan angka 8';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else if (phoneNumber.length >= 5 && (phoneNumber.length < 11 || phoneNumber.length > 15)) {
    errorMessage.textContent = 'Nomor handphone harus terdiri dari 9 hingga 13 digit angka';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else if (phoneNumber.length > 0 && !/^\d*$/.test(phoneNumber)) {
    errorMessage.textContent = 'Nomor handphone hanya boleh berisi angka';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
    checkFormValidity();
  }
}

var nohandphoneTkInput = document.getElementById('nohandphonetk');
nohandphoneTkInput.addEventListener('input', function () {
  validateNoHandphoneTk();
  checkFormValidity();
});


function validateAlamatTk(input) {
  var regex = /^[a-zA-Z]+\s*\d*[a-zA-Z0-9\s]*$/;
  var errorMessage = document.getElementById('alamattk-error');
  var daftarButton = document.getElementById('daftar-button');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Alamat tidak valid';
    input.classList.add('error');
    daftarButton.disabled = true; // Menonaktifkan tombol DAFTAR
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
    checkFormValidity();
  }
}

// Aktifkan atau nonaktifkan tombol "DAFTAR" berdasarkan validitas form
var daftarButton = document.getElementById('daftar-button');
  if (isFormValid) {
    daftarButton.disabled = false;
  } else {
    daftarButton.disabled = true;
  }


</script>
</body>
</html>

