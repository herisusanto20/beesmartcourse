<?php
include "db.php";

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
} else {
    $keyword = "";
}

$sql = "SELECT * FROM pertemuan";

if (!empty($keyword)) {
    $sql .= " WHERE tutor_id LIKE '%$keyword%'";
}

$result = mysqli_query($conn, $sql);
if ($result === false) {
    echo "Error executing query: " . mysqli_error($conn);
} else if (mysqli_num_rows($result) > 0) {
    // // create file pointer
    // $output = fopen('php://output', 'w');

    // // set headers for file download
    // header("Content-Type: text/csv");
    // header("Content-Disposition: attachment; filename=pertemuan.csv");

    // // create headers row
    // fputcsv($output, array('ID Tutor', 'ID Kursus', 'Bulan', 'Nama Siswa', 'Jumlah Pertemuan', 'Jenis Pertemuan', 'Biaya Pertemuan', 'Total Biaya Pertemuan'));

    // // output data rows
    // while ($row = mysqli_fetch_assoc($result)) {
    //     fputcsv($output, $row);
    // }

    // // close file pointer
    // fclose($output);

?>
    <style>
        h2{
            font-family: "Poppins", sans-serif;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #eee;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        input[type=text] {
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 12px;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
    <h2>Berikut adalah data gaji anda</h2>
    <!-- <form action="" method="get">
        <input type="text" name="keyword" value="<?= $keyword ?>" placeholder="Cari...">
        <input type="submit" value="Cari">
    </form> -->
    <table>
        <thead>
        <tr>
				<th>ID Tutor</th>
				<th>ID Kursus</th>
				<th>Bulan</th>
				<th>Nama Siswa</th>
				<th>Jumlah Pertemuan</th>
				<th>Jenis Pertemuan</th>
				<th>Biaya Pertemuan</th>
				<th>Total Biaya Pertemuan</th>
			</tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $row['tutor_id'] ?></td>
                    <td><?= $row['course_id'] ?></td>
                    <td><?= $row['tanggal_pertemuan'] ?></td>
                    <td><?= $row['namasiswa'] ?></td>
                    <td><?= $row['jumlah_pertemuan'] ?></td>
                    <td><?= $row['meeting_type'] ?></td>
                    <td><?= $row['meeting_fee'] ?></td>
                    <td><?= $row['total_fee'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!-- <a href="pertemuan.csv" download><button>Download</button></a> -->
<?php
} else {
    echo "Tidak ada data gaji yang ditemukan.";
}

mysqli_close($conn);
?>
    <script>
		window.print();
	</script>