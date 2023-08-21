<?php
	include  "../koneksi.php";
?>
<?php
session_start();
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE user SET
								username = '$username',
								password = '$password'
								WHERE id = '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Diubah');history.go(-2);</script>";

?>

