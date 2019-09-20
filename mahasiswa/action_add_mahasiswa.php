<?php
// koneksi database
session_start();
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$npm = $_POST['npm'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$email = $_POST['email'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$myDate = date("Y-m-d H:i:s");
$myUserID = $_SESSION["user_id"];
$isactive = 1;
$gambar = "img/";
$gambar_file = $gambar . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file,PATHINFO_EXTENSION));

//generated mahasiswa id
$sqlID = "SELECT mahasiswa_id FROM mahasiswa ORDER BY mahasiswa_id DESC LIMIT 1";
$select = mysqli_query($koneksi, $sqlID);
$data = mysqli_fetch_assoc($select);
$myID = $data['mahasiswa_id'] + 1;
 
// menginput data ke database
$sql = "INSERT INTO mahasiswa values('$myID','$npm','$nama_mahasiswa','$email','$no_telp','$alamat','$gambar_file','$myDate','$myDate',$myUserID,'$myUserID','$isactive')";

move_uploaded_file($_FILES["foto"]["tmp_name"],$gambar_file);
// var_dump($sql);
// die;
if (mysqli_query($koneksi, $sql)){
		echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_mahasiswa.php';
		</script>";
}else{
	echo "<script>
				alert('data berhasil disimpan');
				document.location.href = 'v_mahasiswa.php';
		</script>";
}

mysqli_close($koneksi);
?>