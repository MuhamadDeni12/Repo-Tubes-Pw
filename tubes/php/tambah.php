
<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
		exit;
	}

require 'functions.php';
if( isset($_POST['tambah']) ){
	if (tambah($_POST) > 0) {
	echo "<script>
		 alert('data berhasil disimpan!');
		 document.location.href = 'index.php';
		</script>";
	
	}
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Data Hp </title>
</head>
<body>
	<h3>Form Tambah Data HP</h3>

	<form method="post" action="">
		<ul>
			<li>
				<label>Merk HP : </label><br>
				<input type="text" name="merk_hp" required maxlength="9">
			</li>
			<li>
				<label>Gambar : </label><br>
				<input type="text" name="gambar">
			</li>
			<li>
				<label>Tipe HP : </label><br>
				<input type="text" name="tipe_hp" required>
			</li>
			<li>
				<label> :Buatan </label><br>
				<input type="text" name="buatan" required>
			</li>
			<li>
				<label>RAM : </label><br>
				<input type="text" name="ram" required>
			</li>
			<li>
				<br>
				<button type="sumbit" name="tambah">Kirim NOW</button>
			</li>
		</ul>

	</form>







	
</body>
</html>