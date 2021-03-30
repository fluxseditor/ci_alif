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
	<div class="hlf">
    <h1 style="text-align: center ;font-size: 60px">Rincian SPP</h1>
    <table style="text-align: left;font-size: 30px">
      <tr>
        <th>Nama </th>
        <th>: </th>
        <th>Alif Haryanto Sutendar</th>
     </tr>
      <tr>
        <th>Kelas </th>
        <th>: </th>
        <th>XII-RPL</th>
     </tr>
      <tr>
        <th>Nisn </th>
        <th>: </th>
        <th>8654256455</th>
     </tr>
   </table>

<div class="neneng">
<h3>1 Tagihan Belum Selesai</h3>
</div>

<button class="tuyul" onclick="openForm()">Klik Disini Untuk Melihat History Pembayaran</button>

<div class="tuyul-popup" id="myForm">
  <div class="tuyul-container">
    <button type="button" class="tiyil" onclick="closeForm()">Klik Disini Untuk Menutup History Pembayaran</button>
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
   </table>
  </div>
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
  
</div>
</body>
</html>