<?php
	include  "../koneksi.php";
?>
<p>
<h3>Menambahkan Pengguna</h3>
</p>
<br>
<form role="form" method="post" action="input_pengguna.html">
	<div class="form-group">
		<label>Username</label>
		<input class="form-control" name="id" autofocus type="hidden">
		<input class="form-control" name="username" autofocus>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" autofocus>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="siswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>