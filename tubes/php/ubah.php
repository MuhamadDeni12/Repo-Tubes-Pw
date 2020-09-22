
<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

require 'functions.php'; 


$id_hp = $_GET['id_hp'];
$sp = query("SELECT * FROM smartphone WHERE id_hp= $id_hp ")[0];



if( isset($_POST['ubah']) ){
	if (ubah($_POST) > 0) {
	echo "<script>
		 alert('data berhasil diubah !');
		 document.location.href = 'index.php';
		</script>";
	
	}
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form ubah Data Smartphone </title>
</head>
<body>
	<h3>Form Ubah Data Smartphone</h3>

	<form method="post" action="">
		<input type="hidden" name="id_hp" value="<?= $sp['id_hp']; ?>">
		<ul>
			<li>
				<label>Merk HP : </label><br>
				<input type="text" name="merk_hp" required maxlength="9" value="<?= $sp['merk_hp']; ?>">
			</li>
			<li>
				<label>Tipe HP : </label><br>
				<input type="text" name="tipe_hp" required value="<?= $sp['tipe_hp']; ?>">
			</li>
			<li>
				<label>Buatan : </label><br>
				<input type="text" name="buatan" required value="<?= $sp['buatan']; ?>">
			</li>
			<li>
				<label>RAM : </label><br>
				<input type="text" name="ram" required value="<?= $sp['ram']; ?>">
			</li>
			<li>
				<br>
				<button type="submit" name="ubah">Ubah</button>
			</li>
		</ul>

	</form>







	
</body>
</html>