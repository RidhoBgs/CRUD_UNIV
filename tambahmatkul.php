<div layout:fragment="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-tittle" style="padding-top:0; margin-top:0; ">Tambah Mata Kuliah</h3>
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Kode Mata kuliah</label>
							<input type="text" class="form-control"  name="kdmatkul" placeholder="Masukan Kode">
						</div>
						<div class="form-group">
							<label>Nama Mata Kuliah</label>
							<input type="text" class="form-control"  name="nama" placeholder="Masukan Nama Matkul">
						</div>
						
						<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
						<a href="index.php?page=matakuliah" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
					</form>
					<?php
					if (isset($_POST['save'])) {
				 	# code...
						$koneksi->query("INSERT INTO mata_kuliah
							(kode_matkul,nama_matkul) VALUES ('$_POST[kdmatkul]','$_POST[nama]')");
						echo "<script>alert('Data Berhasil Disimpan');</script>";
						echo "<meta http-equiv='refresh'content='1;url=index.php?page=mahasiswa'>";
					} 
					?>
				</div>
			</div>
		</div>
	</div>
</div>