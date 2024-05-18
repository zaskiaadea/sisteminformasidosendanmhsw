<?php
    // mengambil program koneksidb, dengan menggunakan fungsi include
    include "KoneksiDB.php";
    //Membuat SQL untuk menampilkan data
    $sqltampil = "SELECT * FROM tbl_dosen";
    //Melakukan proses query ke basisdata
    $query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
    $nomor = 1;//untuk membuat nomor untuk di tabel hasil query
?>
    <h2>Data Dosen STMIK Royal</h2>
    <!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
    <a href="FormTambah.php">Tambah Data</a><br><br>
    <table width="100%" border="1" cellspacing="0">
    <thead style="background-color:#3cb371; font-family:'Cambria';">     
        <tr>
        <th>No</th>
        <th>Nidn</th>
        <th>Nama Dosen</th>
        <th>Tanggal Lahir </th>
        <th>Alamat</th>
        <th>jabatan</th>
        <th>email</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while, foreach)
            //mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
            while ($data = mysqli_fetch_assoc($query)) {
        ?>
            <tr align="center">
                <!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt
                dibawah -->
                <td><?= $nomor ?></td>
                <td><?= $data['nidn'] ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['tgllahir'] ?></td>
                <td><?= $data['address'] ?></td>
                <td><?= $data['jabatan'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="FormEdit.php?nidn=<?=$data['nidn']?>"> Edit</a> | <a
                    href="Delete.php?nidn=<?=$data['nidn']?>">Delete</a>
                </td>
            </tr>
            <?php $nomor++;
                } //akhir dari perulangan 
             ?>
    </tbody>
    </table

    <br><br>

   
    <h2>Data Mahasiswa STMIK ROYAL Kisaran</h2>
    <!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
    <a href="FormTambahmhsw.php">Tambah Data</a><br><br>
    <table width="100%" border="1" cellspacing="0">
    <thead style="background-color:#3cb371; font-family:'Cambria';">     
        <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Prodi</th>
        <th>Usia</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while, foreach)
            //mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
            $sql_mhs = "SELECT * FROM tblmhsw";
            //Melakukan proses query ke basisdata
            $query_mhs = mysqli_query($koneksi, $sql_mhs) or die("SQL Error");
            $nomor = 1;//untuk membuat nomor untuk di tabel hasil query
            while ($data_mhs = mysqli_fetch_assoc($query_mhs)) {
        ?>
            <tr align="center">
                <!-- untuk menampilkan data_mhs, kita gunakan tag pandek php yaitu spt
                dibawah -->
                <td><?= $nomor ?></td>
                <td><?= $data_mhs['nim'] ?></td>
                <td><?= $data_mhs['name'] ?></td>
                <td><?= $data_mhs['address'] ?></td>
                <td><?= $data_mhs['prodi'] ?></td>
                <td><?= $data_mhs['age'] ?></td>
                <td>
                    <a href="FormEdit.php?nidn=<?=$data['nidn']?>"> Edit</a> | <a
                    href="Delete.php?nidn=<?=$data['nidn']?>">Delete</a>
                </td>
            </tr>
            <?php $nomor++;
                } //akhir dari perulangan 
             ?>
    </tbody>
    </table