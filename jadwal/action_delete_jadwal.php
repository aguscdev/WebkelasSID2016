<?php
	include "../config/koneksi.php";
 
	$jadwal_id = $_GET["jadwal_id"];
 
	// query sql
	$sql = "DELETE FROM jadwal WHERE jadwal_id='$jadwal_id'";
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_jadwal.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_jadwal.php';
		</script>";
	}
 
	mysqli_close($koneksi);
?>