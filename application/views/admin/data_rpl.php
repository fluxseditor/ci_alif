<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="layar">

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Petugas</a>
  <ul class="main-navigation">
  <li><a href="#">Kelas &darr;</a>
    <ul>
      <li><a href="#">RPL &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="#">AP &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="#">TKJ &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <a href="#">Cek Spp</a>
  <a href="#">Pembayaran</a>
  <a href="#">History</a>
  <a href="#">Laporan</a>
</div>

<div class="pala">
<span style="font-size:50px;cursor:pointer;top : -10px; position: absolute; left: 20px" onclick="openNav()">&#9776;</span>
</div>

<ul class="main-navigation">
  <li><a href="#">Kelas &darr;</a>
    <ul>
      <li><a href="#">RPL &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="#">AP &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="#">TKJ &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul >



<div class="jambut">
  <h1 style="padding-left: 170px">Data Siswa Rekayasa Perangkat Lunak (RPL) SMK BPI</h1>
<table style="width:100%" class="jambut">
      <tr>
        <th>No. </th>
        <th>Nama </th>
        <th>Nisn </th>
        <th>Nis </th>
        <th>Alamat </th>
        <th>Telp </th>
        <th>Edit </th>
     </tr>
     <tr>
        <td>1</td>
        <td>Alif Haryanto Sutendar</td>
        <td>082457587</td>
        <td>20520545</td>
        <td>Jl.Mekar Sari No.11, Mekarmulya, Panyileukan, Bandung</td>
        <td>089637135598</td>
        <td>Edit | Delete</td>
     </tr>
     <tr>
        <td>2</td>
        <td>Andrea Ruaa Brata</td>
        <td>088548784</td>
        <td>20024545</td>
        <td>Gbi blok c 7 ,bojongsoang, Kabupaten Bandung</td>
        <td>084122457451</td>
        <td>Edit | Delete</td>
     </tr>
   </table>
 </div>






<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>