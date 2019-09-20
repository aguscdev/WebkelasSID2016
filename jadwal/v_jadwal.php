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
                <div class="panel-heading">Jadwal Mata Kuliah </div>
                <div class="panel-body">
                <a class="btn btn-success" href="v_add_jadwal.php">Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
						<!-- <th>No</th> -->
						<th>Jadwal Id</th>
						<th>Kategori</th>
						<th>Hari</th>
						<th>Mata kuliah</th>
						<th>Ruangan</th>
						<th>Jam</th>
						<th>Nama Dosen</th>
						<th>aksi</th>
						</thead>
					<tbody>

						<?php
                                include '../config/koneksi.php';
                                // $no = 1;
                                $data = mysqli_query($koneksi,"SELECT * FROM jadwal 
                                	JOIN kategori ON jadwal.kategori_id=kategori.kategori_id
                                	JOIN matkul ON jadwal.matkul_id=matkul.matkul_id
                                	JOIN dosen ON jadwal.dosen_id=dosen.dosen_id");
                                while($d = mysqli_fetch_array($data)) {
                            ?>
						<tr>
							<!-- <td><?php echo $no++; ?></td> -->
							<td><?php echo $d['jadwal_id']; ?></td>
							<td><?php echo $d['kategori']; ?></td>
							<td><?php echo $d['hari']; ?></td>
							<td><?php echo $d['matkul']; ?></td>
							<td><?php echo $d['ruang']; ?></td>
							<td><?php echo $d['jam']; ?></td>
							<td><?php echo $d['nama_dosen']; ?></td>
							<td>
								<a href="v_edit_jadwal.php?jadwal_id=<?php echo $d['jadwal_id']; ?>" class="btn btn-warning">Edit</a> ||
								<a href="action_delete_jadwal.php?jadwal_id=<?php echo $d['jadwal_id']; ?>" class="btn btn-danger"> Hapus</a>
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