<?php 
	session_start();

	if (isset($_SESSION['username'])) {
		header("Location: index.php");
		exit;
	}

	require 'functions.php';

	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];


		$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE
			username = '$username'");


		if (mysqli_num_rows($cek_user) == 1) {
			
			$user = mysqli_fetch_assoc($cek_user);
			if (password_verify($password, $user['password']) ) {
				//login berhasil, masuk ke index
				$_SESSION['username'] = $username;
				header('Location: index.php');
				exit;
			}else{
				$error ='password salah';
			}

		}else{
			//login gagal
			$error = 'username belum terdaftar';
		}
	}

 ?>




<!DOCTYPE html>
<html>
<head>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../css/mycss.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Log-In</title>
</head>
<style>
	body{
		background-image: url(../img/bg1.jpg);
		background-size: cover;
	}

	
</style>
<body>



	<?php if( isset($error)): ?>
		<p><?= $error; ?></p>
	<?php endif ; ?>

<div class="container" >
	
<div class="row">
    <div class="col s12 m7 offset-l2">
      <div class="card blue lighten-3">
        <div class="card-image">
          <img src="../img/welcome.jpg">
          <span class="card-title">LOGIN</span>
        </div>
        <div class="card-content">
     
        </div>
        <div class="card-action">
         <form action="" method="post">
	<ul>
		<li>
			<label>Username : </label><br>
			<input type="text" name="username" autocomplete="off">
		</li>
		<li>
			<label>Password : </label><br>
			<input type="password" name="password">
		</li>
		<li>
			<button type="submit" name="login">Log-In</button>
		</li>
	</ul>
</form>
<ul>
	<li><a href="registrasi.php">Create New Account</a></li>
	<li><a href="../index.php">Kembali</a></li>
</ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


</body>
</html>