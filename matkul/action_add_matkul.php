<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$matkul = $_POST['matkul'];

//generated mahasiswa id
$sqlID = "SELECT matkul_id FROM matkul ORDER BY matkul_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['matkul_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO matkul values('$myID','$matkul')";

// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_matkul.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_matkul.php';
		</script>";
}

mysqli_close($koneksi);
?>