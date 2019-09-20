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
            <div class="panel-heading">Edit Jadwal Pagi</div>
              <div class="panel-body">
          			<?php
                include '../config/koneksi.php';
          			$jadwal_id = $_GET['jadwal_id'];
          			$data = mysqli_query($koneksi,"select * from jadwal where jadwal_id='$jadwal_id'");
          			while($d = mysqli_fetch_array($data)){
          			?>

          			<form method="post" action="action_edit_jadwal.php"> <!-- update.php -->
          				<div class="form-group">
          			    <label for="id">Jadwal Id</label>
          			    <input type="hidden" name="jadwal_id" value="<?php echo $d['jadwal_id']; ?>">
          			    <input type="text" name="jadwal_id" class="form-control" id="jadwal_id" value="<?php echo $d['jadwal_id']; ?>" required disabled="">
            			</div><?php } ?>
                  <div class="form-group">
                    <label for="kategeri">Kategori:</label>
                    <select name="kategori_id" class="form-control" required>
                      <option value="">-- Pilih --</option>
                      <?php
                       include '../config/koneksi.php';
                       $query = mysqli_query($koneksi,"SELECT * FROM kategori");
                      while($data=mysqli_fetch_array($query)) { ?>
                      <option value="<?php echo $data['kategori_id']; ?>"><?php echo $data['kategori']; ?></option>
                      <?php
                      } ?>
                    </select>
                  </div>
                  <?php
                  include '../config/koneksi.php';
                  $jadwal_id = $_GET['jadwal_id'];
                  $data = mysqli_query($koneksi,"select * from jadwal where jadwal_id='$jadwal_id'");
                  while($d = mysqli_fetch_array($data)){
                  ?>
            			<div class="form-group">
          			    <label for="hari">Hari:</label>
          			    <input type="text" name="hari" class="form-control" id="hari" value="<?php echo $d['hari']; ?>" required>
          			  </div><?php } ?>
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
                  <?php
                    include '../config/koneksi.php';
                    $jadwal_id = $_GET['jadwal_id'];
                    $data = mysqli_query($koneksi,"select * from jadwal where jadwal_id='$jadwal_id'");
                    while($d = mysqli_fetch_array($data)){
                  ?>
                  <div class="form-group">
                      <label for="ruang">Ruangan:</label>
                      <input type="text" name="ruang" class="form-control" id="ruangan" value="<?php echo $d['ruang']; ?>" required>
                  </div>
                  <div class="form-group">
                      <label for="jam">JAM:</label>
                      <input type="text" name="jam" class="form-control" id="jam" value="<?php echo $d['jam']; ?>" required>
                  </div><?php } ?>
                  <div class="form-group">
                    <label for="dosen">Nama Dosen:</label>
                    <select name="dosen_id" class="form-control" required>
                      <option value="">-- Pilih --</option>
                      <?php
                       include '../config/koneksi.php';
                       $query = mysqli_query($koneksi,"SELECT * FROM dosen");
                      while($data=mysqli_fetch_array($query)) { ?>
                      <option value="<?php echo $data['dosen_id']; ?>"><?php echo $data['nama_dosen']; ?></option>
                      <?php
                      } ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <a class="btn btn-danger" href="v_jadwal.php">Batal</a>
			         </form>
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