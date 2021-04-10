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
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewrpl">RPL &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii1">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi1">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX1">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewap">AP &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii2">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi2">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX2">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewtkj">TKJ &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii3">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi3">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX3">X</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewspp">Cek SPP</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpembayaran">Pembayaran</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewhistory">History</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Laporan</a>
</div>

<div class="pala">
<span style="font-size:50px;cursor:pointer;top : -10px; position: absolute; left: 20px" onclick="openNav()">&#9776;</span>
</div>


<div class="jambut">
  <h1 style="padding-left: 350px">History Pembayaran Spp SMK BPI</h1>
<table style="width:100%" class="jambut">
      <tr>
        <th>No. </th>
        <th>Tanggal </th>
        <th>Nama </th>
        <th>Nisn </th>
        <th>Nis </th>
        <th>Jumlah </th>
        <th>Petugas </th>
     </tr>
     <tr>
        <td>1</td>
        <td>29-04-2021</td>
        <td>Asep Kurniawan</td>
        <td>05541578445</td>
        <td>2208435498</td>
        <td>500000</td>
        <td>Dadang Subur</td>
     </tr>
     <tr>
        <td>2</td>
        <td>22-04-2021</td>
        <td>Neneng meleg</td>
        <td>0845121545</td>
        <td>226574545</td>
        <td>1000000</td>
        <td>Welly Summon</td>
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