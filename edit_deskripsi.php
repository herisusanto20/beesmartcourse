

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Deskripsi</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    h2 {
      color: #333;
      text-align: center;
      margin-top: 20px;
    }

    form {
      width: 300px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    select, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    input[type="submit"] {
      background-color: #1E90FF;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: orange;
    }
  </style>
</head>
<body>
  
</body>
</html>
<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrasi";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mendapatkan data nama_kursus dan tingkatan dari database
$query_kursus = "SELECT DISTINCT nama_kursus FROM kursusbeesmart";
$query_tingkatan = "SELECT DISTINCT tingkatan FROM kursusbeesmart";
$result_kursus = mysqli_query($conn, $query_kursus);
$result_tingkatan = mysqli_query($conn, $query_tingkatan);

// Menampilkan form untuk memilih nama_kursus dan tingkatan
if (mysqli_num_rows($result_kursus) > 0 && mysqli_num_rows($result_tingkatan) > 0) {
    echo "<h2>Edit Deskripsi Kursus</h2>
        <form method='POST' action='edit.php'>
            <label for='nama_kursus'>Pilih kursus:</label>
            <select id='nama_kursus' name='nama_kursus'>";
    while ($row = mysqli_fetch_assoc($result_kursus)) {
        echo "<option value='".$row['nama_kursus']."'>".$row['nama_kursus']."</option>";
    }
    echo "</select><br><br>";

    echo "<label for='tingkatan'>Pilih tingkatan:</label>
            <select id='tingkatan' name='tingkatan'>";
    while ($row = mysqli_fetch_assoc($result_tingkatan)) {
        echo "<option value='".$row['tingkatan']."'>".$row['tingkatan']."</option>";
    }
    echo "</select><br><br>";

    echo "<input type='submit' value='Edit'>
        </form>";
} else {
    echo "Tidak ada data deskripsi.";
}

mysqli_close($conn);
?>
