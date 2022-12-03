
<?php

$con = mysqli_connect('localhost','root','','suratuniv');



   if(isset($_GET['idpen'])){
    $idpen    = $_GET['idpen'];
     $query = mysqli_query($con,"SELECT * FROM suratpen  k, mhs s where s.nim =k.nim and idpen=".$idpen);
         $no = 1;
        $result    =mysqli_fetch_array($query);
      {



    }
    
       ?>


<html>
<head>
<title>Surat Permohonan Penelitian</title>
</head>

<body>
<table align="center" border="0" cellpadding="1" style="width: 550px;"><tbody>
<tr>    
       <td colspan="3">
       <img  src="img/usnlogo.png" alt="" style="width: 10%; float: left;
 ">  
       <div align="center">

<span style="font-family: Verdana; font-size: x-small;">KEMENTRIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI</span><br><br>

<span style="font-family: Verdana; font-size: x-small;">UNIVERSITAS SEMBILANBELAS NOVEMBER KOLAKA</span><br><br>

<span style="font-family: Verdana; font-size: x-small;"><b>FAKULTAS TEKNOLOGI INFORMASI</b></span> <br>
<span style="font-family: Verdana; font-size: x-small;">JalanPemuda No. 339 Telp. (0405) 2321132, Fax. (0405) 23240228 Kolaka 93517</span><br>
<span style="font-family: Verdana; font-size: x-small;">Email : <a href="">rektorat@usn.sc.id</a>, laman : http//usn.ac.id</span>
<hr /><br><br>
</div>
</td>   </tr>
<tr>     <td colspan="2"><table border="0" cellpadding="1" style="width: 400px;"><tbody>

<tr>         <td width="93"><span style="font-size: x-small;">No</span></td>  
       <td width="8"><span style="font-size: x-small;">:</span></td>   
             <td width="200"><span style="font-size: x-small;"><?=$result['nomorsurat']?></span></td>       </tr>
             </tr>
<tr>         <td><span style="font-size: x-small;">Perihal</span></td>      
   <td><span style="font-size: x-small;">:</span></td>      
      <td><span style="font-size: x-small;"><?=$result['perihal']?></span></td>       </tr>
     
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
        <table border="0" style="width: 239px;"><tbody>
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
<tr>     <td colspan="3" height="270" valign="top"><div align="justify">
<pre><span style="font-size: x-small;">Dekan fakultas Teknologi Informasi Universitas Sembilanbelas November Kolaka Menugaskan Kepada :</span></pre>
<table border="0" style="width: 352px;"><tbody>
<tr>         
      <td width="80"><span style="font-size: x-small;">Nama </span></td>       
          <td width="10"><span style="font-size: x-small;">:</span></td>   
                  <td width="248"><span style="font-size: x-small;"><?=$result['nama']?></span></td>    
                     </tr>
<tr>          
     <td><span style="font-size: x-small;">NIM</span></td>        
        <td><span style="font-size: x-small;">:</span></td>          
         <td><span style="font-size: x-small;"><?=$result['nim']?></span></td>         
        </tr>
<tr>          
     <td><span style="font-size: x-small;">Program Studi</span></td>     
           <td><span style="font-size: x-small;">:</span></td>         
             <td><span style="font-size: x-small;"><?=$result['prodi']?> </span></td>        
             </tr>
             <tr>          
     <td><span style="font-size: x-small;">Fakultas</span></td>        
        <td><span style="font-size: x-small;">:</span></td>          
         <td><span style="font-size: x-small;"><?=$result['fakultas']?></span></td>         
        </tr>
        <tr>          
     <td><span style="font-size: x-small;">Judul</span></td>        
        <td><span style="font-size: x-small;">:</span></td>          
         <td><span style="font-size: x-small;"><?=$result['judul']?></span></td>         
        </tr>
        <tr>          
     <td><span style="font-size: x-small;">Pembimbing I</span></td>        
        <td><span style="font-size: x-small;">:</span></td>          
         <td><span style="font-size: x-small;"><?=$result['pembimbing1']?></span></td>         
        </tr>
        <tr>          
     <td><span style="font-size: x-small;">Pembimbing II</span></td>        
        <td><span style="font-size: x-small;">:</span></td>          
         <td><span style="font-size: x-small;"><?=$result['pembimbing2']?></span></td>         
        </tr>
</tbody>
</table><br>
<div align="justify">
<span style="font-size: x-small;">

Mahasiswa yang namanya tercantum di atas telah mengikuti Ujian Proposal dan dinyatakan LULUS. Oleh karena itu, bersama ini kami mengajukan permohonan agar mahasiswa yang tersebut namanya di atas dapat diberikan Rekomendasi Penelitian dari LPPMT sehingga dapat segera melaksanakan penelitian. <br>
Demikian permohonan ini dan atas kerjasamanya diucapkan terima kasih</span> </div>
</div>
<div align="center">

</td>   </tr>
<tr>    
     <td>
        <div align="center">
<span style="font-size: x-small;">Tembusan :</span></div>
<div align="center">

</div>

<span style="font-size: x-small;">1. Wakil Rektor Bidang Akademik  </span></div><br>
<span style="font-size: x-small;">2. Wakil Rektor Bidang Umum dan Kepegawaian  </span></div><br>
<span style="font-size: x-small;">3. Subkoordinatoe Kepegawaian   </span></div><br>
<span style="font-size: x-small;">4. Arsip   </span></div>

</td>     <td></td>     <td valign="top"><div align="center">
<span style="font-size: x-small;">Kaloka, <?=$result['tanggal']?> </span></div>
<div align="center">
<span style="font-size: x-small;">Dekan,  </span></div>

<div align="center">

</div><br><br><br>
<div align="center">
<span style="font-size: x-small;">Noorhasanah., Z, S.Si.,M.Eng</span></div>
<div align="center">
<span style="font-size: x-small;">NIPPPK 197806252021212007</span></div>
</td>   </tr>
</tbody></table></body>
</html>
<script>
    window.print();
  </script>
   <?php
    }
    
       ?>