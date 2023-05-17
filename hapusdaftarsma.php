<?php
include 'db.php';

if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];

    // Perform the delete operation if user confirms
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $sql = "DELETE FROM tb_data WHERE nama = '$nama'";
        if (mysqli_query($conn, $sql)) {
            echo "Data Berhasil di Hapus.";
        } else {
            echo "Eror min:(: " . mysqli_error($conn);
        }

        // Redirect back to the data registration page
        echo "<meta http-equiv=refresh content=1;URL='datasma.php'>";
    } else {
        // Display the confirmation prompt
        echo "<script>
            function confirmDelete() {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    window.location.href = 'hapusdaftarsma.php?nama=".$nama."&confirm=true';
                }
            }
            confirmDelete();
        </script>";
    }
}
?>
