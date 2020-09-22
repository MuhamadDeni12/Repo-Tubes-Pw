<?php 

	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: ../index.php");
		exit;
	}


	require 'functions.php';
	$smartphone = query("SELECT * FROM smartphone");

	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$query_cari = "SELECT * FROM smartphone WHERE 
		merk_hp LIKE '%$keyword%' OR
		tipe_hp LIKE '%$keyword%'
		";
		$smartphone = query($query_cari);

	}

 ?>
 `
<!DOCTYPE html>
<html>
<head>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

	<title> DenZ Celullar </title>
</head>
<style>
	body {
		background-image: url(../img/12.jpg);
		background-size: cover;
		color :white;
	}
	nav {
		margin: 0px;
		top: -5px;
	}
</style>
<body>

	<div class="navbar-fixed">
	 <nav>
    <div class="nav-wrapper green">
      <a href="#" class="brand-logo center">DenZ Cell</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
    	<li>
    		<form action="" method="get"> 
    			<input type="text" name="keyword" id="keyword">
    		
    	<!-- </li>
	<li>
		<button type="sumbit" name="cari"><i class="material-icons">youtube_searched_for</i></button> -->
		</form>
	</li>
        <li><a href="tambah.php"><i class="material-icons">add</i></a></li>
   		<li><a href="logout.php">Log-Out</a></li>
      </ul>
    </div>
  </nav>
  </div>

	


	
	


</div>
</div>

	<div class="container">
		<h3>Daftar Smartphone</h3>
	<div id="container">
	<table border="1" cellspacing="0" cellpadding="10" class="responsive-table">
		<tr>
			<th>No.</th>
			<th>Gambar</th>
			<th>Merk HP</th>
			<th>Tipe HP</th>
			<th>Buatan</th>
			<th>RAM</th>
			<th>Aksi</th>
			
		</tr>


		<?php if(empty($smartphone)) : ?>
		<tr>
			<td colspan="6">Data Tidak Ada</td>
		</tr>

		<?php endif; ?>


		<?php $i = 1 ?>
		<?php foreach($smartphone as $sp) : ?>
		<tr>
			<td><?= $i++; ?></td>
			<td><img src="../img/<?= $sp['gambar']; ?>" width='100' height='100'></td>
			<td><?= $sp['merk_hp']; ?></td>
			<td><?= $sp['tipe_hp']; ?></td>
			<td><?= $sp['buatan']; ?></td>
			<td><?= $sp['ram']; ?></td>
			<td>
				<a href="ubah.php?id_hp=<?= $sp['id_hp']; ?>">Ubah</a> | 
				<a href="hapus.php?id_hp=<?= $sp['id_hp']; ?>" onclick="return confirm('Anda Yakin ingin menghapus <?= $mhs['nama'] ?> ?');">Hapus</a>
			</td>

		</tr>
	<?php endforeach; ?>
	</table>
	</div>
	</div>

  <footer class="page-footer green">
          
           
            
         
            
          
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            
            </div>
          </div>

        </footer>
          <script type="text/javascript" src="../js/script.js"></script>  

</body>
</html>