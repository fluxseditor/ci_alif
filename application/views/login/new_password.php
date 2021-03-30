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
	<div class="mamah">
<form action="/action_page.php" class="form-container">
    <h1>Create New Password</h1>

    <label for="Newpas1"><b>New Password</b></label>
    <input type="text" name="Newpass1" required>
    <label for="Newpass2"><b>Confirm New Password</b></label>
    <input type="text" name="Newpass2" required>

    <button type="submit" class="btn">Submit</button>
  </form>
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