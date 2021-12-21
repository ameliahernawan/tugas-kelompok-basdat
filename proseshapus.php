<?php
include("config.php");
if(isset($_POST['hapus'])){
	$nim = $_POST['nim'];
	$query = pg_query("DELETE FROM mahasiswa WHERE nim ='$nim'");
    if($query) {
        header ('Location: index.php');
    } else {
        die("gagal menghapus . . . ");
    }
 
} else {
	die("Akses dilarang...");
}
?>
