
<section id="home">
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(<?=base_url()?>assets/images/foto1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Meningkatkan mutu, meraih prestasi, bertaqwa, terampil dan berbudi luhur</h1>		
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?=base_url()?>assets/images/foto2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Meningkatkan mutu, meraih prestasi, bertaqwa, terampil dan berbudi luhur</h1>
											
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?=base_url()?>assets/images/foto3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1>Meningkatkan mutu, meraih prestasi, bertaqwa, terampil dan berbudi luhur</h1>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
	</aside>
</section>	
						


	<div id="fh5co-testimonial" style="background-image: url(<?=base_url(); ?>assets/images/school.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2><span>Profil</span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<span>Sejarah Singkat<br></span>
									<blockquote>
										<p>&ldquo;SD Indrajaya 02 berdiri sejak 1 januari 1976. SD Indrajaya 02 bukan merupakan sekolah yang berprestasi pada bidang akademik seperti olimpiade, LCC dan lain-lain, namun SD Indrajaya banyak berprestasi dalam bidang non akademik seperti olahraga seni dan lain-lain.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active">
									<span>Visi<br></span>
									<blockquote>
										<p>&ldquo;Meningkatkan mutu, meraih prestasi, bertaqwa, terampil dan berbudi luhur.&rdquo;</p>
									</blockquote>
									<br>
									<span>Misi</span>
									<blockquote>
											Meningkatkan rata-rata daya serap siswa dalam KBM&rdquo;<br>	
											&ldquo;Meningkatkan rata-rata perolehan nilai ujian sekolah&rdquo;<br>	
											&ldquo;Meningkatkan peringkat ujian sekolah ditingkat kecamatan&rdquo;<br>
											&ldquo;Meningkatkan presentase siswa yang diterima di SMP Negeri pavorit&rdquo;<br>
											&ldquo;Meningkatkan layanan perpustakaan sekolah menuju masyarakat gemar membaca dengan meningkatkan kunjungan siswa ke perpustakaan&rdquo;<br>
											&ldquo;Meningkatkan prestasi akademik melalui lomba festival kompetensi siswa, olimpiade mipa, LCC. Bina kreatif siswa, kinerja IPA, Mapsi, dan MTQ pelajar.&rdquo;<br>
											&ldquo;Meningkatkan bimbingan bakat prestasi non akademik lewat prestasi popda/seni&rdquo;<br>
											&ldquo;Meningkatkan kegiatan ekstra kurikuler pramuka sehingga berprestasi di pesta siaga jambore cabang&rdquo;<br>
											&ldquo;Meningkatkan peribadatan lewat bimbingan pendidikan agama islam&rdquo;<br>
											&ldquo;Meningkatkan kemampuan professional guru dengan menyertakan dalam penataran, lokakarya maupun seminar&rdquo;<br>
											&ldquo;Meningkatkan kemampuan professional guru dengan menyediakan sarana mengajar yang standar&rdquo;<br>
											&ldquo;Meningkatkan kualitas mengajar lewat pertemuan KKG di gugus sekolah maupun pusat kegiatan guru&rdquo;<br>
											&ldquo;Menigkatkan kemampuan penguasaan bahasa inggris siswa melalui jam tambahan diluar jam pelajaran&rdquo;<br>
											&ldquo;Meningkatkan kemampuan siswa dalam bidang seni tradisional melalui ekstra kurikuler &rdquo;<br>
									</blockquote>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
<!-- <div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Berita</h2>
					
				</div>
			</div>
			<div class="row">
				<?php foreach ($berita as $row) {?>
				 
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(<?=base_url(); ?>assets/img/upload/<?php echo $row->gambar;?>);"></a>
						<div class="blog-text">
							<h3><a href="#"><?php echo $row->judul;?></a></h3>
							<span class="posted_on"><?php echo $row->tanggal;?></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p style="text-align:justify"><?php echo substr($row->isi,0,200);?></p>

							<p><a href="<?php echo base_url()."Dashboard/tampil_beritadetail/".$row->id_berita;?>">Read More</a></p>
						</div> 
					</div>
				</div>
				<?php } ?>
				
			</div>
		</div>
	</div> -->

	
<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(<?=base_url()?>assets/images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<?php foreach ($guru as $value) { ?>
						
						<div class="col-md-4 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-world"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $value->jumlah;?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Data Guru</span>
						</div>
						<?php } ?>
						<?php foreach ($siswa as $value) { ?>
						<div class="col-md-4 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $value->jumlah;?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Data Siswa</span>
						</div>
						<?php } ?>
						<?php foreach ($ruang as $value) { ?>
						<div class="col-md-4 col-sm-6 text-center animate-box">
							<span class="icon"><i class="icon-study"></i></span>
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $value->jumlah;?>" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Data Ruang</span>
						</div>
						<?php } ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<section id="pengumuman">	
<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Pengumuman</h2>
					
				</div>
			</div>
			
			
			<div class="row">
				<?php foreach ($pengumuman as $row) { ?>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-img-holder" style="background-image: url(<?=base_url(); ?>assets/img/upload/<?php echo $row->gambar;?>);"></a>
						<div class="blog-text">
							<h3><a href="#"><?php echo $row->judul;?></a></h3>
							<span class="posted_on"><?php echo $row->tanggal;?></span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p><?php echo substr($row->isi,0,200);?></p>

							<p><a href="<?php echo base_url()."Dashboard/tampil_pengdetail/".$row->id_pengumuman;?>">Read More</a></p>
						</div> 
					</div>
				</div>
				<?php } ?>
				
				
			</div>
		</div>
	</div>
	</section>
	
	

	
	