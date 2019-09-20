<?php
	include "../config/koneksi.php";
 	
 	$nama = $_POST["nama"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$level = $_POST["level"];
 
	// query sql
	$sql = "INSERT INTO user VALUES('','$nama','$username','$email','$password','$level')";
	$query = mysqli_query($koneksi, $sql);
	// var_dump($sql);
	// die;
 
	if($query){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>