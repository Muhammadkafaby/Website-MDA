<?php
session_start();
include  "../koneksi.php";

$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$setoran = reset_rupiah($_POST['setoran']);

$data = mysqli_query ($koneksi, " select  penarikan,
										  setoran,
										  sum(penarikan) as jumlah_penarikan,
										  sum(setoran) as jumlah_setoran
										  from 
										  tabungan
										  where
										  id_siswa = $id_siswa");
$row = mysqli_fetch_array ($data);
$saldo = $row['jumlah_setoran'] - $row['jumlah_penarikan'] + $setoran;

$query = "insert INTO tabungan SET
								id_siswa = '$id_siswa',
								tanggal = '$tanggal',
								setoran = '$setoran',
								saldo = '$saldo'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
echo "<script>alert('Setoran Berhasil');history.go(-2);</script>";
?>

