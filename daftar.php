<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Murid Baru</title>
</head>

<body>
	<header>
		<h3>Formulir Pendaftaran murid Baru</h3>
	</header>

	<form action="prosespendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="nim">NIM: </label>
			<input type="text" name="nim" />
		</p>
		<p>
			<label for="tutor">Tutor: </label>
			<input type="text" name="tutor" />
		</p>


        <p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>

		</fieldset>
	</form>

	</body>
</html>
