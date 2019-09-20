<?php 
if ($_SESSION['username']=='') {
    header('location:../admin/login.php');
}else{
    $user = $_SESSION["username"];
  $user_id = $_SESSION["user_id"];  
  $level = $_SESSION["level"];

  // var_dump($user,$user_id,$level);
 

  if ($level=='ADMIN' || $level=='USER') { ?>
      <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../images/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="#mahasiswa" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MAHASISWA</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="mahasiswa" class="collapse ">
                <ul class="nav">
                    <li><a href="../mahasiswa/v_mahasiswa.php" class=""><i class="fa fa-list"></i> &nbsp List Mahasiswa</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#matkul" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>MATA KULIAH</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="matkul" class="collapse ">
                <ul class="nav">
                    <li><a href="../matkul/v_matkul.php" class=""><i class="fa fa-list"></i> &nbsp List Mata Kuliah</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#kategori" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>KATEGORI</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="kategori" class="collapse ">
                <ul class="nav">
                    <li><a href="../kategori/v_kategori.php" class=""><i class="fa fa-list"></i> &nbsp List Kategori</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#dosen" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>DOSEN</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="dosen" class="collapse ">
                <ul class="nav">
                    <li><a href="../dosen/v_dosen.php" class=""><i class="fa fa-list"></i> &nbsp List Dosen</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#jadwal" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>JADWAL KELAS</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="jadwal" class="collapse ">
                <ul class="nav">
                    <li><a href="../jadwal/v_jadwal.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Jadwal Kelas Pagi</a></li>
                    <li><a href="../jadwal_malam/v_jadwal.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Jadwal Kelas Malam</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#umum" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>UMUM</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="umum" class="collapse ">
                <ul class="nav">
                    <li><a href="../umum/v_umum.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp List Umum</a></li>
                </ul>
            </div>
        </li>
       <!--  <li>
            <a href="#sofware" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>SOFWARE</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="sofware" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp List Sofware</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#galeri" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>GALERI</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="galeri" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp List GALERI</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#contact" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>CONTACT</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="contact" class="collapse ">
                <ul class="nav">
                    <li><a href="#" class=""><i class="fa fa-list"></i> &nbsp List Contact</a></li>
                </ul>
            </div>
        </li> -->
        <li class="">
            <a href="../user/v_user.php">
                <i class="fa fa-user-o text-aqua"></i><span>User</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../monitoring/v_add_monitoring.php">
                <i class="fa fa fa-desktop text-aqua"></i><span>Monitoring</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses elband -->
  <?php 
}

  elseif($level=='ELBAND'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../elband/v_elband.php">
                <i class="fa fa-folder text-aqua"></i> <span>ELBAND</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#elband" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>ELBAND</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="elband" class="collapse ">
                <ul class="nav">
                    <li><a href="../elband/v_elband.php" class=""><i class="fa fa-list"></i> &nbsp List Elband</a></li>
                    <li><a href="../elband/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses AVSEG -->

<?php 
}

  elseif($level=='AVSEG'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../avseg/v_avseg.php">
                <i class="fa fa-folder text-aqua"></i> <span>AVSEG</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#avseg" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>AVSEG</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="avseg" class="collapse ">
                <ul class="nav">
                    <li><a href="../avseg/v_avseg.php" class=""><i class="fa fa-list"></i> &nbsp List Avseg</a></li>
                    <li><a href="../avseg/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>


<!-- akses listrik -->

  <?php 
}

  elseif($level=='LISTRIK'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../listrik/v_listrik.php">
                <i class="fa fa-folder text-aqua"></i> <span>LISTRIK</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#listrik" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>LISTRIK</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="listrik" class="collapse ">
                <ul class="nav">
                    <li><a href="../listrik/v_listrik.php" class=""><i class="fa fa-list"></i> &nbsp List Listrik</a></li>
                    <li><a href="../listrik/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses bangland -->

  <?php 
}

  elseif($level=='BANGLAND'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../bangland/v_bangland.php">
                <i class="fa fa-folder text-aqua"></i> <span>BANGLAND</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#bangland" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>BANGLAND</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="bangland" class="collapse ">
                <ul class="nav">
                    <li><a href="../bangland/v_bangland.php" class=""><i class="fa fa-list"></i> &nbsp List Bangland</a></li>
                    <li><a href="../bangland/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses PKPPK -->

  <?php 
}

  elseif($level=='PKPPK'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../pkppk/v_pkppk.php">
                <i class="fa fa-folder text-aqua"></i> <span>PKPPK</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#pkppk" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>PKPPK</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="pkppk" class="collapse ">
                <ul class="nav">
                    <li><a href="../pkppk/v_pkppk.php" class=""><i class="fa fa-list"></i> &nbsp List PKPPK</a></li>
                    <li><a href="../pkppk/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses AMC -->

  <?php 
}

  elseif($level=='AMC'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <!-- <li class="">
            <a href="../amc/v_amc.php">
                <i class="fa fa-folder text-aqua"></i> <span>AMC</span>
                <span class="pull-right-container"></span>
            </a>
        </li> -->
        <li>
            <a href="#amc" data-toggle="collapse" class="collapsed"><i class="fa fa-folder text-aqua"></i> <span>AMC</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
            <div id="amc" class="collapse ">
                <ul class="nav">
                    <li><a href="../amc/v_amc.php" class=""><i class="fa fa-list"></i> &nbsp List AMC</a></li>
                    <li><a href="../amc/v_add_monitoring.php" class=""><i class="fa fa fa-desktop text-aqua"></i> &nbsp Monitoring</a></li>
                </ul>
            </div>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- akses teknisi -->

  <?php 
}

  elseif($level=='teknisi'){ 
?>
<header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Menu Utama</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        </ul>
    </div>
    </nav>
</header>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="../assets/img/no-avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p>
            <?php 
                echo $_SESSION["username"];
            ?>
        </p>
        <i class="fa fa-circle text-success"></i> Online
        </div>
    </div>
    <br>
    <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
            <a href="../home/home.php">
                <i class="fa fa-university text-aqua"></i> <span>Home</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class="">
            <a href="../teknisi/v_teknisi.php">
                <i class="fa fa-folder text-aqua"></i> <span>Teknisi</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li class="">
            <a href="../admin/v_ganti_password.php">
                <i class="fa fa fa-cog text-aqua"></i><span>Ganti Password</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class="fa fa-power-off text-red"></i><span>Logout</span>
                <span class="pull-right-container"></span>
            </a>
        </li>
    </ul>
    </section>
    <!-- /.sidebar -->
</aside>

  <?php 
}
?>

<?php
}
?>
