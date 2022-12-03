<?php

$con = mysqli_connect('localhost', 'root', '', 'suratuniv');



if (isset($_GET['idpen'])) {
   $idpen    = $_GET['idpen'];
   $query = mysqli_query($con, "SELECT * FROM suratpen  k, mhs s where s.nim =k.nim and idpen=" . $idpen);
   $no = 1;
   $result    = mysqli_fetch_array($query); {
   }

?>


   <html>

   <head>
      <title>Surat Permohonan Penelitian</title>
   </head>

   <body>
      <table align="center" border="0" cellpadding="1" style="width: 550px;">
         <tbody>
            <tr>

               <img src="img/usnlogo.png" alt="" style="width: 10%; float: left;">
               <td colspan="3">
                  <div align="center">

                     <span style="font-family: Verdana; font-size: 12pt;">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</span><br>

                     <span style="font-family: Verdana; font-size: 12pt;">UNIVERSITAS SEMBILANBELAS NOVEMBER KOLAKA</span><br>

                     <span style="font-family: Verdana; font-size: 12pt;"><b>FAKULTAS TEKNOLOGI INFORMASI</b></span> <br>
                     <span style="font-family: Verdana; font-size: small;">JalanPemuda No. 339 Telp. (0405) 2321132, Fax. (0405) 23240228 Kolaka 93517</span><br>
                     <span style="font-family: Verdana; font-size: small;">Email : <a href="">rektorat@usn.sc.id</a>, laman : http//usn.ac.id</span>
                     <hr /><br>
                  </div>
               </td>
            </tr>


            </tr>
         </tbody>
      </table>
      </td>
      </tr>
      <tr>
         <td><span style="font-size: small;">No</span></td>
         <td><span style="font-size: small;">:</span></td>
         <td><span style="font-size: small;"><?= $result['nomorsurat'] ?></span></td>
      </tr>
      <br>
      <tr>
         <td><span style="font-size: small;">Perihal</span></td>
         <td><span style="font-size: small;">:</span></td>
         <td><span style="font-size: small;"><?= $result['perihal'] ?></span></td>
      </tr>
      <br>
      <br>
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
         <td valign="top">
            <div align="justify">
               <span style="font-size: small;">Yang bertanda tangan dibawah ini Dekan fakultas Teknologi Informasi Universitas Sembilanbelas November Kolaka, menerangkan bahwa:</span>
               <table border="0" style="width: 550px;">

                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>


                     <td width="80"><span style="font-size: small;">Nama </span></td>
                     <td width="10"><span style="font-size: small;">:</span></td>
                     <td width="248"><span style="font-size: small;"><?= $result['nama'] ?></span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">NIM</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['nim'] ?></span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">Program Studi</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['prodi'] ?> </span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">Fakultas</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['fakultas'] ?></span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">Judul</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['judul'] ?></span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">Pembimbing I</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['pembimbing1'] ?></span></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><span style="font-size: small;">Pembimbing II</span></td>
                     <td><span style="font-size: small;">:</span></td>
                     <td><span style="font-size: small;"><?= $result['pembimbing2'] ?></span></td>
                  </tr>

               </table><br>
               <div align="justify">
                  <span style="font-size: small;">

                     Mahasiswa yang namanya tercantum di atas telah mengikuti Ujian Proposal dan dinyatakan LULUS. Oleh karena itu, bersama ini kami mengajukan permohonan agar mahasiswa yang tersebut namanya di atas dapat diberikan Rekomendasi Penelitian dari LPPMT sehingga dapat segera melaksanakan penelitian. <br>
                     Demikian permohonan ini dan atas kerjasamanya diucapkan terima kasih</span>
               </div>
            </div>
            <div align="center">

         </td>
      </tr>
      <table align="center" border="0" cellpadding="1" style="width: 550px;">
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
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

            <br>
            <br>

            <td valign="top">
               <div align="left">
                  <span style="font-size: small;">Kaloka, <?= $result['tanggal'] ?> </span>
               </div>
               <div align="">
                  <span style="font-size: small;">Dekan, </span>
               </div>

               <div align="center">

               </div><br><br><br>
               <div align="left">
                  <span style="font-size: small;">Noorhasanah., Z, S.Si.,M.Eng</span>
               </div>
               <div align="left">
                  <span style="font-size: small;">NIPPPK 197806252021212007</span>
               </div>
            </td>

         </tr>
      </table>
      <!-- <tr>
         <td>
            <div align="center">
               <span style="font-size: small;">Tembusan :</span>
            </div>
            <div align="center">

            </div>

            <span style="font-size: small;">1. Wakil Rektor Bidang Akademik </span></div><br>
            <span style="font-size: small;">2. Wakil Rektor Bidang Umum dan Kepegawaian </span></div><br>
            <span style="font-size: small;">3. Subkoordinatoe Kepegawaian </span></div><br>
            <span style="font-size: small;">4. Arsip </span></div>

         </td>
      </tr> -->
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