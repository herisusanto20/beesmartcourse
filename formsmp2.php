<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");

if (isset($_POST['proses'])) {
  // Ambil data dari form
  $namatk = $_POST['namasmp'];
  $tanggaltk = $_POST['tanggalsmp'];
  $namaortutk = $_POST['kelassmp'];
  $nohandphonetk = $_POST['nohandphonesmp'];
  $alamattk = $_POST['alamatsmp'];
  $statustk = $_POST['statussmp'];
  $kursustk = $_POST['kursussmp'];
  $jeniskursustk = $_POST['jeniskursussmp'];
  $gelsmp = $_POST['gelsmp'];

  // Periksa apakah kuota tersedia
  $query = "SELECT kuota FROM tb_kuota WHERE tabel = 'tb_smp' AND kursus = '$kursustk' AND jenis_kursus = '$jeniskursustk'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($result);
  $kuota = $row['kuota'];

  if ($kuota > 0) {
    // Kurangi kuota
    $updated_kuota = $kuota - 1;
    $update_query = "UPDATE tb_kuota SET kuota = $updated_kuota WHERE tabel = 'tb_smp' AND kursus = '$kursustk' AND  jenis_kursus = '$jeniskursustk'";
    mysqli_query($koneksi, $update_query);

      // Update nilai kuota di tabel gelombang
      $updateQuery = "UPDATE gelombang SET kuota = kuota - 1 WHERE nama_gelombang = '$gelsmp'";
      mysqli_query($koneksi, $updateQuery);

    // Lanjutkan dengan menyimpan data pendaftaran ke database
    $insert_query = "INSERT INTO tb_smp (namasmp, tanggalsmp, kelassmp, nohandphonesmp, alamatsmp, statussmp, kursussmp, jeniskursussmp, gelsmp) VALUES ('$namatk', '$tanggaltk', '$namaortutk', '$nohandphonetk', '$alamattk', '$statustk', '$kursustk', '$jeniskursustk', '$gelsmp')";
    mysqli_query($koneksi, $insert_query);

    echo "Pendaftaran berhasil!";
  } else {
    echo "Kuota untuk jenis kursus '$jeniskursustk' pada tabel 'tb_smp' telah habis.";
  }
  echo "<meta http-equiv=refresh content=2;URL='kuotasmp1.php'>";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
<?php
$kursus = $_GET['kursus'];

$containerOptions = array();
if ($kursus == 'Calistung') {
  $containerOptions['Calistung'] = 'Calistung';
} elseif ($kursus == 'Tematik') {
  $containerOptions['Tematik'] = 'Tematik';
} elseif ($kursus == 'Bahasa Inggris') {
  $containerOptions['Bahasa Inggris'] = 'Bahasa Inggris';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form SMP</title>
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
      <input type="text" name="namasmp" placeholder="Nama Lengkap" class="input-controll" required oninput="validateNamaSmp(this)" />
      <span id="namasmp-error" class="error-message"></span>

      <p>Tanggal Pendaftaran</p>
      <input type="date" name="tanggalsmp" id="tanggalsmp" placeholder="Tanggal" class="input-controll" readonly required><br>

      <select name="kelassmp" class="input-controll" required onchange="validateKelasSmp(this)">
    <option value="">Pilih Kelas</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
</select>
<span id="kelassmp-error" class="error-message"></span>

      <div class="input-wrapper">
  <span class="country-code">+62</span>
  <input type="text" name="nohandphonesmp" id="nohandphonesmp" placeholder="Contoh : 89989823312" class="phone-input" required oninput="validateNoHandphoneSmp()">
  <span id="nohandphonesmp-error" class="error-message"></span>
</div>
<input type="text" name="alamatsmp" placeholder="Alamat" class="input-controll" required oninput="validateAlamatSmp(this)" />
      <span id="alamatsmp-error" class="error-message"></span>

      <input type="hidden" name="statussmp" placeholder="Keterangan" class="input-controll">
      <label for="kursussmp">Kursus:</label>
    <input type="text" name="kursussmp" class="input-controll" value="<?php echo $kursus; ?>" readonly>

      <select name="jeniskursussmp" class="input-controll" required>
        <optgroup label="Jenis Kursus">
          <option>Online</option>
        </optgroup>
      </select>
      <select name="gelsmp" class="input-controll" required>
  <optgroup label="gelombang">
    <?php
    // Lakukan koneksi ke database Anda di sini
    $koneksi = mysqli_connect("localhost", "root", "", "registrasi");

    // Query untuk mengambil data dari kolom "nama_gelombang" pada tabel "gelombang"
    $query = "SELECT nama_gelombang FROM gelombang WHERE kuota > 0";

    // Jalankan query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah ada baris hasil query
    if (mysqli_num_rows($result) > 0) {
      // Loop melalui setiap baris hasil query
      while ($row = mysqli_fetch_assoc($result)) {
        $nama_gelombang = $row['nama_gelombang'];
        // Tampilkan pilihan (options) dalam elemen select
        echo '<option value="' . $nama_gelombang . '">' . $nama_gelombang . '</option>';
      }
    }
    ?>
  </optgroup>
</select>
      <input type="submit" value="DAFTAR" class="btn" name="proses" id="daftar-button3">
</form>
    </div>
    <script>
  function setTodayDate() {
  var today = new Date();
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var year = today.getFullYear();
  var todayDate = year + '-' + month + '-' + day;

  document.getElementById('tanggalsmp').value = todayDate;
}

function validateNamaSmp(input) {
  var regex = /^[a-zA-Z\s]+$/;
  var errorMessage = document.getElementById('namasmp-error');
  var daftarButton = document.getElementById('daftar-button3');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Nama hanya boleh mengandung huruf';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
  checkFormValidity();
}

function validateKelasSmp(input) {
  var regex = /^[0-9]+$/;
  var errorMessage = document.getElementById('kelassmp-error');
  var daftarButton = document.getElementById('daftar-button3');

  if (!regex.test(input.value)) {
    errorMessage.textContent = 'Kelas tidak boleh mengandung huruf atau simbol';
    input.classList.add('error');
  } else {
    errorMessage.textContent = '';
    input.classList.remove('error');
  }
  checkFormValidity();
}


function validateNoHandphoneSmp() {
  var input = document.getElementById('nohandphonesmp');
  var errorMessage = document.getElementById('nohandphonesmp-error');
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

function validateAlamatSmp(input) {
  var regex = /^[a-zA-Z]+\s*\d*[a-zA-Z0-9\s]*$/;
  var errorMessage = document.getElementById('alamatsmp-error');
  var daftarButton = document.getElementById('daftar-button3');

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
  var daftarButton = document.getElementById('daftar-button3');
  var inputs = document.querySelectorAll('input.error');

  daftarButton.disabled = inputs.length > 0;
}

// Set tanggal hari ini saat halaman dimuat
setTodayDate();

// Tambahkan event listener untuk input nama TK
var namaSmpInput = document.getElementById('namasmp');
namaSmpInput.addEventListener('input', function () {
  validateNamaSmp(this);
});

// Tambahkan event listener untuk input nama orang tua TK
var KelasSmpInput = document.getElementById('kelassmp');
KelasSmpInput.addEventListener('input', function () {
  validateKelasSmp(this);
});

// Tambahkan event listener untuk input nomor handphone TK
var nohandphoneSmpInput = document.getElementById('nohandphonesmp');
nohandphoneSmpInput.addEventListener('input', function () {
  validateNoHandphoneSmp();
});

// Tambahkan event listener untuk input alamat TK
var alamatSmpInput = document.getElementById('alamatsmp');
alamatSmpInput.addEventListener('input', function () {
  validateAlamatSmp(this);
});

// Panggil fungsi checkFormValidity() saat halaman dimuat untuk menginisialisasi tombol DAFTAR
checkFormValidity();

</script>

  </div>
</body>
</html>

