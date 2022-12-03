<?php
$con = mysqli_connect('localhost','root','','suratuniv');

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
                        <h1 class="mt-4">Data Surat Penelitian </h1>
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
                            Tambah Surat Penelitian
                          </button>

                        


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Daftar Surat Penelitian
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Nomor Surat</th>
                                                <th>Pembimbing 1</th>
                                                <th>Pembimbing 2</th>
                                                <th>Judul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $get = mysqli_query($con, "SELECT* FROM suratpen  k, mhs s where s.nim =k.nim");
                                            $i =1;

                                            while($p=mysqli_fetch_array($get)){

                                            ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td><?=$p['nim']?></td>
                                                <td><?=$p['nama']?></td>
                                                <td><?=$p['nomorsurat']?></td>
                                                <td><?=$p['pembimbing1']?></td>
                                                <td><?=$p['pembimbing2']?></td>
                                                <td><?=$p['judul']?></td>
                                                <td>
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?=$p['idpen'];?>">
                                                            Edit
                                                     </button>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$p['idpen'];?>">
                                                            Delete
                                                        </button>
                                                        <a href="printsuratpen.php?idpen=<?=$p['idpen']?>" class="btn btn-info" >Cetak Surat</a>
                                                </td>
                                            </tr>
                                            
       <!-- edit Modal -->
       <div class="modal fade" id="edit<?=$p['idpen'];?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Edit Surat Penelitian</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>                                         

                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            <label for="">Judul</label>
                                          <input type="text" name="judul" class="form-control" placeholder="" value="<?=$p['judul'];?>">
                                          
                                          <label for="">Pembimbing 1 </label>
        <select name="pembimbing1" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from dosen");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $nama = $fetcharray['nama'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$nama;?>"><?=$nama;?> </option>
                    <?php

                  }

                   ?>
               </select>
        <label for="">Pembimbing 2 </label>
        <select name="pembimbing2" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from dosen");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $nama = $fetcharray['nama'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$nama;?>"><?=$nama;?> </option>
                    <?php

                  }

                   ?>
               </select>
                                          <br>
                                            <input type="hidden" name="idpen"  value="<?=$p['idpen'];?>">
                                            <button type="submit" class="btn btn-primary" name="editpelanggan">Update </button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </form>
                                            </div>                 
                                        </div>
                                    </div>
                                    </div>
                            <!-- Hapus Modal -->
                                         <div class="modal fade" id="delete<?=$p['idpen'];?>" >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">Hapus Surat Penelitian <?=$p['nama'];;?> </h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                            <!-- Modal body -->
                                            <form method="post">
                                            <div class="modal-body">
                                            Apakah anda Yakin ingin menghapus data ini <?=$p['nama'];;?> ??
                                            <input type="hidden" name="idpen"  value="<?=$p['idpen'];;?>">
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
    <?php 
	
    $no = mysqli_query($con, "select idpen from suratpen order by idpen desc");
    $id = mysqli_fetch_array($no);
    $kode = $id['idpen'];
    $urut = substr($kode, -3);
    $tambah = (int) $urut + 1;
        if(strlen($tambah) == 1){
            $format = "000".$tambah."/UN56.C06/PN.03.00/2022";
        } else if(strlen($tambah) == 2){
            $format = "00".$tambah."/UN56.C06/PN.03.00/2022";
        } else{
            $format = "0".$tambah."/UN56.C06/PN.03.00/2022";
        }
  
        $tanggal_keluar = date("Y-m-d");
  ?>
  
  
   <!-- The Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Surat Penelitain</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form method="post">
        
        <!-- Modal body -->
        <div class="modal-body">
        <label for="color">NIM Mahasiswa</label>
        <input type="text" onkeyup="isi_otomatis()" class="form-control"  name="nim" id="nim">
        <label for="">Nama MHS </label>
        <input type="text" id="nama" name="" class="form-control" id="nama" disabled>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nim = $("#nim").val();
                $.ajax({
                    url: 'ajix.php',
                    data:"nim="+nim ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama').val(obj.nama);
                    $('#jeniskelamin').val(obj.jeniskelamin);
                    $('#jurusan').val(obj.jurusan);
                    $('#notelp').val(obj.notelp);
                    $('#email').val(obj.email);
                    $('#alamat').val(obj.alamat);
                });
            }
        </script>



        <label for="">Pembimbing 1 </label>
        <select name="pembimbing1" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from dosen");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $nama = $fetcharray['nama'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$nama;?>"><?=$nama;?> </option>
                    <?php

                  }

                   ?>
               </select>
        <label for="">Pembimbing 2 </label>
        <select name="pembimbing2" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from dosen");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $nama = $fetcharray['nama'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$nama;?>"><?=$nama;?> </option>
                    <?php

                  }

                   ?>
               </select>
               <label for="">Prodi  </label>
        <select name="prodi" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from prodi");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $namaprodi = $fetcharray['namaprodi'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$namaprodi;?>"><?=$namaprodi;?> </option>
                    <?php

                  }

                   ?>
               </select>
               <label for="">Fakultas  </label>
        <select name="fakultas" class="form-control"> 
                   <?php
                   $ambilsemuadatanya =mysqli_query($con,"select * from fakultas");
                  while ($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                      $namafak = $fetcharray['namafak'];
                      $dekanfak = $fetcharray['dekanfak'];
                      $idfak = $fetcharray['idfak'];
                    ?>

                    <option value="<?=$namafak;?>"><?=$namafak;?> </option>
                    <?php

                  }

                   ?>
               </select>
               <label for="">Nomor surat </label>
        <input type="text" name="nomorsurat" class="form-control"value="<?php echo $format; ?>" readonly >

        <label for="">Perihal </label>
        <input type="text" name="perihal" class="form-control" placeholder=" Judul">
        
        <label for="">Judul Penelitian </label>
        <input type="text" name="judul" class="form-control" placeholder=" Judul">
        
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="tambahsurat" >Submit</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
        </div>
        </form>
        
      </div>
    </div>
  </div>

</html>
<?php
							
                            if (isset($_POST['tambahsurat'])) {
                              
                                $nim= $_POST['nim'];
                                $pembimbing1= $_POST['pembimbing1'];
                                $pembimbing2= $_POST['pembimbing2'];
                                $judul= $_POST['judul'];
                                $nomorsurat= $_POST['nomorsurat'];
                                $perihal= $_POST['perihal'];
                                $prodi= $_POST['prodi'];
                                $fakultas= $_POST['fakultas'];
                            
                                $sql = $con->query("insert into suratpen (nim, pembimbing1, pembimbing2, judul, nomorsurat, perihal, prodi, fakultas ) values
                                ('$nim','$pembimbing1','$pembimbing2', '$judul', '$nomorsurat','$perihal', '$prodi', '$fakultas')");
                                
                                if ($sql) {
                                    ?>
                                    
                                        <script type="text/javascript">
                                        alert("Data Berhasil Disimpan");
                                        window.location.href="penelitian.php";
                                        </script>
                                        
                                        <?php
                                }else{
                                    echo"gagal boss";
                                }
                            }

//update FAkultas
if(isset($_POST['editpelanggan'])){
    $idpen= $_POST['idpen'];
    $pembimbing1= $_POST['pembimbing1'];
    $pembimbing2= $_POST['pembimbing2'];
    $judul= $_POST['judul'];
 

    $query = $con->query("UPDATE suratpen set pembimbing1='$pembimbing1', pembimbing2='$pembimbing2', judul='$judul' where idpen='$idpen'");
    if($query){
        echo '
        <script>alert("Update penelitian Berhasil ");
        window.location.href="penelitian.php"

        </script>
        ';
    } else {
        echo '
        <script>alert("Update penelitian Gagal ");
        window.location.href="penelitian.php"

        </script>
        ';
    }
    } 



//hapus Fakultas
if(isset($_POST['hapuspelanggan'])){
$idpen = $_POST['idpen'];

$hapus =$con->query("DELETE from suratpen where idpen='$idpen'");

if($hapus){
echo '
<script>alert("Hapus Penelitian Berhasil ");
window.location.href="penelitian.php"

</script>
';
} else {
echo '
<script>alert("Hapus Penelitian Gagal ");
window.location.href="penelitian.php"

</script>
';
}

}
         
                            ?>