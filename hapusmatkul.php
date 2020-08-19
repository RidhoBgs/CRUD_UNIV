<!-- HAPUS MATAKULIAH-->
 <?php  
	$ambil = $koneksi->query("SELECT * FROM mata_kuliah WHERE kode_matkul='$_GET[kode_matkul]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM mata_kuliah WHERE kode_matkul = '$_GET[kode_matkul]'");

	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='index.php?page=mata_kuliah';</script>";

 ?> 