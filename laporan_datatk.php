    

<html>

<head>
    <title>Laporan Data Registrasi TK</title>
    <link rel="stylesheet" href="css/stylelaporan.css">
    <!-- bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
</head>

<body>
    <h1 class="h1laporan">Laporan Data Registrasi TK</h1>
<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'registrasi';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Gagal')
?>
    <div class="container mt-4">
        <!-- form filter data berdasarkan range tanggal  -->
        <form action="laporan_datatk.php?cetak=1" method="get">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Periode</label>
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control" name="dari" required>
                </div>
                <div class="col-auto">
                    -
                </div>
                <div class="col-auto">
                    <input type="date" class="form-control" name="ke" required>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>

        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Siswa</td>
                            <td>Tanggal Pendaftaran</td>
                            <td>Nama Siswa</td>
                            <td>No Handphone</td>
                            <td>Alamat</td>
                            <td>Kursus</td>
                            <td>Jenis Kursus</td>
                            <td>Keterangan</td>

                        </tr>
                    </thead>
                    
                    <?php 
                    //jika parameter cetak ditemukan, maka data yang ditampilkan akan langsung diunduh ke dalam file excel
if(isset($_GET['cetak'])) {
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=laporan_datatk.xls");
}

                        //jika tanggal dari dan tanggal ke ada maka
                        if(isset($_GET['dari']) && isset($_GET['ke'])){
                            // tampilkan data yang sesuai dengan range tanggal yang dicari 
                            $data = mysqli_query($conn, "SELECT * FROM tb_tk WHERE tanggaltk BETWEEN '".$_GET['dari']."' AND '".$_GET['ke']."' ORDER BY tanggaltk ASC");
                        }else{
                            //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data
                            $data = mysqli_query($conn, "SELECT * FROM tb_tk ORDER BY tanggaltk ASC");
                        }
                        // $no digunakan sebagai penomoran 
                        $no = 1;
                        // while digunakan sebagai perulangan data 
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['namatk']; ?></td>
                        <td><?php echo $d['tanggaltk']; ?></td>
                        <td><?php echo $d['namaortutk']; ?></td>
                        <td><?php echo $d['nohandphonetk']; ?></td>
                        <td><?php echo $d['alamattk']; ?></td>
                        <td><?php echo $d['kursustk']; ?></td>
                        <td><?php echo $d['jeniskursustk']; ?></td>
                        <td><?php echo $d['statustk']; ?></td>
                        
                        </tr>
                        <!-- <a href="tambah-data.php">
                        <p class="p-data-reg">Tambah Data</p></a> -->
                    <?php } ?>
                </table>
            </div>
        </div>
        <a href="laporan_datatk.php?cetak=1&dari=<?php echo $_GET['dari']; ?>&ke=<?php echo $_GET['ke']; ?>"><button class="buttonn">Download</button></a>
        <a href="laporan_datatk.php"><button class="buttonn">Kembali Ke data semula</button></a>
        <!-- <a href="cetak1.php"><button class="buttonn">Cetak</button></a> -->
        <h6 class="h6">Kembali ke menu awal</h6> <button class="buttonn"><a href="laporan_dataall.php">KlIK DISINI</button></a>
    </div>
</body>

</html>
