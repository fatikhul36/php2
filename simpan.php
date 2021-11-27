<?php
    include './koneksi.php';

    $nis=$_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa1 (nis, nama_siswa, alamat, jurusan, jenis_kelamin) VALUES ('$nis','$nama_siswa','$alamat','$jenis_kelamin','$jurusan')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>kembali</a><br>";
    }
    else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>