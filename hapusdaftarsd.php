<?php
include 'db.php';

if (isset($_GET['namasd'])) {
    $namasd = $_GET['namasd'];

    // Perform the delete operation if user confirms
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $sql = "DELETE FROM tb_sd WHERE namasd = '$namasd'";
        if (mysqli_query($conn, $sql)) {
            echo "Data Berhasil di Hapus.";
        } else {
            echo "Eror min:(: " . mysqli_error($conn);
        }

        // Redirect back to the data registration page
        echo "<meta http-equiv=refresh content=2;URL='datasd.php'>";
    } else {
        // Display the confirmation prompt
        echo "<script>
            function confirmDelete() {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    window.location.href = 'hapusdaftarsd.php?namasd=".$namasd."&confirm=true';
                }
            }
            confirmDelete();
        </script>";
    }
}
?>
