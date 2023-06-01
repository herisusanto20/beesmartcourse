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

<form action="" method="POST" enctype="multipart/form-data">
  <input type="text" name="namatk" placeholder="Nama Lengkap" class="input-controll" required><br>
  <script>
    function setTodayDate() {
      var today = new Date();
      var day = String(today.getDate()).padStart(2, '0');
      var month = String(today.getMonth() + 1).padStart(2, '0');
      var year = today.getFullYear();
      var todayDate = year + '-' + month + '-' + day;

      document.getElementById("tanggaltk").setAttribute("value", todayDate);
    }
  </script>
  <p>Tanggal Pendaftaran</p>
  <input type="date" name="tanggaltk" id="tanggaltk" placeholder="Tanggal" class="input-controll" readonly required><br>
  <script>
    setTodayDate();
  </script>
  <input type="text" name="namaortutk" placeholder="Nama Orang Tua" class="input-controll" required>
  <input type="text" name="nohandphonetk" id="nohandphonetk" placeholder="No Handphone atau WA, contoh: 62819157788649" class="input-controll" required>
  <span id="error-message" class="error-message"></span>
  <script>
    var input = document.getElementById('nohandphonetk');
    var errorMessage = document.getElementById('error-message');

    input.addEventListener('input', function() {
      var pattern = /^[0-9]{10,14}$/;
      var isValid = pattern.test(input.value);

      if (!isValid) {
        errorMessage.textContent = 'Nomor handphone harus terdiri dari 10 hingga 14 digit angka';
        input.classList.add('error');
      } else {
        errorMessage.textContent = '';
        input.classList.remove('error');
      }
    });
  </script>
  <input type="text" name="alamattk" placeholder="Alamat" class="input-controll" required>
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
        echo "<option value='" . $row['kursus'] . "'>" . $row['kursus'] . "</option>";
    }
?>

</select>

  <select name="jeniskursustk" class="input-controll" required>
    <optgroup label="Jenis Kursus">
      <option>Reguler</option>
    </optgroup>
  </select>
  <input type="submit" value="DAFTAR" class="btn" name="proses">
</form>
