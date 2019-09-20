<?php
include "../config/koneksi.php";

// menangkap data yang di kirim dari form
$kategori_id = $_POST['kategori_id'];
$kategori = $_POST["kategori"];

// menginput data ke database
$sql = "UPDATE kategori SET kategori='$kategori' WHERE kategori_id = $kategori_id";
// var_dump($sql);
// die;				
$query = mysqli_query($koneksi, $sql);

if($query){
	echo "<script>
			alert('data berhasil di rubah');
			document.location.href = 'v_kategori.php';
	</script>";
} else {
	echo "<script>
			alert('data berhasil rubah');
			document.location.href = 'v_kategori.php';
	</script>";
}

mysqli_close($koneksi);
 
?>