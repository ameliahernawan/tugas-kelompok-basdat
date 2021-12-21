<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tutor = $_POST['tutor'];


	$check = pg_query("IF EXISTS (SELECT * FROM siswa WHERE nim = $nim)
	BEGIN
	die("sudah terdaftar . . ."
	END
	else
	BEGIN
	$query = pg_query("INSERT INTO siswa (nama, nim) VALUEs ('$nama', '$nim')");
  
	  // apakah query simpan berhasil?
	  if( $query==TRUE ) {
		  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
		  header('Location: index.php?status=sukses');
	  } else {
		  // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		  header('Location: index.php?status=gagal');
	  }")

} else {
	die("Akses dilarang...");
}
?>
