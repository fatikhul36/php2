<form action="simpan.php" method="post">
    <table>
        <tr>
            <td>nama siswa</td>
            <td>:</td>
            <td><input type="text" name="nama_siswa"></td>
        </tr>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki</td>
            <td><input type="radio" name="jenis_kelamin" value="perempuan">perempuan</td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td><input type="radio" name="jurusan" value="RPL">RPL</td>
            <td><input type="radio" name="jurusan" value="TKJ">TKJ</td>
            <td><input type="radio" name="jurusan" value="TJA">TJA</td>
        </tr>
    </table>
    <input type="submit" name="simpan" value="SIMPAN">
</form>
