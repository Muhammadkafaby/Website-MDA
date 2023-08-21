<?php
	include  "../koneksi.php";
?>
<?php
session_start();
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "insert INTO user SET
								id = '$id',
								username = '$username',
								password = '$password'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Dimasukkan');history.go(-2);</script>";

?>

