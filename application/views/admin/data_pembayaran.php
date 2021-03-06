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
  <a href="<?php echo base_url(); ?>index.php/Welcome/index">Beranda</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Petugas</a>
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


<div class="bayar">
<h2 style="text-align: center; color: gray">Pembayaran SPP</h2>
<br>
<table style="text-align: left;font-size: 20px">
 <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/tambah_pembayaran">
      <tr>
        <th>Nama </th>
        <th>: </th>
        <th><input type="text" name="nama" required style="margin-left:20px; width:250px ; border-bottom: 3px solid #f1f1f1; border-top:none; border-left:none; border-right:none"></th>
     </tr>
      <tr>
        <th>Kelas </th>
        <th>: </th>
        <th> <select id="kelas" name="kelas" style="margin-left:20px; width:250px; border-bottom: 3px solid #f1f1f1; border-top:none; border-left:none; border-right:none">
			<option value="RPL">RPL</option>
			<option value="AP">AP</option>
			<option value="TKJ">TKJ</option>
		</th>
     </tr>
      <tr>
        <th>Nisn </th>
        <th>: </th>
        <th><input type="text" name="nisn" required style="margin-left:20px; width:250px ; border-bottom: 3px solid #f1f1f1; border-top:none; border-left:none; border-right:none"></th>
     </tr>
     <tr>
        <th>Nominal </th>
        <th>: </th>
        <th>
      <select id="nominal" name="nominal" style="margin-left:20px; width:250px; border-bottom: 3px solid #f1f1f1; border-top:none; border-left:none; border-right:none">
      <option value="500000">500.000 (1)</option>
      <option value="1000000">1.000.000 (2)</option>
      <option value="1500000">1.500.000 (3)</option>
      <option value="2000000">2.000.000 (4)</option>
      <option value="2500000">2.500.000 (5)</option>
      <option value="3000000">3.000.000 (6)</option>
      <option value="3500000">3.500.000 (7)</option>
	  </th>
	  </select>
     </tr>
   </table>
<br><br>
    <center><button type="submit" class="btn" style="background-color: #4CAF50">Submit</button></center>
</div>
</form>


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