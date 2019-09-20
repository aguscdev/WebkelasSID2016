<?php
	include "../config/koneksi.php";
 	
 	$nama = $_POST["nama"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$level = $_POST["level"];
	$user_id = $_POST["user_id"];
 
	// query sql
	$sql = "UPDATE user SET nama='$nama', username='$username',email='$email', password='$password' , level='$level' WHERE user_id='$user_id'";
						
	$query = mysqli_query($koneksi, $sql);
 	// var_dump($sql);
 	// die;
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>