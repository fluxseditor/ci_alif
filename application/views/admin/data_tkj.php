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
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi1"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX1"">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewap">AP &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii2"">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi2"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX2"">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewtkj">TKJ &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii3"">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi3"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX3"">X</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Cek SPP</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Pembayaran</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">History</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/viewpetugas">Laporan</a>
</div>

<div class="pala">
<span style="font-size:50px;cursor:pointer;top : -10px; position: absolute; left: 20px" onclick="openNav()">&#9776;</span>
</div>

<ul class="main-navigation">
   <li><a href="#">Kelas &darr;</a>
    <ul>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewrpl">RPL &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii1">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi1"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX1"">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewap">AP &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii2"">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi2"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX2"">X</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewtkj">TKJ &#8702;</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXii3"">XII</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewXi3"">XI</a></li>
          <li><a href="<?php echo base_url(); ?>index.php/Welcome/viewX3"">X</a></li>
        </ul>
      </li>
    </ul>
  </li>
</ul >



<div class="jambut">
  <h1 style="padding-left: 165px">Data Siswa Teknik Komputer dan Jaringan (RPL) SMK BPI</h1>
  <button id="myBtn" class="btn-primary" style="float:right; right:30px; position: absolute">Tambah Siswa</button>
<table style="width:100%" class="jambut">
      <tr>
        <th>No. </th>
        <th>Nama </th>
        <th>Email </th>
        <th>Nisn </th>
        <th>Nis </th>
        <th>Alamat </th>
        <th>Telp </th>
        <th>Edit </th>
     </tr>
     <?php 
          $no = 1;
          foreach($siswa as $row)
          {
            ?>
            <tr>
              <td widtd="5%"><?php echo $no++; ?></td>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->nisn; ?></td>
              <td><?php echo $row->nis; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->telp; ?></td>
              <td>
              <?php echo anchor('Welcome/edit/'.$row->id,'Edit'); ?> | 
              <?php echo anchor('Welcome/hapus2/'.$row->id,'Delete'); ?> 
              </td>
            </tr>
            <?php
          }
          ?>
   </table>
 </div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width:42%">
      <span class="close" style="color:black ;padding-left: 15px">&times;</span>
    <div class="modal-body">
      <div class="modal-header">
      <h3>Tambah Siswa</h3> 
      </div><br>
      
      <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/tambah_aksi2">
        Nama :<br>
        <input type="text" name="nama" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Email :<br>
        <input type="text" name="email" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Password :<br>
        <input type="password" name="password" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Kelas :<br>
		<select id="car" name="kelas" style="border-radius : 5px 5px 5px 5px ; width: 100px">
          <option value="XII">XII</option>
          <option value="XI">XI</option>
          <option value="X">X</option>
        </select>
        <select id="cars" name="jurusan" style="border-radius : 5px 5px 5px 5px ; width: 425px">
          <option value="RPL" disabled>RPL (Rekayasa Perangkat Lunak)</option>
          <option value="AP" disabled>AP (Administrasi Perkantoran)</option>
          <option value="TKJ">TKJ (Teknik Komputer dan Jaringan)</option>
        </select>
		<br><br>
        Nisn :<br>
        <input type="text" name="nisn" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Nis :<br>
        <input type="text" name="nis" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Alamat :<br>
        <textarea style="border-radius : 5px 5px 5px 5px ; width: 530px; height: 100px;" name="alamat"></textarea><br><br>
        No Telp :<br>
        <input type="text" name="telp" style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        <div class="modal-footer">
        <center><button type="submit" class="btn-primary" value="Tambah">Submit</button></center> 
        </div>
        
      </form>

    </div>
  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

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