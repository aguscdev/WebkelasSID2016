<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_dosen = $_POST['nama_dosen'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$matkul_id = $_POST['matkul_id'];
$isactive = 1;
$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

//generated mahasiswa id
$sqlID = "SELECT dosen_id FROM dosen ORDER BY dosen_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['dosen_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO dosen values('$myID','$nama_dosen','$no_telp','$email','$matkul_id','$gambar_file')";

move_uploaded_file($_FILES["foto"]["tmp_name"],$gambar_file);
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_dosen.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_dosen.php';
		</script>";
}

mysqli_close($koneksi);
?>