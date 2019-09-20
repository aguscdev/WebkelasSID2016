<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$dosen_id = $_GET['dosen_id'];


// menginput data ke database
$sql = "DELETE FROM dosen WHERE dosen_id = $dosen_id";

if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_dosen.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_dosen.php';
		</script>";
}

mysqli_close($koneksi);

?>