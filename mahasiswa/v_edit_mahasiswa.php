<!DOCTYPE html>
<html>

<?php
session_start();
if ($_SESSION['username']=='') {
  header('location:../admin/login.php');

  
}else{

  $user = $_SESSION["username"];
  $user_id = $_SESSION["user_id"];  
  $level = $_SESSION["level"];

  include '../home/header.php'; 
?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Mahasiswa</div>
            <div class="panel-body">
 
      			<?php
            include '../config/koneksi.php';
      			$mahasiswa_id = $_GET['mahasiswa_id'];
      			$data = mysqli_query($koneksi,"select * from mahasiswa where mahasiswa_id='$mahasiswa_id'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_mahasiswa.php"> <!-- update.php -->
      				<div class="form-group">
        			    <label for="id">Mahasiswa Id</label>
        			    <input type="hidden" name="mahasiswa_id" value="<?php echo $d['mahasiswa_id']; ?>">
        			    <input type="text" name="mahasiswa_id" class="form-control" id="mahasiswa_id" value="<?php echo $d['mahasiswa_id']; ?>" required disabled="">
        			</div>
        			<div class="form-group">
        			    <label for="npm">NPM:</label>
        			    <input type="number" name="npm" class="form-control" id="npm" value="<?php echo $d['npm']; ?>" required>
        			</div>
              <div class="form-group">
                <label for="nama_mahasiswa">Nama Mahasiswa:</label>
                <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" value="<?php echo $d['nama_mahasiswa']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="no_telp">No Telepon:</label>
                  <input type="number" name="no_telp" class="form-control" id="no_telp" value="<?php echo $d['no_telp']; ?>" required>
              </div>
              <div class="form-group">
                <label for="alamat">alamat:</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $d['alamat']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="foto">Foto:</label>
                  <input type="file" name="foto" class="form-control" id="foto" value="<?php echo $d['foto']; ?>" required>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_mahasiswa.php">Batal</a>
      			</form>
      			<?php 
      			}
      			?>

            </div>
        </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
</html>
<?php
}
?>