<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'suratuniv');
if (isset($_SESSION['login'])) {
} else {
    header('location:login.php');
}

// require 'ceklogin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Persuratan </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Aplikasi Persuratan</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dasboard
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Data Surat Tugas
                        </a>
                        <a class="nav-link" href="penelitian.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>
                            Data Surat Penelitian
                        </a>
                        <a class="nav-link" href="cuti.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Surat Cuti
                        </a>
                        <a class="nav-link" href="cutistaff.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Surat Cuti Staff
                        </a>
                        <a class="nav-link" href="sakit.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Surat Cuti Sakit
                        </a>
                        <a class="nav-link" href="cutialasan.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Surat Cuti Alasan Lain
                        </a>
                        <a class="nav-link" href="dosen.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Dosen
                        </a>
                        <a class="nav-link" href="prodi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Prodi
                        </a>
                        <a class="nav-link" href="tatausaha.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Tata Usaha
                        </a>
                        <a class="nav-link" href="fakultas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Fakultas
                        </a>
                        <a class="nav-link" href="datamhs.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Mahasiswa
                        </a>
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Data </h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Selamat Datang</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">


                            </div>
                        </div>
                    </div>

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-info mb-4" data-toggle="modal" data-target="#myModal">
                        Tambah Surat Tugas
                    </button>




                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Surat Tugas
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sura</th>
                                            <th>Nomor Surat</th>
                                            <th>Nama Dosen</th>
                                            <th>NIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $get = mysqli_query($con, "SELECT* FROM surattugas  k, dosen s where s.nip =k.iddosen");
                                        $i = 1;

                                        while ($p = mysqli_fetch_array($get)) {

                                        ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $p['namasurat'] ?></td>
                                                <td><?= $p['nomor'] ?></td>
                                                <td><?= $p['nama'] ?></td>
                                                <td><?= $p['nip'] ?></td>
                                                <td>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $p['idsuratt']; ?>">
                                                        Delete
                                                    </button>
                                                    <a href="cetaktugas.php?idsuratt=<?= $p['idsuratt'] ?>" class="btn btn-info">Cetak Surat</a>
                                                </td>
                                            </tr>
                                            <!-- Hapus Modal -->
                                            <div class="modal fade" id="delete<?= $p['idsuratt']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data <?= $p['nip'];; ?> </h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                Apakah anda Yakin ingin menghapus data ini <?= $p['nip'];; ?> ??
                                                                <input type="hidden" name="idsuratt" value="<?= $p['idsuratt'];; ?>">
                                                                <br><br>
                                                                <button type="submit" class="btn btn-danger" name="hapuspelanggan">Delete</button>
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php
                                        }; //end of while

                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Fakultas Teknologi Informasi USN 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

</body>
<?php

$no = mysqli_query($con, "select idsuratt from surattugas order by idsuratt desc");
$id = mysqli_fetch_array($no);
$kode = $id['idsuratt'];
$urut = substr($kode, -3);
$tambah = (int) $urut + 1;
if (strlen($tambah) == 1) {
    $format = "000" . $tambah;
} else if (strlen($tambah) == 2) {
    $format = "00" . $tambah;
} else {
    $format = "0" . $tambah;
}

$tanggal_keluar = date("Y-m-d");
?>

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Surat Tugas Baru</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">

                <!-- Modal body -->
                <div class="modal-body">
                    <label for="color">NIP</label>
                    <input type="text" onkeyup="isi_otomatis()" id="nip" name="iddosen" class="form-control">
                    <label for="">Nama Dosen </label>
                    <input type="text" id="nama" class="form-control" placeholder="Nama Dosen" disabled>
                    <!-- <input type="text" id="iddosen" name="iddosen" class="form-control"readonly> -->

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <script type="text/javascript">
                        function isi_otomatis() {
                            var nip = $("#nip").val();
                            $.ajax({
                                url: 'met.php',
                                data: "nip=" + nip,
                            }).success(function(data) {
                                var json = data,
                                    obj = JSON.parse(json);
                                $('#nama').val(obj.nama);
                                $('#jabatan').val(obj.jabatan);

                            });
                        }
                    </script>
                    <label for="">Nama Surat </label>
                    <input type="text" name="namasurat" class="form-control" placeholder="Nama Surat">

                    <label for="">Nomor Surat </label>
                    <input type="text" name="nomor" class="form-control" value="<?php echo $format; ?>/UN56.C06/KP.08/2022" readonly>
                    <label for="">Isi </label>
                    <textarea name="isi" class="form-control" placeholder="Isi Surat"></textarea>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="tambahsurat">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </form>

        </div>
    </div>
</div>

</html>
<?php

if (isset($_POST['tambahsurat'])) {

    $namasurat = $_POST['namasurat'];
    $nomor = $_POST['nomor'];
    $iddosen = $_POST['iddosen'];
    $isi = $_POST['isi'];

    $sql = $con->query("insert into surattugas (namasurat,nomor, iddosen, isi ) values('$namasurat','$nomor','$iddosen', '$isi')");

    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "index.php";
        </script>

<?php
    } else {
        echo "gagal boss";
    }
}


if (isset($_POST['hapuspelanggan'])) {
    $idsuratt = $_POST['idsuratt'];

    $hapus = mysqli_query($con, "DELETE from surattugas where idsuratt='$idsuratt'");

    if ($hapus) {
        echo '
                                    <script>alert("Hapus Data Berhasil ");
                                    window.location.href="index.php"
                            
                                    </script>
                                    ';
    } else {
        echo '
                                    <script>alert("Hapus Data Gagal ");
                                    window.location.href="index.php"
                            
                                    </script>
                                    ';
    }
}
?>