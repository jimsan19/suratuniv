<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "suratuniv");

//variabel nip yang dikirimkan form.php
$nama = $_GET['nama'];

//mengambil data
$query = mysqli_query($koneksi, "SELECT * from dosen where nama='$nama'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
           // 'nama'      =>  @$mahasiswa['nama'],
           'iddosen'      =>  @$mahasiswa['iddosen'],
            'nip'    =>  @$mahasiswa['nip'],
        );

//tampil data
echo json_encode($data);

?>
