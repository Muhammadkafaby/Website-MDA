<?php
	include  "../koneksi.php";
?>
<p>
<h1>Edit Pengguna</h1>
</p>
<br>
<?php
	$no = 1;
	$data = mysqli_query ($koneksi, " select *
									  from 
									  user 
									  where id = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<form role="form" method="post" action="update_pengguna.html">
	<div class="form-group">
		<label>Username</label>
		<input type="hidden" name="id" value="<?php echo $row['id'] ; ?>">
		<input class="form-control" name="username" value="<?php echo $row['username'] ; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password" value="<?php echo $row['password'] ; ?>">
	</div>
	<button type="submit" class="btn btn-primary pull-right">Simpan</button> 
	<a href="pengguna.html" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
</form>