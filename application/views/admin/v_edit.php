<html>
<head>
	<title>EDIT DATA</title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="layar">
<div class="kuntul">
	<center>
		<h1>Edit Data Siswa</h1>
	</center>
	<?php foreach($siswa as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/Welcome/update'; ?>" method="post">
        Nama :<br>
        <input type="hidden" name="id" value="<?php echo $u->id ?>">
        <input type="text" name="nama" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->nama ?>"><br><br>
        Kelas :<br>
        <select id="cars" name="kelas" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->kelas ?>">
          <option value="RPL">RPL</option>
          <option value="AP">AP</option>
          <option value="TKJ">TKJ</option>
        </select><br><br>
        Nisn :<br>
        <input type="text" name="nisn" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->nisn ?>"><br><br>
        Nis :<br>
        <input type="text" name="nis" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->nis ?>"><br><br>
        Alamat :<br>
        <textarea style="border-radius : 5px 5px 5px 5px ; width: 530px; height: 100px;" name="alamat" ><?php echo $u->alamat ?></textarea><br><br>
        No Telp :<br>
        <input type="text" name="telp" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->telp ?>"><br><br>
        <center><button type="submit" class="btn-primary" value="Simpan">Submit</button></center> 
        
      </form>
</div>
	<?php } ?>
</body>
</html>