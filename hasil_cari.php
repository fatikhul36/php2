<?php 
    include './koneksi.php';
    
    $nama_siswa = $_GET['nama_siswa'];

    $sql = "SELECT * FROM siswa1 WHERE nama_siswa = "$nama_siswa;

    if($conn->query($sql) === TRUE){
        echo "pencarian berhasil<br>";
        echo "<a href='tampil.php'>kembali</a><br>";
        echo "<a href='cari_data.php'>cari lagi</a><br>";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>