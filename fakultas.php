<?php
session_start();
$con = mysqli_connect('localhost','root','','suratuniv');
if(isset($_SESSION['login'])){
	

}else {
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
                            <a class="nav-link" href="tatausaha.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Tata Usaha
                            </a>
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
                        <h1 class="mt-4">Data Fakultas</h1>
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
                            Tambah Fakultas
                          </button>

                        


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Daftar Fakultas
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Fakultas</th>
                                                <th>Dekan Fakultas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $get = mysqli_query($con, "select * from fakultas");
                                            $i =1;

                                            while($p=mysqli_fetch_array($get)){

                                            ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td><?= $p['namafak']?></td>
                                                <td><?= $p['dekanfak']?></td>
                                                <td> 
                                                     <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$p['idfak'];?>">
                                                            Edit
                                                     </button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$p['idfak'];?>">
                                                            Delete
                                                        </button>
                                                    </td>
                                            </tr>
                                        
                                        <!-- edit Modal -->
                                         <div class="modal fade" id="edit<?=$p['idfak'];?>">
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
                                         <label for="">Fakutas</label>
                                          <input type="text" name="namafak" class="form-control" placeholder="Nama Fakultas" value="<?=$p['namafak'];?>">
                                          <label for="">Dekan Fakultas</label>
                                          <input type="text" name="dekanfak" class="form-control mt-2" placeholder="Dekan Fakultas" value="<?=$p['dekanfak']?>">

                                            <br>
                                            <input type="hidden" name="idfak"  value="<?=$p['idfak'];?>">
                                            <button type="submit" class="btn btn-primary" name="editpelanggan">Update Pelanggan</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </form>
                                            </div>                 
                                        </div>
                                    </div>
                                    </div>
                            <!-- Hapus Modal -->
                                         <div class="modal fade" id="delete<?=$p['idfak'];?>" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Hapus Fakultas <?=$p['namafak'];;?> </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            Apakah anda Yakin ingin menghapus data ini <?=$p['namafak'];?> ??
                                            <input type="hidden" name="idfak"  value="<?=$p['idfak'];?>">
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
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
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
            <label for="">Nama Fakultas</label>
        <input type="text" name="namafak" class="form-control" placeholder="Nama Fakultas">
        <label for="">Nama Dekan</label>
        <input type="text" name="dekanfak" class="form-control" placeholder="Nama Dekan Fakultas">
     
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="tambahdosen" >Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
        </div>
        </form>
        
      </div>
    </div>
  </div>

</html>
<?php
							
                            if (isset($_POST['tambahdosen'])) {
                              
                                $namafak= $_POST['namafak'];
                                $dekanfak= $_POST['dekanfak'];
                                $idfak= $_POST['idfak'];
                            
                                $sql = $con->query("insert into fakultas (namafak,dekanfak) values('$namafak','$dekanfak')");
                                
                                if ($sql) {
                                    ?>
                                    
                                        <script type="text/javascript">
                                        alert("Data Berhasil Disimpan");
                                        window.location.href="fakultas.php";
                                        </script>
                                        
                                        <?php
                                }else{
                                    echo"gagal boss";
                                }
                            }

//update FAkultas
if(isset($_POST['editpelanggan'])){
    $idfak= $_POST['idfak'];
    $namafak= $_POST['namafak'];
    $dekanfak= $_POST['dekanfak'];
    

    $query = $con->query("UPDATE fakultas set namafak='$namafak', dekanfak='$dekanfak' where idfak='$idfak'");
    if($query){
        echo '
        <script>alert("Update Fakultas Berhasil ");
        window.location.href="fakultas.php"

        </script>
        ';
    } else {
        echo '
        <script>alert("Update Fakultas Gagal ");
        window.location.href="fakultas.php"

        </script>
        ';
    }
    } 



//hapus Fakultas
if(isset($_POST['hapuspelanggan'])){
$idfak = $_POST['idfak'];

$hapus =$con->query("DELETE from fakultas where idfak='$idfak'");

if($hapus){
echo '
<script>alert("Hapus Fakultas Berhasil ");
window.location.href="fakultas.php"

</script>
';
} else {
echo '
<script>alert("Hapus Fakultas Gagal ");
window.location.href="fakultas.php"

</script>
';
}

}
                            ?>