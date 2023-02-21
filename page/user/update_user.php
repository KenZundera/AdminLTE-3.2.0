<?php 

    $iduser = htmlspecialchars($_POST['iduser']);
    $nama = htmlspecialchars($_POST['namauser']);
    $status = htmlspecialchars($_POST['status']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "UPDATE tbuser SET namauser = '$nama', status = '$status', password = '$password' WHERE iduser = '$iduser'";

    $mysqli->query($sql);

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    }
?>