<?php
    include './koneksi.php';
    echo "<a href='formulir.php'>Tambah data</a><br>";
    echo "<a href='cari_data.php'>cari</a>";

    $sql ="SELECT * FROM siswa1";
    $result = $conn->query($sql);
    $a = 1;

    while($baris = mysqli_fetch_array($result)){
        echo "<br>";
        echo "$a";
        echo "<br>";
        echo "nis : " . $baris[1] . "<br>";
        echo "nama : " . $baris[2] . "<br>";
        echo "jenis kelamin : " . $baris[3] . "<br>";
        echo "alamat : " . $baris[4] . "<br>";
        echo "jurusan : " . $baris[5] . "<br>";
        echo "<a href='ubah_data?id_siswa=$baris[0]'>ubah &nbsp</a>";
        echo "<a href='hapus.php?id_siswa=$baris[0]'>hapus</a>";
        $a++;
    }
    $conn->close();

?>