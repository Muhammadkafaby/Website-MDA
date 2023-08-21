<?php
	include  "../koneksi.php";
?>
<?php
session_start();
$query = "DELETE FROM user 
							WHERE id ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Dihapus');history.go(-1);</script>";
?>

