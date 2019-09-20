<?php

// koneksi database
session_start();
include '../config/koneksi.php';

$mahasiswa_id = $_GET['mahasiswa_id'];
$myDate = date("Y-m-d H:i:s");
$myUserID = $_SESSION["user_id"];


// menginput data ke database
$sql = "UPDATE mahasiswa SET is_active = 0,updated_at='$myDate',updated_by=$myUserID WHERE mahasiswa_id = $mahasiswa_id";
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_mahasiswa.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'v_mahasiswa.php';
		</script>";
}

mysqli_close($koneksi);

?>