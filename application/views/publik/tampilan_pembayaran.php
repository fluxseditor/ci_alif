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
  <a href="#">Cek Data Spp</a>
</div>

<div class="pala">
<span style="font-size:50px;cursor:pointer;top : -10px; position: absolute; left: 20px" onclick="openNav()">&#9776;</span>
</div>


<div class="bayar">
<h2 style="text-align: center; color: gray">Pembayaran SPP</h2>
<br>
<table style="text-align: left;font-size: 20px">
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
     <tr>
        <th>Nominal </th>
        <th>: </th>
        <th>
      <select id="nominal" style="width:100%; border: none">
      <option value="500000">500.000 (1)</option>
      <option value="1000000">1.000.000 (2)</option>
      <option value="1500000">1.500.000 (3)</option>
      <option value="2000000">2.000.000 (4)</option>
      <option value="2500000">2.500.000 (5)</option>
      <option value="3000000">3.000.000 (6)</option>
      <option value="3500000">3.500.000 (7)</option></th>
     </tr>
   </table>
<br><br>
    <button type="submit" class="btn" style="background-color: #4CAF50; margin-left:110px">Submit</button>
    <button type="button" class="btn" style="background-color: red">Cancel</button>
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