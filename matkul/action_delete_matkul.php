<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$matkul_id = $_GET['matkul_id'];


// menginput data ke database
$sql = "DELETE FROM matkul WHERE matkul_id = $matkul_id";

if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_matkul.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_matkul.php';
		</script>";
}

mysqli_close($koneksi);

?>