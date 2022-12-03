
<?php


//membuat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "suratuniv");

//variabel nim yang dikirimkan form.php
$nip = $_GET['nip'];

//mengambil data
$query = mysqli_query($conn, "SELECT * from dosen where nip='$nip'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama'],
            'jabatan'      =>  @$mahasiswa['jabatan'],
            );

//tampil data
echo json_encode($data);
?>