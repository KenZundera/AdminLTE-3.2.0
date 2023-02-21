<?php 
    $mysqli->query("DELETE FROM tbuser WHERE iduser = '$_GET[kode]'");

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Dihapus');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    }
?>