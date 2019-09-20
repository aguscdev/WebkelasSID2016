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
                <div class="panel-heading">Master Kategori </div>
                <div class="panel-body">
                <a class="btn btn-success" href="v_add_kategori.php">Tambah</a><br/><br/>
                    <table id="dtUser" class="table table-bordered">
                        <thead>
                          <th>No</th>
                          <th>Kategori</th>
                          <th>aksi</th>
                          </thead>
                        <tbody>
                          <?php
                            include '../config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"SELECT * FROM kategori");
                            while($d = mysqli_fetch_array($data)) {
                           ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['kategori']; ?></td>
                            <td>
                              <a href="v_edit_kategori.php?kategori_id=<?php echo $d['kategori_id']; ?>" class="btn btn-warning">Edit</a> ||
                              <a href="action_delete_kategori.php?kategori_id=<?php echo $d['kategori_id']; ?>" class="btn btn-danger"> Hapus</a>
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