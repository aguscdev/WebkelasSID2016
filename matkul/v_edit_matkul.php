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
      			$matkul_id = $_GET['matkul_id'];
      			$data = mysqli_query($koneksi,"select * from matkul where matkul_id='$matkul_id'");
      			while($d = mysqli_fetch_array($data)){
      			?>

      			<form method="post" action="action_edit_matkul.php"> <!-- update.php -->
      				<div class="form-group">
        			    <label for="matkul_id">Mata Kuliah Id</label>
        			    <input type="hidden" name="matkul_id" value="<?php echo $d['matkul_id']; ?>">
        			    <input type="text" name="matkul_id" class="form-control" id="matkul_id" value="<?php echo $d['matkul_id']; ?>" required disabled="">
        			</div>
              <div class="form-group">
                  <label for="matkul">Mata Kuliah</label>
                  <input type="text" name="matkul" class="form-control" id="matkul" value="<?php echo $d['matkul']; ?>" required>
              </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_matkul.php">Batal</a>
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