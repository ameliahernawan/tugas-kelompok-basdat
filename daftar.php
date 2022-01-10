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
				<option value="01A">Matematika-Tony Stark|-16:00-22:00</option>
				<option value="02A">Matematika-Clint Barton|-16:00-22:00</option>
				<option value="03A">Matematika-Vision|-16:00-22:00</option>
				<option value="04A">Matematika-Nick Furry|-15:00-21:00</option>
				<option value="05A">Matematika-Shuri|-15:00-21:00</option>
				<option value="06B">Bahasa Indonesia-Natasha Romanoff|-16:00-22:00</option>
				<option value="07B">Bahasa Indonesia-James Rhodes|-16:00-22:00</option>
				<option value="08B">Bahasa Indonesia-Peter Quill|-15:00-21:00</option>
				<option value="09B">Bahasa Indonesia-Gamora|-14:00-20:00</option>
				<option value="10B">Bahasa Indonesia-Groot|-15:00-21:00</option>
				<option value="11C">Bahasa Inggris-Thor Odinson|-16:00-22:00</option>
				<option value="12C">Bahasa Inggris-Wanda Maximoff|-15:00-21:00</option>
				<option value="13C">Bahasa Inggris-Bucky Barnes|-16:00-22:00</option>
				<option value="14C">Bahasa Inggris-Carol Danvers|-16:00-22:00</option>
				<option value="15C">Bahasa Inggris-Drax|-15:00-21:00</option>
				<option value="16D">Kimia-Steve Rogers|-16:00-22:00</option>
				<option value="17D">Kimia-Peter Parker|-14:00-20:00</option>
				<option value="18D">Kimia-Yelena Belova|-16:00-22:00</option>
				<option value="19D">Kimia-Maria Hill|-15:00-21:00</option>
				<option value="20D">Kimia-Okoye|-16:00-22:00</option>
				<option value="21E">Biologi-Bruce Banner|-16:00-22:00</option>
				<option value="22E">Biologi-Mantis|-15:00-21:00</option>
				<option value="23E">Biologi-Stephen Strange|-15:00-21:00</option>
				<option value="24E">Biologi-Pietro Maximoff|-16:00-22:00</option>
				<option value="25E">Biologi-Loki Odinson|-14:00-20:00</option>
				<option value="26F">Fisika-Sam Wilson|-16:00-22:00</option>
				<option value="27F">Fisika-Rocket|-15:00-21:00</option>
				<option value="28F">Fisika-Nebula|-16:00-22:00</option>
				<option value="29F">Fisika-TChalla|-15:00-21:00</option>
				<option value="30F">Fisika-Scott Lang|-16:00-22:00</option>
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


