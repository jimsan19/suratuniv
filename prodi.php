<?php
$con = mysqli_connect('localhost', 'root', '', 'suratuniv');

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
                        <!-- <a class="nav-link" href="tatausaha.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Tata Usaha
                            </a> -->
                        <a class="nav-link" href="prodi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Data Prodi
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
                    <h1 class="mt-4">Data Prodi</h1>
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
                        Tambah Prodi
                    </button>




                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Daftar Prodi
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Prodi</th>
                                            <th>Nama Fakultas</th>
                                            <th>Kepala Prodi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $get = mysqli_query($con, "select * from prodi  k, fakultas s where s.idfak =k.idfak");
                                        $i = 1;

                                        while ($p = mysqli_fetch_array($get)) {

                                        ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?= $p['namaprodi'] ?></td>
                                                <td><?= $p['namafak'] ?></td>
                                                <td><?= $p['kaprodi'] ?></td>
                                                <td>

                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $p['idprodi']; ?>">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- edit Modal -->
                                            <div class="modal fade" id="edit<?= $p['idprodi']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Dosen</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                No Sambung : <br>
                                                                <input type="text" name="no_sambung" class="form-control" placeholder="Nama Dosen" value="<?= $no_sambung; ?>">
                                                                Nama Pelanggan : <br>
                                                                <input type="text" name="nama" class="form-control mt-2" placeholder="NIP" value="<?= $nama ?>">

                                                                <input type="text" name="ket" class="form-control mt-2" placeholder="Keterangan" value="<?= $ket ?>">
                                                                <br>
                                                                <input type="hidden" name="iddosen" value="<?= $iddosen; ?>">
                                                                <button type="submit" class="btn btn-primary" name="editpelanggan">Update Pelanggan</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                            </div>
                            <!-- Hapus Modal -->
                            <div class="modal fade" id="delete<?= $p['idprodi']; ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Hapus Prodi <?= $p['namaprodi'];; ?> </h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <form method="post">
                                            <div class="modal-body">
                                                Apakah anda Yakin ingin menghapus data ini <?= $p['namaprodi'];; ?> ??
                                                <input type="hidden" name="idprodi" value="<?= $p['idprodi'];; ?>">
                                                <br><br>
                                                <button type="submit" class="btn btn-danger" name="hapuspelanggan">Delete</button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
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

<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Prodi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form method="post">

                <!-- Modal body -->
                <div class="modal-body">
                    <label for="">Nama Prodi</label>
                    <input type="text" name="namaprodi" class="form-control" placeholder="Nama Dosen">
                    <label for="">Nama Kepala Prodi</label>
                    <select name="kaprodi" class="form-control">
                        <?php
                        $ambilsemuadatanya = mysqli_query($con, "select * from dosen");
                        while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                            $nama = $fetcharray['nama'];
                            $iddosen = $fetcharray['iddosen'];
                            $id_tarif = $fetcharray['id_tarif'];
                        ?>

                            <option value="<?= $nama; ?>"><?= $nama; ?> </option>
                        <?php

                        }

                        ?>
                    </select>
                    <label for="">Fakultas </label>
                    <select name="idfak" class="form-control">
                        <?php
                        $ambilsemuadatanya = mysqli_query($con, "select * from fakultas");
                        while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)) {
                            $namafak = $fetcharray['namafak'];
                            $dekanfak = $fetcharray['dekanfak'];
                            $idfak = $fetcharray['idfak'];
                        ?>

                            <option value="<?= $idfak; ?>"><?= $dekanfak; ?> ---<?= $namafak; ?> </option>
                        <?php

                        }

                        ?>
                    </select>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="tambahdosen">Submit</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </form>

        </div>
    </div>
</div>

</html>
<?php

if (isset($_POST['tambahdosen'])) {

    $namaprodi = $_POST['namaprodi'];
    $kaprodi = $_POST['kaprodi'];
    $idfak = $_POST['idfak'];

    $sql = $con->query("insert into prodi (namaprodi,kaprodi, idfak) values('$namaprodi','$kaprodi','$idfak')");

    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil Disimpan");
            window.location.href = "prodi.php";
        </script>

<?php
    } else {
        echo "gagal boss";
    }
}




//hapus MHS
if (isset($_POST['hapuspelanggan'])) {
    $idprodi = $_POST['idprodi'];

    $hapus = $con->query("DELETE from prodi where idprodi='$idprodi'");

    if ($hapus) {
        echo '
<script>alert("Hapus Mahasiswa Berhasil ");
window.location.href="prodi.php"

</script>
';
    } else {
        echo '
<script>alert("Hapus Mahasiswa Gagal ");
window.location.href="prodi.php"

</script>
';
    }
}
?>