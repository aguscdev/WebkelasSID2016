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
?>

<?php include '../home/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include '../home/sidebar.php'; ?>
    <div class="contents">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="panel panel-default">
            <div class="panel-heading">Tambah Pengumuman</div>
            <div class="panel-body">

        		<form method="post" action="action_add_umum.php" enctype="multipart/form-data">
        			<div class="form-group">
        			    <label for="umum_id">Umum Id</label>
        			    <input type="text" name="umum_id" class="form-control" id="umum_id" required disabled="">
        			</div>
              <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" class="form-control" id="judul" required>
              </div>
        			<div class="form-group">
        			    <label for="deskripsi">Deskripsi</label>
        			    <!-- <input type="text" name="deskripsi" class="form-control" id="deskripsi" required> -->
                  <textarea class="form-control" name="deskripsi" rows="5" cols="40"></textarea>
        			</div>
              <div class="form-group">
                    <label for="alamat">Foto:</label>
                    <input type="file" name="foto" class="form-control" id="foto" required>
                </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_umum.php">Batal</a>
          </form>
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