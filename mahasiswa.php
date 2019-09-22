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
								Mahasiswa	
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="mahasiswa.php"> Mahasiswa</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Nama Mahasiswa</h1>
								<p>STMIK Insan Pembangunan-Sistem Informasi D 2016.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<?php 
							include 'config/koneksi.php';
							$data = mysqli_query($koneksi,"select * from mahasiswa");
							while($d = mysqli_fetch_array($data)){
							?>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img src="mahasiswa/<?php echo $d['foto']; ?>" width="50" height="195"/>
								</div>
								<!-- <div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div> -->									
							</div>
							<div class="details">
								<a href="course-details.html">
									<h4>
										<?php echo $d['nama_mahasiswa']; ?>
									</h4>
								</a>
								<p>
									<?php echo $d['alamat']; ?>										
								</p>
							</div>
						</div>	
					<?php } ?>								
																			
					</div>
					<a href="#" class="primary-btn text-uppercase mx-auto">Ikuti Kami</a>
				</div>	
			</section>
			<!-- End popular-courses Area -->			

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Kami Yakin, <br>
								Kami Pasti Bisa!
							</h1>
							<p>
								Setiap mimpi besar dimulai dengan seorang pemimpi. Ingatlah selalu, kamu memiliki kekuatan, kesabaran, dan hasrat untuk meraih bintang-bintang untuk mengubah dunia.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Tujuan Kami</h4></a>		
									<p>
										Topi toga ini adalah tujuan kami berada di sini.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Sertifikat</h4></a>		
									<p>
										Kami selalu mencari pengalaman dan pembelajaran untuk mendapatkan ilmu.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Daftar Disini Untuk Menjadi Bagian Kami</h4>
								<input type="text" class="form-control" name="npm" placeholder="NPM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NPM'" >		
								<input type="text" class="form-control" name="name" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" >
								<input type="email" class="form-control" name="email" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" >
								<input type="phone" class="form-control" name="phone" placeholder="Nomor Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon'" >
								<input type="text" class="form-control" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" >
								<input type="file" class="form-control" name="foto" placeholder="Foto" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Foto'" >									
								<button class="primary-btn text-uppercase">Simpan</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->			

			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Ikuti Terus Kami</h1>
								<p>Bakal ada yang seru disetiap belajar di kelas</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/hmsi_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>HIMPUNAN SEMA IP</p>
									<a href="https://www.instagram.com/hmsi_ipem/"><h4>HMSI (Himpunan mahasiswa sistem informasi)</h4></a>
									<p>
										Salah satu himpunana mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/hmak_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>HIMPUNAN SEMA IP</p>
									<a href="https://www.instagram.com/hmak_ipem/"><h4>HMAK (Himpunan mahasiswa akuntasi)</h4></a>
									<p>
										Salah satu himpunana mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/hmm_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>HIMPUNAN SEMA IP</p>
									<a href="https://www.instagram.com/hmm_ipem/"><h4>HMM (Himpunan mahasiswa manajemen)</h4></a>
									<p>
										Salah satu himpunana mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/hmsia_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>HIMPUNAN SEMA IP</p>
									<a href="https://www.instagram.com/hmsia_ip/"><h4>HMSIA (Himpunan mahasiswa sistem informasi akuntansi)</h4></a>
									<p>
										Salah satu himpunana mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/kuas_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>DEPARTEMEN SEMA IP</p>
									<a href="https://www.instagram.com/kuas_ipem/"><h4>KUAS IPEM</h4></a>
									<p>
										Salah satu departemen mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="images/kelas/pealip_ip.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>DEPARTEMEN SEMA IP</p>
									<a href="https://www.instagram.com/pealip_ip/"><h4>PEALIP IPEM</h4></a>
									<p>
										Salah satu departemen mahasiswa Insan pembangunan, banyak kegiatan seperti acara seminar dll.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->				

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

			<!-- start footer Area -->		
		</body>
		<?php include'footer.php'; ?>
	</html>