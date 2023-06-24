<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Kursus</title>
    
    <style>
        
        body{
            font-family: "Poppins", sans-serif;
        }
    .hm {
        /* background-image: url("../img/dataregis.jpg"); */
        background-color: #1E90FF;
    }

    .container {
    width: 100%;
    margin: 5px;
    margin-top: 1rem;
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* Mengatur kontainer agar ditampilkan di tengah */
    align-items: flex-start; /* Mengatur kontainer agar elemen-elemennya ditampilkan di atas */
}

.sub-container {
    margin-top: 10px;
    flex-basis: calc(25% - 20px); /* Mengatur lebar sub-container agar menempati 25% lebar kontainer dengan ruang sekitar 20px */
}

.course-container {
    margin-top: 5px;
    padding: 10px;
    background-color: #f2f2f2;
    border-radius: 5px;
    height: 100%; /* Mengatur tinggi course-container agar memenuhi sub-container */
}


.course-container h5 {
    margin: 0;
    font-size: 16px;
    font-weight: bold;
    line-height: 1.2; /* Mengatur jarak antara baris agar lebih nyaman dibaca */
}

.course-container p {
    margin: 5px 0;
    font-size: 14px;
    line-height: 1.2; /* Mengatur jarak antara baris agar lebih nyaman dibaca */
}


    @media (min-width: 1024px) {
        .sub-container {
            flex-basis: 100%;
        }
        
        .container {
            flex-direction: row;
        }
    }
    @media (max-width: 500px) {
        .sub-container {
            flex-basis: 100%;
        }
        
        .container {
            flex-direction: column;
        }
    }
    .cta {
        align-items: center;
  display: inline-block;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  background-color: orange;
  color: #ffffff;
  border-radius: 0.5rem;
  box-shadow: 1px 1px 3px black;
  text-align: center;
  text-decoration: none;
  margin: 10px 1rem;
}

    h1{
        text-align:center;
    }
</style>

</head>
<body>
    <h1>Daftar Disini</h1>
<a href="kuotatk1.php" class="cta">Kelas TK</a>
                <a href="kuotasd1.php" class="cta">Kelas SD</a>
                <a href="kuotasmp1.php" class="cta">Kelas SMP</a>
                <a href="kuotasma1.php" class="cta">Kelas SMA</a>
</body>
</html>
<section class="pilih">
<?php
// Koneksi ke database (sesuaikan dengan pengaturan server Anda)
$koneksi = mysqli_connect("localhost", "root", "", "registrasi");
$query = "SELECT tabel, kursus, jenis_kursus, kuota FROM tb_kuota";
$result = mysqli_query($koneksi, $query);

// Periksa apakah ada data yang ditemukan
if (mysqli_num_rows($result) > 0) {
    // Simpan data kursus berdasarkan kolom tabel
    $kursus_data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $tabel = $row["tabel"];

        // Ganti nama kolom "tabel" menjadi label yang lebih deskriptif
        if ($tabel === "tb_tk") {
            $label_tabel = "TK";
        } elseif ($tabel === "tb_sd") {
            $label_tabel = "SD";
        } elseif ($tabel === "tb_smp") {
            $label_tabel = "SMP";
        } elseif ($tabel === "tb_data") {
            $label_tabel = "SMA";
        } else {
            $label_tabel = $tabel;
        }

        // Tambahkan data kursus ke array
        if (!isset($kursus_data[$label_tabel])) {
            $kursus_data[$label_tabel] = array();
        }

        $kursus = $row["kursus"];
        $jenis_kursus = $row["jenis_kursus"];
        $kuota = $row["kuota"];

        // Tambahkan data jenis kursus dan kuota ke array
        if (!isset($kursus_data[$label_tabel][$kursus])) {
            $kursus_data[$label_tabel][$kursus] = array();
        }
        if (!isset($kursus_data[$label_tabel][$kursus][$jenis_kursus])) {
            $kursus_data[$label_tabel][$kursus][$jenis_kursus] = $kuota;
        } else {
            $kursus_data[$label_tabel][$kursus][$jenis_kursus] += $kuota;
        }
    }

    // Urutkan array berdasarkan kolom tabel
    $urutan_tabel = array('TK', 'SD', 'SMP', 'SMA');
    $kursus_data = array_replace(array_flip($urutan_tabel), $kursus_data);

    // Tampilkan data dalam kontainer
    foreach ($kursus_data as $tabel => $kursus) {
        echo '<div class="container">';
        echo '<h3>Tingkatan : ' . $tabel . '</h3>';
        

        foreach ($kursus as $nama_kursus => $jenis_kursus_data) {
            echo '<div class="sub-container">';
            echo '<h4>Kursus: ' . $nama_kursus . '</h4>';

            foreach ($jenis_kursus_data as $jenis_kursus => $kuota) {
                echo '<div class="course-container">';
                echo '<h5>Jenis Kursus: ' . $jenis_kursus . '</h5>';
                echo '<p>Kuota: ' . $kuota . '</p>';
                echo '</div>';
            }

            echo '</div>';
        }

        echo '</div>';
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
</section>