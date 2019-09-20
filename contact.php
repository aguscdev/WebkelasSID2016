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
								Contact Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div style="width:100%; height: 500px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.312769801949!2d106.55810771446575!3d-6.22242586267421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe74eed2a5d1%3A0x10c2f57db3bc5d23!2sSTIE+%26+STMIK+Insan+Pembangunan!5e0!3m2!1sid!2sid!4v1545060110576" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>STMIK Insan Pembangunan</h5>
									<p>
										Jl.Raya Serang KM.10 Bitung-Tangerang
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>085778783602</h5>
									<p>08:00 s/d 22:00 Melayani Anda</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>sid2016@gmail.com</h5>
									<p>Kirim Pesan Ke Kami!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="npm" placeholder="NPM" onfocus="this.placeholder = ''" onblur="this.placeholder = 'NPM'" class="common-input mb-20 form-control" required="" type="text">
										<input name="nama" placeholder="Nama" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder="Alamat Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" class="common-input mb-20 form-control" required="" type="email">

										
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="pesan" placeholder="Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button class="genric-btn primary" style="float: right;">Kirim Pesan</button>											
									</div>
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->
		</body>
		<?php include'footer.php'; ?>
	</html>