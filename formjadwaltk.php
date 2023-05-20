<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="form-daftar" style="display: none;">
  <h2>Form Pendaftaran</h2>
  <form action="simpan_jadwal.php" method="POST">
    <input type="hidden" id="input-hari" name="hari" value="">
    <input type="hidden" id="input-jam" name="jam" value="">
    <label for="input-nama">Nama Kursus:</label>
    <input type="text" id="input-nama" name="nama_kursus" required>
    <br>
    <label for="input-jadwal">Jadwal:</label>
    <input type="text" id="input-jadwal" name="jadwal" required>
    <br>
    <button type="submit">Simpan</button>
  </form>
</div>
<script>
  function daftar(hari, jam, tipe) {
    // Lakukan operasi penyimpanan data ke database jadwaltk di sini
    // Misalnya, menggunakan Ajax untuk mengirim permintaan ke server dan menyimpan data
    
    // Menampilkan form pendaftaran
    document.getElementById('form-daftar').style.display = 'block';
    // Mengisi nilai input tersembunyi dengan data jadwal yang dipilih
    document.getElementById('input-hari').value = hari;
    document.getElementById('input-jam').value = jam;
  }
</script>
</body>
</html>

