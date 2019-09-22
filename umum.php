	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include'header.php'; ?>
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Pengumuman		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="umum.php"> Pengumuman</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<?php 
								include 'config/koneksi.php';
								$data = mysqli_query($koneksi,"select * from umum");
								while($d = mysqli_fetch_array($data)){
								?>
							<div class="main-img">
								<img class="img-fluid" src="umum/<?php echo $d['foto']; ?>" width="800" height="60"/>
							</div>
							<div class="details-content">
								<a href="#">
									<h4><?php echo $d['judul']; ?></h4>
								</a>
								<p>
									<?php echo $d['deskripsi']; ?>								
								</p>
							</div>
						<?php } ?>
							<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="https://web.facebook.com/jendol.jendol.1848?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="http://sisteminformasid2016.rf.gd"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
									<a href="#" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Kembali</a>
									<a href="#" class="nav-next">Lanjut<span class="lnr lnr-arrow-right"></span></a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Web Kampus</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>Kelas D 2016</span>
										<span><a href="http://sisteminformasid2016.rf.gd">kelasd.web.id</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>STMIK IPEM</span>
										<span><a href="https://stmik.ipem.ac.id/">stmik.ipem.ac.id</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>E-Campus</span>
										<span><a href="http://ecampus.ipem.ac.id/">ecampus.ipem.ac.id</a></span>
									</li>														
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Tutorial Link</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>WPU</span>
										<span><a href="https://www.youtube.com/channel/UCkXmLjEr95LVtGuIm3l2dPg?pbjreload=10">Web Program Unpas</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Malas Ngoding</span>
										<span><a href="https://www.malasngoding.com/">Malas Ngoding</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Sekolah Koding</span>
										<span><a href="https://sekolahkoding.com/">Sekolah Koding</a></span>
									</li>														
								</ul>
							</div>
							<div class="single-event-details">
								<h4>Software</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">
										<span>XAMPP</span>
										<span><a href="https://www.apachefriends.org">Xampp</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>Sublime Text</span>
										<span><a href="https://www.sublimetext.com/">Sublimetext</a></span>
									</li>
									<li class="justify-content-between d-flex">
										<span>GIT</span>
										<span><a href="https://git-scm.com/">Git</a></span>
									</li>														
								</ul>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Belum Puas dengan Tren kita?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">Lihat Blog Kami</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    				
		</body>
		<?php include'footer.php'; ?>
	</html>