<?php
    include './koneksi.php';

    $nis=$_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $id = $_POST['id'];
    
    $sql = "UPDATE siswa1 SET nama_siswa='$nama_siswa' , alamat='$alamat' , jenis_kelamin='$jenis_kelamin' , jurusan='$jurusan' WHERE id='$id";
    if($conn->query($sql) === TRUE){
        echo "data berhasil di ubah <br>";
        echo "<a href='tampil.php'>kembali</a><br>";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>
