<div layout:fragment="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-tittle" style="padding-top:0; margin-top:0; ">Tambah Mahasiswa</h3>
					<form method="post" enctype="multipart/form-data">
						
						<div class="form-group">
							<label>Nim</label>
							<input type="text" class="form-control"  name="nim" placeholder="Masukan Nim">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control"  name="nama" placeholder="Masukan Nama">
						</div>
						<div class="form-group">
							<label>alamat</label>
							<input type="text" class="form-control"  name="alamat" placeholder="Masukan Kelas">
						</div>
						
						<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
						<a href="index.php?page=mahasiswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
					</form>
					<?php
					if (isset($_POST['save'])) {
				 	# code...
						$koneksi->query("INSERT INTO mahasiswa
							(nim,nama,alamat) VALUES ('$_POST[nim]','$_POST[nama]','$_POST[alamat]')");
						echo "<script>alert('Data Berhasil Disimpan');</script>";
						echo "<meta http-equiv='refresh'content='1;url=index.php?page=mahasiswa'>";
					} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>