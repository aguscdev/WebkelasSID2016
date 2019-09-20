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
                <div class="panel-heading">Master Dosen </div>
                <div class="panel-body">
                <a class="btn btn-success" href="v_add_dosen.php">Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
						<th>No</th>
						<th>Nama Dosen</th>
						<th>No. Telepon</th>
						<th>Email</th>
						<th>Mata Kuliah</th>
						<th>Foto</th>
						<th>aksi</th>
						</thead>
					<tbody>
						<?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"SELECT * FROM dosen JOIN matkul ON dosen.matkul_id=matkul.matkul_id");
                            while($d = mysqli_fetch_array($data)) {
                           ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['nama_dosen']; ?></td>
							<td><?php echo $d['no_telp']; ?></td>
							<td><?php echo $d['email']; ?></td>
							<td><?php echo $d['matkul']; ?></td>
							<td><img src="<?php echo $d['foto']; ?>" width="50" height="50"/></td>
							<td>
								<a href="v_edit_dosen.php?dosen_id=<?php echo $d['dosen_id']; ?>" class="btn btn-warning">Edit</a> ||
								<a href="action_delete_dosen.php?dosen_id=<?php echo $d['dosen_id']; ?>" class="btn btn-danger"> Hapus</a>
							</td>
						</tr>
						<?php 
						}
						?>

					</tbody>
					</table>
                </div>
            </div>
        </section><br>
      </div>
    </div>
  </div>
</body>
<?php include '../home/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
		$('#dtUser').DataTable();
	});
</script>
</html>
<?php
}
?>