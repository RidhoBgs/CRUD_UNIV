<!-- HAPUS MAHASISWA-->
<?php  
	$ambil = $koneksi->query("SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM mahasiswa WHERE nim = '$_GET[nim]'");

	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='index.php?page=mahasiswa';</script>";

 ?> 