<?php 

	session_start();

	if (isset($_SESSION['username'])) {
		header("Location: php/index.php");
		exit;
	}


	require 'php/functions.php';
	$smartphone = query("SELECT * FROM smartphone");

	if (isset($_GET['cari'])) {
		$keyword = $_GET['keyword'];
		$query_cari = "SELECT * FROM smartphone WHERE 
		merk_hp LIKE '%$keyword%'";
		$smartphone = query($query_cari);

	}

 ?>

 <!DOCTYPE html>
<html>
<head>
	  <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

	<title> DenZ Celullar </title>
</head>
<style>
  body {
    background-image: url(img/12.jpg);
    background-size:cover;
    color: white;
  }
  .container {
    color: black;
  }
</style>
<body>

	<div class="navbar-fixed">
	 <nav>
    <div class="nav-wrapper green">
      <a href="#" class="brand-logo center">DenZ Cell</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="php/login.php">LOGIN</a></li>
    	<li>
    		<form action="" method="get"> 
    			<input type="text" name="keyword" id="keyword">
    		
    	</li>
	<li>
		<button type="sumbit" name="cari"><i class="material-icons" id="tombol">youtube_searched_for</i></button>
		</form>
	</li>
      </ul>
    </div>
  </nav>
  </div>

	


	
	


</div>
</div>

	<div class="container">
		<h3>Daftar Smartphone</h3>
		<?php $i = 1 ?>
		<?php $j =1 ?>
		<?php foreach($smartphone as $sp) : ?>
<div class="container">
	<div class="row">
    <div class="col s16 m6">
      <div class="card">
      	<h3>	<?= $i++; ?></h3>
        <div class="card-image">
         	<img src="img/<?= $sp['gambar']; ?>" width='100' height='100'>
        </div>
        <div class="card-content">
        	<h4><?= $sp['merk_hp']; ?></h4>
 			<h4><?= $sp['tipe_hp']; ?></h4>        
     </div>
      </div>
    </div>
  </div>
 </div>
	</div>
<?php endforeach; ?>
  <footer class="page-footer green">
          
           
            
         
            
          
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            
            </div>
          </div>

        </footer>
            
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>