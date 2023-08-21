<?php 
session_start();
include "koneksi.php";
include "fungsi.php";

$data = mysqli_query ($koneksi, " select * from user where id = 1");
$row = mysqli_fetch_array ($data);

$namapengguna = $row['username'];
$katasandi = $row['password'];

$username=$_POST['username']; 
$password=$_POST['password']; 
if($username==$namapengguna && $password==$katasandi) { 
	echo header('location:beranda.html');
}
else { 
	echo "<script>alert('Username atau Password salah!');history.go(-1);</script>";
} 
?>