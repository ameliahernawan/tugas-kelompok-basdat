<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tutor = $_POST['tutor'];


	$query = pg_query("INSERT INTO mahasiswa (username, NIM, IDtutor) VALUEs ('$nama', '$nim','$tutor')");
  
	  // apakah query simpan berhasil?
	  if( $query==TRUE ) {
		  $up = pg_query("UPDATE mahasiswa SET pilihmatkul = namamatkul, pilihtutor = namatutor, mulai = start, selesai = finish FROM Tutor WHERE mahasiswa.IDtutor = Tutor.idtutor");
		  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
		  header('Location: index.php?status=sukses');
	  } else {
		  // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		  echo"gagal mendaftar";
	  }
 
} else {
	die("Akses dilarang...");
}
?>
