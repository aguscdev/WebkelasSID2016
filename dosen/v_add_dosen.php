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
            <div class="panel-heading">Tambah Dosen</div>
            <div class="panel-body">

        		<form method="post" action="action_add_dosen.php" enctype="multipart/form-data">
        			<div class="form-group">
        			    <label for="dosen_id">Dosen Id</label>
        			    <input type="text" name="dosen_id" class="form-control" id="dosen_id" required disabled="">
        			</div>
              <div class="form-group">
                  <label for="nama_dosen">Nama Dosen</label>
                  <input type="text" name="nama_dosen" class="form-control" id="nama_dosen" required>
              </div>
              <div class="form-group">
                  <label for="no_telp">No Telepon</label>
                  <input type="number" name="no_telp" class="form-control" id="no_telp" required>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="nama_mahasiswa" required>
              </div>
        			<div class="form-group">
                  <label for="matkul">Mata Kuliah:</label>
                  <select name="matkul_id" class="form-control" required>
                    <option value="">-- Pilih --</option>
                    <?php
                     include '../config/koneksi.php';
                     $query = mysqli_query($koneksi,"SELECT * FROM matkul");
                    while($data=mysqli_fetch_array($query)) { ?>
                    <option value="<?php echo $data['matkul_id']; ?>"><?php echo $data['matkul']; ?></option>
                    <?php
                    } ?>
                  </select>
                </div>
              <div class="form-group">
                    <label for="alamat">Foto:</label>
                    <input type="file" name="foto" class="form-control" id="foto" required>
                </div>
              <button type="submit" class="btn btn-info">Simpan</button>
              <a class="btn btn-danger" href="v_dosen.php">Batal</a>
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