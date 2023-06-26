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
      width: 400px;
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
    textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  resize: vertical; /* Allow vertical resizing */
}

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #1E90FF;
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
    
    // Memeriksa apakah ada data yang dikirim dari form
    if (isset($_POST['nama_kursus']) && isset($_POST['tingkatan'])) {
        $nama_kursus = $_POST['nama_kursus'];
        $tingkatan = $_POST['tingkatan'];
    
        // Mengambil data kursus berdasarkan nama_kursus dan tingkatan
        $query = "SELECT * FROM kursusbeesmart WHERE nama_kursus='$nama_kursus' AND tingkatan='$tingkatan'";
        $result = mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $nama_kursus = $row['nama_kursus'];
            $penjelasan = $row['penjelasan'];
            $tingkatan = $row['tingkatan'];
    
            echo "<h2>Edit Data Kursus</h2>
                <form method='POST' action='update_data.php'>
                    <input type='hidden' name='nama_kursus' value='$nama_kursus'>
    
                    <label for='penjelasan'>Penjelasan:</label>
                    <textarea id='penjelasan' name='penjelasan' required>$penjelasan</textarea><br><br>
    
                    <input type='hidden' name='tingkatan' value='$tingkatan'>
    
                    <input type='submit' value='Ubah Data'>
                </form>";
        } else {
            echo "Data kursus tidak ditemukan.";
        }
    }
    
    mysqli_close($conn);
    ?>
</body>
</html>


