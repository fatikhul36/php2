<?php
    include './koneksi.php';

    $id = $_GET['id_siswa'];

    $sql = "DELETE FROM siswa1 WHERE id_siswa='$id'";

    if($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href='tampil.php'>kembali</a>";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>