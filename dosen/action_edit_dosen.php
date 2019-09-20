<?php
include "../config/koneksi.php";

// menangkap data yang di kirim dari form
$dosen_id = $_POST['dosen_id'];
$nama_dosen = $_POST["nama_dosen"];
$no_telp = $_POST["no_telp"];
$email = $_POST["email"];
$matkul_id = $_POST["matkul_id"];
$foto = $_POST["foto"];
$gambar = "img/";
$gambar_file = $gambar . basename($foto);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
move_uploaded_file($gambar_file);


// menginput data ke database
$sql = "UPDATE dosen SET nama_dosen='$nama_dosen',no_telp='$no_telp',email='$email',matkul_id='$matkul_id', foto='$gambar_file' WHERE dosen_id = $dosen_id";
// var_dump($sql);
// die;				
$query = mysqli_query($koneksi, $sql);

if($query){
	echo "<script>
			alert('data berhasil di rubah');
			document.location.href = 'v_dosen.php';
	</script>";
} else {
	echo "<script>
			alert('data berhasil rubah');
			document.location.href = 'v_dosen.php';
	</script>";
}

mysqli_close($koneksi);
 
?>