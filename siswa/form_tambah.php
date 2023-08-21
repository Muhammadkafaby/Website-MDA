<?php
	include  "../koneksi.php";
?>
<p>
<h3>Menambahkan Data Siswa</h3>
</p>
<br>
<form role="form" method="post" action="input_siswa.html">
	<div class="form-group">
		<label>NIK</label>
		<input class="form-control" name="id_siswa" autofocus>
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input class="form-control" name="nama" autofocus>
	</div>
	<div class="form-group">
		<label>Kelas</label>
		<input class="form-control" name="kelas" autofocus>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input class="form-control" name="tempat">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input class="form-control" name="tanggal" type="date">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="siswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>