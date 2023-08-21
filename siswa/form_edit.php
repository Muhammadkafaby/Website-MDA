<?php
	include  "../koneksi.php";
?>
<p>
<h1>Edit Data Siswa</h1>
</p>
<br>
<?php
	$no = 1;
	$data = mysqli_query ($koneksi, " select *
									  from 
									  siswa 
									  where id_siswa = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" method="post" action="update_siswa.html">
	<div class="form-group">
		<label>Nama</label>
		<input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ; ?>">
		<input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
	</div>
	<div class="form-group">
		<label>Kelas</label>
		<input class="form-control" name="kelas" value="<?php echo $row['kelas'] ; ?>">
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Tempat Lahir</label>
		<input class="form-control" name="tempat"  value="<?php echo $row['tempat'] ; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input class="form-control" name="tanggal" type="date" value="<?php echo $row['tanggal'] ; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="siswa.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>