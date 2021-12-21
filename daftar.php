<?php require_once "template/headContent.php" ?>
<div class="container daftar">
  <form class="left" action="prosespendaftaran.php" method="post">
    <div>
		<h1>Selamat Datang di <span>Tutor4u</span></h1>
		<hr>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" placeholder="Nama Lengkap" />
		</div>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" name="nim" />
		</div>
		<div class="form-group">
			<label for="tutor">Tutor</label>
			<select name="tutor">
				<option value="Matematika-Tony Stark|-16:00-22:00">Matematika-Tony Stark|-16:00-22:00</option>
				<option value="Matematika-Clint Barton|-16:00-22:00">Matematika-Clint Barton|-16:00-22:00</option>
				<option value="Matematika-Vision|-16:00-22:00">Matematika-Vision|-16:00-22:00</option>
				<option value="Matematika-Nick Furry|-15:00-21:00">Matematika-Nick Furry|-15:00-21:00</option>
				<option value="Matematika-Shuri|-15:00-21:00">Matematika-Shuri|-15:00-21:00</option>
				<option value="Bahasa Indonesia-Natasha Romanoff|-16:00-22:00">Bahasa Indonesia-Natasha Romanoff|-16:00-22:00</option>
				<option value="Bahasa Indonesia-James Rhodes|-16:00-22:00">Bahasa Indonesia-James Rhodes|-16:00-22:00</option>
				<option value="Bahasa Indonesia-Peter Quill|-15:00-21:00">Bahasa Indonesia-Peter Quill|-15:00-21:00</option>
				<option value="Bahasa Indonesia-Gamora|-14:00-20:00">Bahasa Indonesia-Gamora|-14:00-20:00</option>
				<option value="Bahasa Indonesia-Groot|-15:00-21:00">Bahasa Indonesia-Groot|-15:00-21:00</option>
				<option value="Bahasa Inggris-Thor Odinson|-16:00-22:00">Bahasa Inggris-Thor Odinson|-16:00-22:00</option>
				<option value="Bahasa Inggris-Wanda Maximoff|-15:00-21:00">Bahasa Inggris-Wanda Maximoff|-15:00-21:00</option>
				<option value="Bahasa Inggris-Bucky Barnes|-16:00-22:00">Bahasa Inggris-Bucky Barnes|-16:00-22:00</option>
				<option value="Bahasa Inggris-Carol Danvers|-16:00-22:00">Bahasa Inggris-Carol Danvers|-16:00-22:00</option>
				<option value="Bahasa Inggris-Drax|-15:00-21:00">Bahasa Inggris-Drax|-15:00-21:00</option>
				<option value="Kimia-Steve Rogers|-16:00-22:00">Kimia-Steve Rogers|-16:00-22:00</option>
				<option value="Kimia-Peter Parker|-14:00-20:00">Kimia-Peter Parker|-14:00-20:00</option>
				<option value="Kimia-Yelena Belova|-16:00-22:00">Kimia-Yelena Belova|-16:00-22:00</option>
				<option value="Kimia-Maria Hill|-15:00-21:00">Kimia-Maria Hill|-15:00-21:00</option>
				<option value="Kimia-Okoye|-16:00-22:00">Kimia-Okoye|-16:00-22:00</option>
				<option value="Biologi-Bruce Banner|-16:00-22:00">Biologi-Bruce Banner|-16:00-22:00</option>
				<option value="Biologi-Mantis|-15:00-21:00">Biologi-Mantis|-15:00-21:00</option>
				<option value="Biologi-Stephen Strange|-15:00-21:00">Biologi-Stephen Strange|-15:00-21:00</option>
				<option value="Biologi-Pietro Maximoff|-16:00-22:00">Biologi-Pietro Maximoff|-16:00-22:00</option>
				<option value="Biologi-Loki Odinson|-14:00-20:00">Biologi-Loki Odinson|-14:00-20:00</option>
				<option value="Fisika-Sam Wilson|-16:00-22:00">Fisika-Sam Wilson|-16:00-22:00</option>
				<option value="Fisika-Rocket|-15:00-21:00">Fisika-Rocket|-15:00-21:00</option>
				<option value="Fisika-Nebula|-16:00-22:00">Fisika-Nebula|-16:00-22:00</option>
				<option value="Fisika-TChalla|-15:00-21:00">Fisika-TChalla|-15:00-21:00</option>
				<option value="Fisika-Scott Lang|-16:00-22:00">Fisika-Scott Lang|-16:00-22:00</option>
			</select>
		</div>
		<button type="submit" name="daftar">Daftar</button>
    </div>
  </form>
  <div class="right" style="align-items:center;">
	  <img style="width: 90%;" src="img/SignUpbb.png" alt="">
  </div>
</div>
<?php require_once "template/footer.php" ?>

