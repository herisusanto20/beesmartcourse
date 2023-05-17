<?php
include 'db.php';

if (isset($_GET['namasmp'])) {
    $namasmp = $_GET['namasmp'];

    // Perform the delete operation if user confirms
    if (isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
        $sql = "DELETE FROM tb_smp WHERE namasmp = '$namasmp'";
        if (mysqli_query($conn, $sql)) {
            echo "Data Berhasil di Hapus.";
        } else {
            echo "Eror min:(: " . mysqli_error($conn);
        }

        // Redirect back to the data registration page
        echo "<meta http-equiv=refresh content=2;URL='datasmp.php'>";
    } else {
        // Display the confirmation prompt
        echo "<script>
            function confirmDelete() {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    window.location.href = 'hapusdaftarsmp.php?namasmp=".$namasmp."&confirm=true';
                }
            }
            confirmDelete();
        </script>";
    }
}
?>
