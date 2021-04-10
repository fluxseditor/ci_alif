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
  <a href="<?php echo base_url(); ?>index.php/Welcome/index">Beranda</a>
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
  <h1 style="padding-left: 470px">Data Petugas SMK BPI</h1>
  <button id="myBtn" class="btn-primary" style="float:right; right:60px; position: absolute">Tambah Petugas</button>
<table style="width:100%" class="jambut">
      <tr>
        <th>No. </th>
        <th>Nama Petugas </th>
        <th>Email </th>
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
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->password; ?></td>
              <td><?php echo $row->level; ?></td>
              <td>
              <?php echo anchor('Welcome/edit_petugas/'.$row->id,'Edit'); ?> |
              <?php echo anchor('Welcome/hapus_petugas/'.$row->id,'Delete'); ?> 
              </td>
            </tr>
            <?php
          }
          ?>
   </table>
 </div>

 
 
 
 <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="width:42%">
      <span class="close" style="color:black ;padding-left: 15px">&times;</span>
    <div class="modal-body">
      <div class="modal-header">
      <h3>Tambah Petugas</h3> 
      </div><br>
      
      <form method="post" action="<?php echo base_url(); ?>index.php/Welcome/tambah_petugas">
        Nama Petugas:<br>
        <input type="text" name="nama_petugas" required style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Email :<br>
        <input type="text" name="email" required style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Password :<br>
        <input type="password" name="password" required style="border-radius : 5px 5px 5px 5px ; width: 530px"><br><br>
        Level :<br>
		<select id="car" name="level" style="border-radius : 5px 5px 5px 5px ; width: 530px">
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select><br><br>
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
