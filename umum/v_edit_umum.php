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
            <div class="panel-heading">Edit Dosen</div>
            <div class="panel-body">
 
      			<?php
            include '../config/koneksi.php';
      			$umum_id = $_GET['umum_id'];
      			$data = mysqli_query($koneksi,"select * from umum where umum_id='$umum_id'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_umum.php"> <!-- update.php -->
      				<div class="form-group">
        			    <label for="dosen_id">Dosen Id</label>
        			    <input type="hidden" name="umum_id" value="<?php echo $d['umum_id']; ?>">
        			    <input type="text" name="umum_id" class="form-control" id="umum_id" value="<?php echo $d['umum_id']; ?>" required disabled="">
        			</div>
              <div class="form-group">
                  <label for="julul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $d['judul']; ?>" required>
              </div>
              <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" rows="5" cols="40"><?php echo $d['deskripsi']; ?></textarea>
              </div>
              <div class="form-group">
                  <label for="foto">Foto:</label>
                  <input type="file" name="foto" class="form-control" id="foto" value="<?php echo $d['foto']; ?>" required>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_dosen.php">Batal</a>
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