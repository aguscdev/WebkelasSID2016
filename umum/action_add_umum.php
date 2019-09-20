<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

//generated mahasiswa id
$sqlID = "SELECT umum_id FROM umum ORDER BY umum_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['umum_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO umum values('$myID','$judul','$deskripsi','$gambar_file')";

move_uploaded_file($_FILES["foto"]["tmp_name"],$gambar_file);
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_umum.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_umum.php';
		</script>";
}

mysqli_close($koneksi);
?>