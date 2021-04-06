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


<div class="jambut">
  <h1 style="padding-left: 470px">Data Petugas SMK BPI</h1>
<table style="width:100%" class="jambut">
      <tr>
        <th>No. </th>
        <th>Nama Petugas </th>
        <th>Username </th>
        <th>Password </th>
        <th>Level </th>
        <th>Edit </th>
     </tr>
     <?php 
          $no = 1;
          foreach($petugas as $row)
          {
            ?>
            <tr>
              <td widtd="5%"><?php echo $no++; ?></td>
              <td><?php echo $row->nama_petugas; ?></td>
              <td><?php echo $row->username; ?></td>
              <td><?php echo $row->password; ?></td>
              <td><?php echo $row->level; ?></td>
              <td>
              <?php echo anchor('Welcome/edit/'.$row->id,'Edit'); ?> |
              <?php echo anchor('Welcome/hapus_petugas/'.$row->id,'Delete'); ?> 
              </td>
            </tr>
            <?php
          }
          ?>
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
