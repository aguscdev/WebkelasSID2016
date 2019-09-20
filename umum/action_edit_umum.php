<?php
include "../config/koneksi.php";

// menangkap data yang di kirim dari form
$umum_id = $_POST['umum_id'];
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$foto = $_POST["foto"];
$gambar = "img/";
$gambar_file = $gambar . basename($foto);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));
move_uploaded_file($gambar_file);


// menginput data ke database
$sql = "UPDATE umum SET judul='$judul',deskripsi='$deskripsi', foto='$gambar_file' WHERE umum_id = $umum_id";
// var_dump($sql);
// die;				
$query = mysqli_query($koneksi, $sql);

if($query){
	echo "<script>
			alert('data berhasil di rubah');
			document.location.href = 'v_umum.php';
	</script>";
} else {
	echo "<script>
			alert('data berhasil rubah');
			document.location.href = 'v_umum.php';
	</script>";
}

mysqli_close($koneksi);
 
?>