<?php

$con = mysqli_connect('localhost', 'root', '', 'suratuniv');



if (isset($_GET['idsuratt'])) {
      $idsuratt    = $_GET['idsuratt'];
      $query = mysqli_query($con, "SELECT * FROM surattugas k, dosen s where s.nip =k.iddosen and idsuratt=" . $idsuratt);
      $no = 1;
      $result    = mysqli_fetch_array($query); {
      }

?>

      <html>

      <head>
            <title>Surat Tugas</title>
      </head>

      <body>
            <table align="center" border="0" cellpadding="1" style="width: 550px;">
                  <tbody>
                        <tr>

                              <td colspan="3">

                                    <img src="img/usnlogo.png" alt="" style="width: 10%; float: left; ">
                                    <div align="center">
                                          <span style="font-family: Verdana; font-size: 14pt;">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</span><br>

                                          <span style="font-family: Verdana; font-size: 14pt;">UNIVERSITAS SEMBILANBELAS NOVEMBER KOLAKA</span><br>

                                          <span style="font-family: Verdana; font-size: 14pt;"><b>FAKULTAS TEKNOLOGI INFORMASI</b></span> <br>
                                          <span style="font-family: Verdana; font-size: 12pt;">JalanPemuda No. 339 Telp. (0405) 2321132, Fax. (0405) 23240228 Kolaka 93517</span><br>
                                          <span style="font-family: Verdana; font-size: 12pt;">Email : <a href="">rektorat@usn.sc.id</a>, laman : http//usn.ac.id</span>

                                          <hr /><br><br>
                                          <span style="font-family: Verdana; font-size: 12pt;"><b>SURAT TUGAS
                                                      <hr style="width: 100px;">
                                                </b></span>
                                          <span style="font-family: Verdana; font-size: 12pt;">Nomor : <?= $result['nomor'] ?> </span>
                                    </div>
                              </td>

                        </tr>
                        <tr class="text-center">
                              <td colspan="2">
                                    <table border="0" cellpadding="1" style="width: 400px;">
                                          <tbody>
                                                <tr>


                                                </tr>
                                          </tbody>
                                    </table>
                              </td>
                        </tr>
                        <tr>
                              <td width="302"></td>
                              <td width="343"></td>
                              <td width="339"></td>
                        </tr>
                        <tr>
                              <td>
                                    <table border="0" style="width: 239px;">
                                          <tbody>
                                                <tr>
                                                </tr>
                                          </tbody>
                                    </table>
                              </td>
                              <td></td>
                              <td></td>
                        </tr>
                        <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                        </tr>
                        <tr>
                              <td colspan="3" height="270" valign="top">
                                    <div align="justify">
                                          <span style="font-size: 12pt;">Dekan fakultas Teknologi Informasi Universitas Sembilanbelas November Kolaka Menugaskan Kepada:</span>
                                          <br>
                                          <table border="0" style="width: 100%;">
                                                <tbody>
                                                      <tr>
                                                            <td width="80"><span style="font-size: 12pt;">Nama </span></td>
                                                            <td width="10"><span style="font-size: 12pt;">:</span></td>
                                                            <td width="248"><span style="font-size: 12pt;"><?= $result['nama'] ?> </span></td>
                                                      </tr>
                                                      <tr>
                                                            <td><span style="font-size: 12pt;">NIDN</span></td>
                                                            <td><span style="font-size: 12pt;">:</span></td>
                                                            <td><span style="font-size: 12pt;"><?= $result['nip'] ?> </span></td>
                                                      </tr>
                                                      <tr>
                                                            <td><span style="font-size: 12pt;">Jabatan</span></td>
                                                            <td><span style="font-size: 12pt;">:</span></td>
                                                            <td><span style="font-size: 12pt;"><?= $result['jabatan'] ?> </span></td>
                                                      </tr>
                                                      <tr>
                                                            <td><span style="font-size: 12pt;">Kepentingan</span></td>
                                                            <td><span style="font-size: 12pt;">:</span></td>
                                                            <td><span style="font-size: 12pt;"><?= $result['isi'] ?> </span></td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                          <div align="justify">
                                                <span style="font-size: 12pt;">
                                                      <br>
                                                      Demikian surat tugas ini dibuat untuk dilaksanakan dengan penuh tanggaung jawab.</span>
                                          </div>
                                    </div>

                                    <div align="center">

                              </td>
                        </tr>
                        <tr>


                              <td></td>
                              <td valign="top">
                                    <div align="center">
                                          <span style="font-size: 12pt;">Kaloka, <?= $result['tanggal'] ?> </span>
                                    </div>
                                    <div align="center">
                                          <span style="font-size: 12pt;">Dekan, </span>
                                    </div>

                                    <div align="center">

                                    </div><br><br><br>
                                    <div align="center">
                                          <span style="font-size: 12pt;">Noorhasanah., Z, S.Si.,M.Eng</span>
                                    </div>
                                    <div align="center">
                                          <span style="font-size: 12pt;">NIPPPK 197806252021212007</span>
                                    </div>
                              </td>
                        </tr>
                        <tr>
                              <td>

                                    <span style="font-size: x-12pt;">Tembusan :</span></div>
                                    <div align="center">

                                    </div>

                                    <span style="font-size: x-12pt;">1. Wakil Rektor Bidang Akademik </span></div><br>
                                    <span style="font-size: x-12pt;">2. Wakil Rektor Bidang Umum dan Kepegawaian </span></div><br>
                                    <span style="font-size: x-12pt;">3. Subkoordinatoe Kepegawaian </span></div><br>
                                    <span style="font-size: x-12pt;">4. Arsip </span></div>

                              </td>
                        </tr>
                  </tbody>
            </table>
      </body>

      </html>
      <script>
            window.print();
      </script>
<?php
}

?>