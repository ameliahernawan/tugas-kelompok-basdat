<?php require_once "template/headContent.php" ?>
<div class="container daftar">
  <form class="left" action="proseshapus.php" method="POST">
    <div>
		<h1>Selamat Datang di <span>Tutor4u</span></h1>
		<hr>
		<div class="form-group">
			<label for="nim">NIM</label>
			<input type="text" name="nim" />
		</div>
		<button type="submit" name="hapus">Hapus</button>
    </div>
  </form>
  <div class="right" style="align-items:center;">
	  <img style="width: 90%;" src="img/SignUpbb.png" alt="">
  </div>
</div>
<?php require_once "template/footer.php" ?>
