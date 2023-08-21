<?php
	include  "../koneksi.php";
?>
<?php
session_start();
$query = "DELETE FROM siswa 
							WHERE id_siswa ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Dihapus');history.go(-1);</script>";
?>

