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

<button class="open-button" onclick="openForm()">Login Disini</button>

<div class="form-popup" id="myForm">
 <form class="form-signin" action="<?php echo base_url().'index.php/login'?>" method="post">
    
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" class="btn">Login</button>
    <a href="#" style="text-decoration: none; margin-left: 48px">Lupa password? Klik disini</a>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>



<div class="typewriter">
    <div class="typewriter-text">Login Untuk Melihat Pembayaran SPP</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>