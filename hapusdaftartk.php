<?php
include 'db.php';

if (isset($_GET['namatk'])) {
    $namatk = $_GET['namatk'];

    // Perform the delete operation if user confirms
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $sql = "DELETE FROM tb_tk WHERE namatk = '$namatk'";
        if (mysqli_query($conn, $sql)) {
            echo "Data Berhasil di Hapus.";
        } else {
            echo "Eror min:(: " . mysqli_error($conn);
        }

        // Redirect back to the data registration page
        echo "<meta http-equiv=refresh content=2;URL='datatk.php'>";
    } else {
        // Display the confirmation prompt
        echo "<script>
            function confirmDelete() {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    window.location.href = 'hapusdaftartk.php?namatk=".$namatk."&confirm=true';
                }
            }
            confirmDelete();
        </script>";
    }
}
?>
