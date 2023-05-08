<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "registrasi");

// Memeriksa apakah ada data yang dikirimkan melalui form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Menangkap data yang dikirimkan melalui form
  $tutor_id = $_POST["tutor_id"];
  $course_id = $_POST["course_id"];
  $tanggal_pertemuan = $_POST["tanggal_pertemuan"];
  $namasiswa = $_POST["namasiswa"];
  $meeting_type = $_POST["meeting_type"];
  $meeting_fee = $_POST["meeting_fee"];
  $jumlah_pertemuan = $_POST["jumlah_pertemuan"];

  // Mengalikan meeting_fee dengan jumlah_pertemuan
  $total_fee = $meeting_fee * $jumlah_pertemuan;

  // Menambahkan data ke tabel pertemuan
  $sql = "INSERT INTO pertemuan (tutor_id, course_id, tanggal_pertemuan, namasiswa, meeting_type, meeting_fee, jumlah_pertemuan, total_fee) 
		VALUES ('$tutor_id', '$course_id', '$tanggal_pertemuan', '$namasiswa', '$meeting_type', '$meeting_fee', '$jumlah_pertemuan', '$total_fee')";


  // Menjalankan query untuk menambahkan data ke tabel pertemuan
  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
    echo "<meta http-equiv=refresh content=5;URL='tutor.php'>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Menutup koneksi ke database
  mysqli_close($conn);
}
?>
