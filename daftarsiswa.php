<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>Username</th>
			<th>NIM</th>
			<th>Nama tutor</th>
			<th>Mata Kuliah</th>
			<th>Waktu Mulai</th>
			<th>Waktu Selesai</th>
			<th>Hapus</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM mahasiswa");



		while($siswa = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$siswa['username']."</td>";
			echo "<td>".$siswa['nim']."</td>";
			echo "<td>".$siswa['pilihtutor']."</td>";
			echo "<td>".$siswa['pilihmatkul']."</td>";
			echo "<td>".$siswa['mulai']."</td>";
			echo "<td>".$siswa['selesai']."</td>";

			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
