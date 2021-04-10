<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <div id="container"></div>
</div>


<script type="text/javascript">
 
$(function () {
  $('#container').highcharts({
    chart: {
      plotShadow: false
    },
    title: {
      text: 'Total Tagihan'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          format: '<b>{point.name}</b>: {point.percentage:.1f} %',
          style: {
            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
          }
        }
      }
    },
    series: [{
      type: 'pie',
      name: 'Spp Belum Terbayar',
      data: [
          <?php 
          // data yang diambil dari database
          if(count($graph)>0)
          {
             foreach ($graph as $data) {
             echo "['" .$data->kelas . "'," . $data->jumlah ."],\n";
             }
          }
          ?>
      ]
    }]
  });
});
 
</script>



<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});
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