<?php
include "../config/koneksi.php";

// menangkap data yang di kirim dari form
$matkul_id = $_POST['matkul_id'];
$matkul = $_POST["matkul"];

// menginput data ke database
$sql = "UPDATE matkul SET matkul='$matkul' WHERE matkul_id = $matkul_id";
// var_dump($sql);
// die;				
$query = mysqli_query($koneksi, $sql);

if($query){
	echo "<script>
			alert('data berhasil di rubah');
			document.location.href = 'v_matkul.php';
	</script>";
} else {
	echo "<script>
			alert('data berhasil rubah');
			document.location.href = 'v_matkul.php';
	</script>";
}

mysqli_close($koneksi);
 
?>