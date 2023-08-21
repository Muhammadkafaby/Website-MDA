<?php
	include  "../koneksi.php";
?>
<?php
session_start();
$id = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];

$query = "UPDATE siswa SET
								nama = '$nama',
								kelas = '$kelas',
								jenis_kelamin = '$jenis_kelamin',
								alamat = '$alamat',
								tempat = '$tempat',
								tanggal = '$tanggal'
								WHERE id_siswa = '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Data Berhasil Diubah');history.go(-2);</script>";

?>

