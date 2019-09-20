<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kategori = $_POST['kategori'];

//generated mahasiswa id
$sqlID = "SELECT kategori_id FROM kategori ORDER BY kategori_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['kategori_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO kategori values('$myID','$kategori')";

// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_kategori.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_kategori.php';
		</script>";
}

mysqli_close($koneksi);
?>