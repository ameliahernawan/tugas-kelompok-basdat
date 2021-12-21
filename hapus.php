<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['hapus'])){

	// ambil data dari formulir
	$nim = $_POST['nim'];
	$tutor = $_POST['tutor'];


	$query = pg_query("DELETE FROM mahasiswa WHERE idtutor = '$tutor' WHERE NIM='$nim'")
  
	  // apakah query simpan berhasil?
	  if( $query==TRUE ) {
		  $up = pg_query("DELETE FROM mahasiswa SET IDtutor = Tutor.idtutor");
		  // kalau berhasil alihkan ke halaman index.php dengan status=sukses
		  header('Location: index.php?status=sukses');
	  } else {
		  // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		  echo"gagal menghapus";
	  }
 
} else {
	die("Akses dilarang...");
}
?>
