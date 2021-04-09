<html>
<head>
	<title>EDIT DATA PETUGAS</title>
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>/assets/css/custom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="layar">
<div class="kuntul">
	<center>
		<h1>Edit Data Petugas</h1>
	</center>
	<?php foreach($petugas as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/Welcome/update_petugas'; ?>" method="post">
        Nama Petugas :<br>
        <input type="hidden" name="id" value="<?php echo $u->id ?>">
        <input type="text" name="nama_petugas" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->nama_petugas ?>"><br><br>
        Email: <br>
        <input type="text" name="email" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->email ?>"><br><br>
        Password : <br>
        <input type="password" name="password" style="border-radius : 5px 5px 5px 5px ; width: 530px" value="<?php echo $u->password ?>"><br><br>
        Level :<br>
        <select id="car" name="level" style="border-radius : 5px 5px 5px 5px ; width: 530px">
          <option value="admin">Admin</option>
          <option value="petugas">Petugas</option>
        </select>
		    <br><br>
        <center><button type="submit" class="btn-primary" value="Simpan">Submit</button></center> 
        
      </form>
</div>
	<?php } ?>
</body>
</html>