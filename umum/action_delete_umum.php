<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$umum_id = $_GET['umum_id'];


// menginput data ke database
$sql = "DELETE FROM umum WHERE umum_id = $umum_id";

if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_umum.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_umum.php';
		</script>";
}

mysqli_close($koneksi);

?>