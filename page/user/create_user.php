<?php 
    $id = htmlspecialchars($_POST['iduser']);
    $nama = htmlspecialchars($_POST['namauser']);
    $status = htmlspecialchars($_POST['status']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "INSERT INTO tbuser (iduser, namauser, status, password) VALUES ('$id', '$nama', '$status', '$password')";

    $mysqli->query($sql);
    
    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');</script>";
        echo "<script>document.location='index.php?page=data_user';</script>";
    }
?>