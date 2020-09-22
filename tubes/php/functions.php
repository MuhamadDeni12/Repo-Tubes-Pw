<?php 
$conn = mysqli_connect('localhost','root','','tubes_pw_183040119');


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
	$rows[] = $row;

		}
		return $rows;
	}

	function tambah($data){
		global $conn;

		$merk_hp = htmlspecialchars($data['merk_hp']);
		$tipe_hp = htmlspecialchars($data['tipe_hp']);
		$buatan = htmlspecialchars($data['buatan']);
		$ram =htmlspecialchars ($data['ram']);

		$query = "INSERT INTO smartphone
					VALUES
					('','$merk_hp','$tipe_hp','$buatan','$ram')";
		


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM  smartphone WHERE id_hp = $id_hp");

		return mysqli_affected_rows($conn);
	}

function ubah($data){
		global $conn;
		$id_hp = $data['id_hp'];
		$merk_hp = htmlspecialchars($data['merk_hp']);
		$tipe_hp = htmlspecialchars($data['tipe_hp']);
		$buatan = htmlspecialchars($data['buatan']);
		$ram =htmlspecialchars ($data['ram']);

		$query = "UPDATE smartphone SET 
					merk_hp = '$merk_hp',
					tipe_hp = '$tipe_hp',
					buatan = '$buatan',
					ram = '$ram'
				WHERE id_hp = $id_hp";
		


		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}


function registrasi($data){
		global $conn;
		$username = $data['username'];
		$password1 = $data['password1'];
		$password2 =$data['password2'];
		
		//cek user 
		$cek_user = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		if (mysqli_num_rows($cek_user) > 0 ) {
				echo "<script>
				alert('Username sudah terdaftar');
				document.location.href = registrasi.php;
				</script>";

				return false;
			}	
			// password1 tidak sama dengan passsword 2
			if ($password1 != $password2) {
				echo "<script>
				alert('Password tidak sesuai');
				document.location.href = registrasi.php;
				</script>";

				return false;
			}
			// user name dan password sudah ok 
			$password = password_hash($password1, PASSWORD_DEFAULT);

			$query = "INSERT INTO user VALUES
			('', '$username', '$password')";
			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);

	}

 ?>