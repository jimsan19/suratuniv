  <?php

    $con = mysqli_connect('localhost', 'root', '', 'suratuniv');



    if (isset($_GET['idcuti'])) {
        $idcuti    = $_GET['idcuti'];

        $query = mysqli_query($con, "SELECT * FROM  suratcuti INNER JOIN dosen ON suratcuti.nip = dosen.nip INNER JOIN fakultas ON suratcuti.idfak = fakultas.idfak  AND idcuti=" . $idcuti);
        $no = 1;
        $result    = mysqli_fetch_array($query);

        // $hasil =$result['tglmulai']-$result['tglselesai'];
        {
        }

    ?>



      <html>

      <head>
          <style>
              #tabel {
                  font-size: 15px;
                  border-collapse: collapse;
              }

              #tabel td {
                  padding-left: 5px;
                  border: 1px solid black;
              }
          </style>
      </head>

      <body style='font-family:tahoma; font-size:8pt;'>
          <center>

              <table align="center" border="0" cellpadding="1" style="width: 550px;">
                  <tbody>
                      <tr>
                          <td colspan="3">
                              <img src="img/usnlogo.png" alt="" style="width: 10%; float: left;
 ">
                              <div align="center">

                                  <span style="font-family: Verdana; font-size: 12;">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</span><br>

                                  <span style="font-family: Verdana; font-size: 12px;">UNIVERSITAS SEMBILANBELAS NOVEMBER KOLAKA</span><br>

                                  <span style="font-family: Verdana; font-size: 12px;"><b>FAKULTAS TEKNOLOGI INFORMASI</b></span> <br>
                                  <span style="font-family: Verdana; font-size: x-small;">JalanPemuda No. 339 Telp. (0405) 2321132, Fax. (0405) 23240228 Kolaka 93517</span><br>
                                  <span style="font-family: Verdana; font-size: x-small;">Email : <a href="">rektorat@usn.sc.id</a>, laman : http//usn.ac.id</span>
                                  <hr />
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <table border="0" cellpadding="1" style="width: 100%;">
                                  <tbody>

                                      <tr>
                                          <td><span style="font-size: x-small;">No</span></td>
                                          <td><span style="font-size: x-small;">:</span></td>
                                          <td></td>
                                          <td></td>
                                          <td><span style="font-size: x-small;"><?= $result['nocut'] ?></span></td>
                                      </tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                      </tr>

                      <tr>

                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td width="" class=""><span style="font-size: x-small;">Yth. Dekan <?= $result['namafak'] ?></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td width="200"><span style="font-size: x-small;">di</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td width="200"><span style="font-size: x-small;">Tempat</td>
                      </tr>

                  </tbody>
              </table>

              </td>
              </tr>

              <br><br>
              <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>
                  <h5 class="text-center">FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</h5>



                  <td width='40%' colspan='6'>I. DATA PEGAWAI</td>

                  <tr>
                      <td>Nama </td>
                      <td><?= $result['nama'] ?></td>
                      <td>NIP</td>
                      <td><?= $result['nip'] ?></td>



                  <tr>
                      <td>Jabatan</td>
                      <td><?= $result['jabatan'] ?></td>
                      <td>Masa Kerja</td>
                      <td>1bln</td>
                  </tr>
                  <tr>
                      <td>Unit Kerja</td>
                      <td colspan='6'><?= $result['namafak'] ?></td>

                  </tr>
                  <tr>
              </table>

              <br>
              <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                  <td width='40%' colspan='6'>II. JENIS CUTI YANG DIAMBIL**</td>

                  <tr>
                      <td>1. Cuti Tahunan </td>
                      <td>√</td>
                      <td>Cuti Besar</td>
                      <td></td>

                  <tr>
                      <td>2. Cuti Sakit</td>
                      <td></td>
                      <td>Cuti Melahirkan</td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>3. Cuti Karena Alasan Kepentingan</td>
                      <td></td>
                      <td>Cuti Diluar Tanggungan</td>
                      <td></td>

                  </tr>
                  <tr>
              </table>
              <br>
              <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                  <td width='40%' colspan='6'>III. ALASAN CUTI: <?= $result['alasancuti'] ?> </td>


                  <tr>
              </table>
              <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
                  <tr>

                  </tr>

                  <br>
                  <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>

                      <td width='40%' colspan='6'>IV. LAMANYA CUTI</td>

                      <tr align="center">
                          <td>Selama</td>
                          <td> <?php
                                $tglawal = date_create($result['tglmulai']);
                                $tglakhir = date_create($result['tglselesai']);
                                $jml = date_diff($tglawal, $tglakhir);
                                echo " " . $jml->m . " bulan " . $jml->d . " hari";
                                ?> </td>
                          <td>Mulai Tanggal</td>
                          <td><?=
                                $result['tglmulai'] ?>
                          </td>
                          <td>s/d</td>
                          <td><?= $result['tglselesai'] ?></td>
                      <tr>
                  </table>
                  <br>
                  <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                      <td width='40%' colspan='6'>V CATATAN CUTI***</td>
                      <td>2. Cuti Besar</td>
                      <tr>
                          <td>1. Cuti Tahunan </td>
                          <td colspan='4'>Sisa</td>
                          <td>Keterangan</td>
                          <td>3. Cuti Sakit</td>
                      <tr>
                          <td>Tahun</td>
                          <td colspan='4'></td>
                          <td></td>
                          <td>4. Cuti Melahirkan</td>

                      </tr>
                      <tr>
                          <td>N-2</td>
                          <td colspan='4'></td>
                          <td></td>
                          <td>5. Cuti Karena Alasan Kepentingan</td>


                      </tr>
                      <tr>
                          <td>N-1</td>
                          <td colspan='4'></td>
                          <td></td>
                          <td>6.Cuti Diluar Tanggungan</td>
                      </tr>
                      <tr>
                          <td>N</td>
                          <td colspan='4'></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                  </table>

                  <br>
                  <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                      <td width='40%' colspan='8'>VI. ALAMAT SELAMA MENJALANKAN CUTI</td>

                      <tr align="center">
                          <td colspan='6'><?= $result['alamatcuti'] ?> </td>
                          <td>TLP</td>
                          <td><?= $result['notlp'] ?></td>
                      </tr>
                      <tr>
                          <td colspan='6' height="80px"></td>
                          <td></td>
                          <td valign="top">
                              <div align="center">
                                  <span style="font-size: x-small;">Hormat Saya, </span>
                              </div><br><br><br>
                              <div align="center">
                                  <span style="font-size: x-small;"><?= $result['nama'] ?> </span><br>
                                  <span>NIDN. <?= $result['nip'] ?></span>
                              </div>
                          </td>
                      </tr>
                  </table>


                  <br>
                  <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                      <td width='40%' colspan='8'>VII. PERTIMBANGAN ATASAN LANGSUNG**</td>

                      <tr>
                          <td>DISETUJUI </td>
                          <td>PERUBAHAN**</td>
                          <td>DITANGGUHKAN</td>
                          <td>TIDAK DISETUJUI ****</td>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td valign="top">
                              <!-- <div align="center">
                                  <span style="font-size: x-small;">Hormat Saya, </span>
                              </div> -->
                              <br><br><br>
                              <div align="center">
                                  <span style="font-size: x-small;">Anjar Pradipta, S.kom., M.KOM </span>
                              </div>
                              <div align="center">
                                  <span style="font-size: x-small;">NIP 199407082022031012 </span>
                              </div>
                          </td>
                      </tr>
                  </table>


                  <br>
                  <table cellspacing='4' style='width:550px; font-size:8pt; font-family:calibri;  border-collapse: collapse;' border='1'>




                      <td width='40%' colspan='8'>VIII. KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI**</td>

                      <tr>
                          <td>DISETUJUI </td>
                          <td>PERUBAHAN**</td>
                          <td>DITANGGUHKAN</td>

                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td height="80px" valign="top">
                              <div align="center"><br><br><br><br>
                                  <span style="font-size: x-small;">Noorhasanah., Z, S.Si.,M.Eng</span>
                              </div>
                              <div align="center">
                                  <span style="font-size: x-small;">NIPPPK 197806252021212007</span>
                              </div>
                          </td>
                      </tr>
                  </table><br>
                  <table align="center" border="0" cellpadding="3" style="width: 550px;">
                      <tbody>
                          <tr>
                              <td>
                                  <span style="font-size: x-small;">Tembusan :</span></div>
                                  <div align="left">



                                      <span style="font-size: x-small;">1. Wakil Rektor Bidang Akademik </span><br>
                                      <span style="font-size: x-small;">2. Wakil Rektor Bidang Umum dan Kepegawaian </span><br>
                                      <span style="font-size: x-small;">3. Subkoordinatoe Kepegawaian </span><br>
                                      <span style="font-size: x-small;">4. Arsip </span>

                              </td>
                              </div>
                  </table>
          </center>

      </body>

      </html>
      <script>
          window.print();
      </script>
  <?php
    }

    ?>