<?php 
	require 'functions.php';
	$keyword = $_GET['keyword'];
		$query_cari = "SELECT * FROM smartphone WHERE 
		merk_hp LIKE '%$keyword%' OR
		tipe_hp LIKE '%$keyword%'
		";
		$smartphone = query($query_cari);

 ?>
 <table border="1" cellspacing="0" cellpadding="10" class="responsive-table">
		<tr>
			<th>No.</th>
			<th>Gambar</th>
			<th>Merk HP</th>
			<th>Tipe HP</th>
			<th>Buatan</th>
			<th>RAM</th>
			
			
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
			

		</tr>
	<?php endforeach; ?>
	</table>