<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0;"> Edit  Mata Kuliah</h3>
				<?php 
					$ambil=$koneksi->query("SELECT * FROM mata_kuliah WHERE kode_matkul='$_GET[kode_matkul]'");
					$pecah=$ambil->fetch_assoc();
				?>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Kode Mata Kuliah</label>
						<input type="text" class="form-control" name="kdmatkul" value="<?php echo $pecah['kode_matkul']; ?>">
					</div>
					<div class="form-group">
						<label>Nama Mata Kuliah</label>
						<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_matkul']; ?>">
					</div>
					
					<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
				</form>
				<?php 
				if (isset($_POST['edit'])) 
				{
					 			# code...
					$koneksi->query("UPDATE mata_kuliah SET kode_matkul='$_POST[kdmatkul]',nama_matkul='$_POST[nama]' WHERE kode_matkul ='$_GET[kode_matkul]'");

					echo "<script>alert('Data Telah Diedit');</script>";
					echo "<meta http-equiv='refresh'content='1;url=index.php?page=matakuliah'>";
				}
				?>
			</div>
		</div>
	</div>
</div>