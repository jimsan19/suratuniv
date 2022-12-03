<?php

//membuat koneksi ke database
$con = mysqli_connect("localhost", "root", "", "suratuniv");

//variabel nim yang dikirimkan form.php
$nim = $_GET['nim'];

//mengambil data
$query = mysqli_query($con, "SELECT * from mhs where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama'],
            'jk'      =>  @$mahasiswa['jk'],
            'jurusan'   =>  @$mahasiswa['jurusan'],
            'notelp'      =>  @$mahasiswa['notelp'],
            'email'      =>  @$mahasiswa['email'],
            'alamat'    =>  @$mahasiswa['alamat'],);

//tampil data
echo json_encode($data);


?>
