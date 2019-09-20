<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$kategori_id = $_GET['kategori_id'];


// menginput data ke database
$sql = "DELETE FROM kategori WHERE kategori_id = $kategori_id";

if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_kategori.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_kategori.php';
		</script>";
}

mysqli_close($koneksi);

?>