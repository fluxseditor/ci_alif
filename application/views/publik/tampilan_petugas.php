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
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpembayaran">Pembayaran</a>
</div>

<div class="pala">
<span style="font-size:50px;cursor:pointer;top : -10px; position: absolute; left: 20px" onclick="openNav()">&#9776;</span>
</div>


<div class="kuku">
	<div class="kuku1">
		<b><p style="font-size: 25px; padding-left: 20px; padding-top: 5px">Cek Data Siswa</p></b>
	</div>
	<div class="kuku2">
		<b><p style="font-size: 20px">Tahun Ajaran :</b>
		<select id="ajaran" style="margin-left: 25px; margin-right: 250px">
			<option value="2023-2024">2023-2024</option>
			<option value="2022-2023">2022-2023</option>
			<option value="2021-2022">2021-2022</option>
  		<option value="2020-2021">2020-2021</option>
  		<option value="2019-2020">2019-2020</option>
  		<option value="2018-2019">2018-2019</option>
  		<option value="2017-2018">2017-2018</option>
  		<option value="2016-2017">2016-2017</option>
  		<option value="2015-2016">2015-2016</option>
  		<option value="2014-2015">2014-2015</option>
		</select>
		<b>Nisn : </b>
		<input type="text" name="nisn" style="height:32px; margin-left: 25px"></p>
	</div>
</div>

<div class="kiri">
	<div class="kiri1">
		<b><p style="font-size: 20px ;padding-top: 5px">Informasi Siswa</b></p>
	</div>

	<table style="text-align: left;font-size: 20px">
      <tr>
        <th>Nama Siswa</th>
        <th>: </th>
        <th>Alif Haryanto Sutendar</th>
     </tr>
      <tr>
        <th>Kelas Siswa</th>
        <th>: </th>
        <th>XII-RPL</th>
     </tr>
      <tr>
        <th>Nisn </th>
        <th>: </th>
        <th>8654256455</th>
     </tr>
      <tr>
        <th>Tahun Ajaran </th>
        <th>: </th>
        <th>2020-2021</th>
     </tr>
   </table>

</div>

<form method="post" action="<?php echo base_url(); ?>index.php/Welcome/bayar">
<div class="kanan">
	<div class="kanan1">
		<b><p style="font-size: 20px ;padding-top: 5px">Tagihan Spp</b></p>
	</div>

    <table style="width:100%" class="super">
      <tr>
        <th>No. </th>
        <th>Bulan </th>
        <th>Tahun</th>
        <th>Tagihan</th>
        <th>Status</th>
     </tr>
     <tr>
        <td>1</td>
        <td>Agustus</td>
        <td>2020</td>
        <td>500000</td>
        <td>Belum lunas</td>
     </tr>
     <tr>
        <td>2</td>
        <td>Juli</td>
        <td>2020</td>
        <td>500000</td>
        <td>lunas</td>
     </tr>
     <tr>
        <td>3</td>
        <td>Juni</td>
        <td>2020</td>
        <td>500000</td>
        <td>lunas</td>
     </tr>
     <tr>
        <td>4</td>
        <td>Mei</td>
        <td>2020</td>
        <td>500000</td>
        <td>lunas</td>
     </tr>
     <tr>
        <td>5</td>
        <td>April</td>
        <td>2020</td>
        <td>500000</td>
        <td>lunas</td>
     </tr>
     <tr>
        <td>6</td>
        <td>Maret</td>
        <td>2020</td>
        <td>500000</td>
        <td>lunas</td>
     </tr>
   </table>


   <div class="kanan2">
   		<button class="btn-primary" name="proses">BAYAR</button>
   </div>
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