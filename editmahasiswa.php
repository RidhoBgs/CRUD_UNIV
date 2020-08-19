<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0;"> Edit  Mahasiswa</h3>
				<?php 
					$ambil=$koneksi->query("SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
					$pecah=$ambil->fetch_assoc();
				?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nim</label>
						<input type="text" class="form-control" name="nim" value="<?php echo $pecah['nim']; ?>">
					</div>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
					</div>
					<div class="form-group">
						<label>alamat</label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>">
					</div>
					<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
				</form>
				<?php 
				if (isset($_POST['edit'])) 
				{
					 			# code...
					$koneksi->query("UPDATE mahasiswa SET nim='$_POST[nim]',nama='$_POST[nama]' ,alamat='$_POST[alamat]' WHERE nim='$_GET[nim]'");

					echo "<script>alert('Data Telah Diedit');</script>";
					echo "<meta http-equiv='refresh'content='1;url=index.php?page=mahasiswa'>";
				}
				?>
			</div>
		</div>
	</div>
</div>