<?php
	include "../config/koneksi.php";
 	
 	$jadwal_id = $_POST["jadwal_id"];
 	$kategori_id = $_POST["kategori_id"];
	$hari = $_POST["hari"];
	$matkul_id = $_POST["matkul_id"];
	$ruang = $_POST["ruang"];
	$jam = $_POST["jam"];
	$dosen_id = $_POST["dosen_id"];
 
	// query sql
	$sql = "UPDATE jadwal SET kategori_id='$kategori_id', hari='$hari',matkul_id='$matkul_id', ruang='$ruang',jam='$jam', dosen_id='$dosen_id' WHERE jadwal_id='$jadwal_id'";
	// var_dump($sql);
	// die;
						
	$query = mysqli_query($koneksi, $sql);
 
	if($query){
		echo "<script>
				alert('data berhasil di rubah');
				document.location.href = 'v_jadwal.php';
		</script>";
	} else {
		echo "<script>
				alert('data berhasil rubah');
				document.location.href = 'v_jadwal.php';
		</script>";
	}
 
	mysqli_close($koneksi);
 
?>