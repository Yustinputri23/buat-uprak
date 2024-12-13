	<?php include 'header.php'; ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" >	
	<div class="section">
		<div class="container">
			<h3 class="text-center">Kontak</h3>
			
			<div class="col-4">
				<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
				<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
				<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
				<div class="social-links">
  	 				<a href="https://m.facebook.com/smkaknusabangsa/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href=" https://x.com/analiskimianb?lang=en "><i class="fab fa-x"></i></a>
  	 				<a href="https://www.instagram.com/smkaknusabangsa?igsh=ZHVvZjR2enJpMnpw"><i class="fab fa-instagram"></i></a>
  	 				<a href=" https://www.tiktok.com/@smkaknusabangsa "><i class="fab fa-tiktok"></i></a>
  	 			</div>
			</div>
			
			<div class="box-gmaps">
				<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			
		</div>
	</div>

	<?php include 'footer.php'; ?>