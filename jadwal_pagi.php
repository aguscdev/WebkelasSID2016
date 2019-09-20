<?php
include 'config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori_id ASC");
// $query2 = mysqli_query($koneksi,"SELECT nama_produk.*,nama_kategori.n_kategori FROM nama_produk, nama_kategori WHERE nama_kategori.kategori_id = nama_kategori.kategori_id AND nama_produk.kategori_id = '' ORDER BY nama_produk.kategori_id ASC ");
?>
?>
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
								Jadwal Kelas		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="jadwal.html"> Jadwal Kelas</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start course-details Area -->
			<section class="course-details-area pt-120">
				<div class="container">					
					<div class="title text-center">
						<h1 class="mb-10">Jadwal Mata Kuliah</h1>
						<p>Sistem Informasi D 2016.</p>
					</div>
                	<div class="panel-body">
	                    <table id="dtUser" class="table table-bordered">
	                        <thead>
							<th>No</th>
							<!-- <th>Jadwal Id</th> -->
							<th>Kelas</th>
							<th>Hari</th>
							<th>Mata kuliah</th>
							<th>Ruangan</th>
							<th>Jam</th>
							<th>Nama Dosen</th>
							</thead>
						<tbody>
						<?php
                            include 'config/koneksi.php';
                            $no = 1;
                            $data = mysqli_query($koneksi,"SELECT * FROM jadwal 
                            	JOIN kategori ON jadwal.kategori_id=kategori.kategori_id
                            	JOIN matkul ON jadwal.matkul_id=matkul.matkul_id
                            	JOIN dosen ON jadwal.dosen_id=dosen.dosen_id");
                            while($d = mysqli_fetch_array($data)) {
                        ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<!-- <td><?php echo $d['jadwal_id']; ?></td> -->
							<td><?php echo $d['kategori']; ?></td>
							<td><?php echo $d['hari']; ?></td>
							<td><?php echo $d['matkul']; ?></td>
							<td><?php echo $d['ruang']; ?></td>
							<td><?php echo $d['jam']; ?></td>
							<td><?php echo $d['nama_dosen']; ?></td>
						</tr><?php } ?>
					</tbody>
				</table>
            </div>
			</section>
			<!-- End course-details Area -->
			

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Nama Dosen</h1>
								<p>STMIK Insan Pembangunan.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<?php 
							include 'config/koneksi.php';
							$data = mysqli_query($koneksi,"select * from dosen");
							while($d = mysqli_fetch_array($data)){
							?>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img src="dosen/<?php echo $d['foto']; ?>" width="50" height="195"/>
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
									<h4>$150</h4>
								</div>									
							</div>
							<div class="details">
								<a href="course-details.html">
									<h4>
										<?php echo $d['nama_dosen']; ?>
									</h4>
								</a>
								<p>
									<tbody>
			                            <tr>
			                                <th width="30%">Nomor Telepon:</th>
			                                <td><?php echo $d['no_telp']; ?></td>
			                            </tr><br>
										<tr>
			                                <th width="30%">Email:</th>
			                                <td><?php echo $d['email']; ?></td>
			                            </tr>
									</tbody>										
								</p>
							</div>
						</div>	
					<?php } ?>								
																			
					</div>
					<a href="#" class="primary-btn text-uppercase mx-auto">Ikuti Kami</a>
				</div>	
			</section>
			<!-- End popular-courses Area -->					

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Not Yet Satisfied with our Trend?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="#">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    				
		</body>
		<?php include'footer.php'; ?>
	</html>