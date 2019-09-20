<?php
	include "../config/koneksi.php";
 
	$user_id = $_GET["user_id"];
 
	// query sql
	$sql = "DELETE FROM user WHERE user_id='$user_id'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_user.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>