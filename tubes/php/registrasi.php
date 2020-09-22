<?php 
	require 'functions.php';
	if (isset($_POST['registrasi'])) {
		if (registrasi($_POST) > 0 ) {
			echo "<script>
					alert('Registrasi Berhasil');
					document.location.href = 'login.php';
					</script>";
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
	<title>Create New Account</title>
</head>
<body>
<h3>Create New Account</h3>
	<form action="" method="post">
		<div id="register-page" class="row">
	<div class="col s12 z-depth-6 card-panel">
		<form class="register-form">        
			<div class="row margin">
				<div class="input-field col s12">
					<i class="mdi-social-person-outline prefix"></i>
				<label >Username : </label><br>
				<input  type="text" name="username" required>
			
				</div>
			</div>
			<div class="row margin">
	<div class="input-field col s12">
		<i class="mdi-communication-password prefix"></i>
				<label>Password : </label><br>
				<input type="password" name="password1" required>

				</div>
			</div>
				<div class="row margin">
	<div class="input-field col s12">
		<i class="mdi-communication-password prefix"></i>
				<label>Confirm Password: </label><br>
				<input type="password" name="password2" required>
			</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
			<button type="submit" name="registrasi">Registrasi</button>
			</div>
			<div class="input-field col s12">
					<p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
				</div>
			</div>
		
	</form>


</body>
</html>