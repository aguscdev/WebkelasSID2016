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
            <div class="panel-heading">Edit User</div>
            <div class="panel-body">
 
			<?php
      include '../config/koneksi.php';
			$user_id = $_GET['user_id'];
			$data = mysqli_query($koneksi,"select * from user where user_id='$user_id'");
			while($d = mysqli_fetch_array($data)){
			?>

			<form method="post" action="action_edit_user.php"> <!-- update.php -->
					<div class="form-group">
  			    <label for="id">Id User</label>
  			    <input type="hidden" name="user_id" value="<?php echo $d['user_id']; ?>">
  			    <input type="text" name="user_id" class="form-control" id="id" value="<?php echo $d['user_id']; ?>" required disabled="">
    			</div>
    			<div class="form-group">
    			    <label for="nama">Nama:</label>
    			    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d['nama']; ?>" required>
    			</div>
          <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" name="username" class="form-control" id="username" value="<?php echo $d['username']; ?>" required>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" name="email" class="form-control" id="email" value="<?php echo $d['email']; ?>" required>
          </div>
          <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" id="password" value="<?php echo $d['password']; ?>" required>
          </div>
          <div class="form-group">
              <label for="sel1">Hak Akses:</label>
              <select name="level" class="form-control" id="sel1">
                  <option>ADMIN</option>
                  <option>USER</option>
              </select> 
          </div>
          <button type="submit" class="btn btn-info">Simpan</button>
          <a class="btn btn-danger" href="v_user.php">Batal</a>
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