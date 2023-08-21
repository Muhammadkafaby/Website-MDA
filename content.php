<?php
error_reporting(0);
if ($_GET['module']=='siswa')
{
	include "siswa/index.php";
}

elseif ($_GET['module']=='form_siswa')
{
	include "siswa/form_tambah.php";
}
elseif ($_GET['module']=='input_siswa'){
	include "siswa/input.php";
}

elseif ($_GET['module']=='edit_siswa'){
	include "siswa/form_edit.php";
}

elseif ($_GET['module']=='update_siswa'){
	include "siswa/update.php";
}

elseif ($_GET['module']=='hapus_siswa'){
	include "siswa/hapus.php";
}

elseif ($_GET['module']=='tabungan'){
	include "tabungan/tabungan.php";
}

elseif ($_GET['module']=='penarikan'){
	include "tabungan/penarikan.php";
}

elseif ($_GET['module']=='input_penarikan'){
	include "tabungan/input_penarikan.php";
}

elseif ($_GET['module']=='setoran'){
	include "tabungan/setoran.php";
}

elseif ($_GET['module']=='input_setoran'){
	include "tabungan/input_setoran.php";
}

elseif ($_GET['module']=='detail'){
	include "tabungan/detail.php";
}

elseif ($_GET['module']=='cetak'){
	include "cetak.php";
}

elseif ($_GET['module']=='beranda'){
	include "beranda.php";
}

elseif ($_GET['module']=='pengguna'){
	include "pengguna/index.php";
}

elseif ($_GET['module']=='form_pengguna')
{
	include "pengguna/form_tambah.php";
}
elseif ($_GET['module']=='input_pengguna'){
	include "pengguna/input.php";
}

elseif ($_GET['module']=='edit_pengguna'){
	include "pengguna/form_edit.php";
}

elseif ($_GET['module']=='update_pengguna'){
	include "pengguna/update.php";
}

elseif ($_GET['module']=='hapus_pengguna'){
	include "pengguna/hapus.php";
}


$module = isset($_GET['module']) ? $_GET['module'] : '';

// Sanitize the 'module' value
$allowedModules = ['siswa', 'form_siswa', 'input_siswa', 'edit_siswa', 'tabungan', 'penarikan', 'input_penarikan', 'setoran', 'input_setoran', 'detail', 'cetak', 'beranda', 'pengguna', 'form_pengguna', 'input_pengguna', 'edit_pengguna', 'update_pengguna', 'hapus_pengguna']; // List of allowed 'modules'

if (in_array($module, $allowedModules)) {
   include $module . '/index.php'; // Assuming the structure follows this pattern
} else {
   echo 'Invalid module request'; // Handle invalid requests
}

?>