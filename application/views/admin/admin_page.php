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
  <a href="<?php echo base_url(); ?>index.php/Welcome/beranda">Beranda</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Petugas</a>
  <ul class="main-navigation">
  <li><a href="#">Kelas &darr;</a>
    <ul>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewrpl">RPL &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewrpl">AP &#8702;</a>
        <ul>
          <li><a href="#">XII</a></li>
          <li><a href="#">XI</a></li>
          <li><a href="#">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewrpl">TKJ &#8702;</a>
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


<div class="cape0">
  <h2>Performa</h2>
<div class="cape">
  <div class="cape1">
    <div class="dot1">
    <h2 class="dot">25</h2>
    </div>
    <h3>Jumlah Siswa</h3>
  </div>
  <div class="cape2">
    <div class="dot1">
    <h2 class="dot">25</h2>
    </div>
    <h3>Jumlah Petugas</h3>
  </div>
  <div class="cape3">
    <div class="dot1">
    <h2 class="dot">25</h2>
    </div>
    <h3>Jumlah Kelas</h3>
  </div>
</div>
</div>

<div class="alv">
    <div class="dot2">
    <h2 class="dot3" style="font-size: 150">124</h2>
    </div>
  <h1 style="font-size: 50px">Total Tagihan<br>2020/2021</h1>
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