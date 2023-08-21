<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tabungan";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
