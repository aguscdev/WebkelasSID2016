<?php
include "../config/koneksi.php";

// menangkap data yang di kirim dari form
$mahasiswa_id = $_POST['mahasiswa_id'];
$npm = $_POST["npm"];
$nama_mahasiswa = $_POST["nama_mahasiswa"];
$email = $_POST["email"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];
$foto = $_POST["foto"];
$gambar = "img/";
$gambar_file = $gambar . basename($foto);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
move_uploaded_file($gambar_file);

$myDate = date("Y-m-d H:i:s");
$myUserID = $_POST["mahasiswa_id"];

// menginput data ke database
$sql = "UPDATE mahasiswa SET npm='$npm',nama_mahasiswa='$nama_mahasiswa',email='$email',no_telp='$no_telp',alamat='$alamat', foto='$gambar_file',updated_at='$myDate',updated_by=$myUserID WHERE mahasiswa_id = $mahasiswa_id";
// var_dump($sql);
// die;				
$query = mysqli_query($koneksi, $sql);

if($query){
	echo "<script>
			alert('data berhasil di rubah');
			document.location.href = 'v_mahasiswa.php';
	</script>";
} else {
	echo "<script>
			alert('data berhasil rubah');
			document.location.href = 'v_mahasiswa.php';
	</script>";
}

mysqli_close($koneksi);
 
?>