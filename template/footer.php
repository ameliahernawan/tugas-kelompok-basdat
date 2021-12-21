</body>
</html>
<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran tutor berhasil!";
			}
		?>
	</p>
	<?php endif; ?> 