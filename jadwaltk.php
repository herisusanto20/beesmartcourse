<style>
  .jadwal-table {
    border-collapse: collapse;
  }
  .jadwal-table th,
  .jadwal-table td {
    padding: 10px;
    border: 1px solid #ccc;
  }
  .jadwal-table th {
    background-color: #f2f2f2;
  }
  .jadwal-table td .btn {
    display: inline-block;
    padding: 5px 10px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  .jadwal-table td .btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
  }
</style>

<table class="jadwal-table">
  <thead>
    <tr>
      <th>Hari</th>
      <th>Jam</th>
      <th>Kuota Reguler</th>
      <th>Kuota Privat</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Senin</td>
      <td>08:00</td>
      <td id="kuota-reguler-08:00">5</td>
      <td id="kuota-privat-08:00">3</td>
      <td><button class="btn" onclick="daftar('Senin', '08:00', 'reguler')">Daftar</button></td>
    </tr>
    <tr>
      <td>Senin</td>
      <td>10:00</td>
      <td id="kuota-reguler-10:00">5</td>
      <td id="kuota-privat-10:00">3</td>
      <td><button class="btn" onclick="daftar('Senin', '10:00', 'reguler')">Daftar</button></td>
    </tr>
    <!-- Tambahkan baris jadwal lainnya di sini -->
  </tbody>
</table>

<script>
  function daftar(hari, jam, tipe) {
    // Lakukan operasi penyimpanan data ke database jadwaltk di sini
    // Misalnya, menggunakan Ajax untuk mengirim permintaan ke server dan menyimpan data
    $.ajax({
      url: 'simpan_jadwal.php',
      method: 'POST',
      data: {
        hari: hari,
        jam: jam,
        tipe: tipe
      },
      success: function(response) {
        console.log('Data berhasil disimpan');
        // Redirect atau tampilkan pesan sukses jika diperlukan
        
        // Update kuota
        var kuotaRegulerCell = document.getElementById('kuota-reguler-' + jam);
        var kuotaPrivatCell = document.getElementById('kuota-privat-' + jam);
        var kuotaReguler = parseInt(kuotaRegulerCell.textContent);
        var kuotaPrivat = parseInt(kuotaPrivatCell.textContent);
        
        if (tipe === "reguler" && kuotaReguler > 0) {
          kuotaReguler--;
          kuotaRegulerCell.textContent = kuotaReguler;
        } else if (tipe === "privat" && kuotaPrivat > 0) {
          kuotaPrivat--;
          kuotaPrivatCell.textContent = kuotaPrivat;
        }
        
        // Nonaktifkan tombol jika kuota habis
        var button = kuotaRegulerCell.nextElementSibling.querySelector(".btn");
        if ((tipe === "reguler" && kuotaReguler === 0) || (tipe === "privat" && kuotaPrivat === 0)) {
          button.disabled = true;
        }
      },
      error: function(xhr, status, error) {
        console.log('Terjadi kesalahan: ' + error);
        // Tampilkan pesan error jika diperlukan
      }
    });
  }
</script>
