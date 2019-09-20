<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kategori_id = $_POST['kategori_id'];
$hari = $_POST['hari'];
$matkul_id = $_POST['matkul_id'];
$ruang = $_POST['ruang'];
$jam = $_POST['jam'];
$dosen_id = $_POST['dosen_id'];

$sqlID = "SELECT jadwal_id FROM jadwal_malam ORDER BY jadwal_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['jadwal_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO jadwal_malam values('$myID','$kategori_id','$hari','$matkul_id','$ruang','$jam','$dosen_id')";
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_jadwal.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_jadwal.php';
		</script>";
}

mysqli_close($koneksi);
?>