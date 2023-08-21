<!-- memnggail koneksi -->
<?php
	include  "../koneksi.php";
?>
			<div style="">
				<?php 
					if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
						echo '<div id="pesan" class="alert alert-success" style="display:none;">'.$_SESSION['pesan'].'</div>';
					}
					$_SESSION['pesan'] = '';
				?>
			</div>
	
			<p>
				<h1>Pengguna</h1>
				<!--<a class="btn btn-primary pull-left" style="margin-bottom: 10px;" href="form_pengguna.html">Tambah</a>-->
			</p>
			<div class="table-responsive">
				<table id="" class="table table-bordered table-striped">
					<thead>
						<tr>
							<!--<th>ID</th>-->
							<th>Username</th>
							<!--<th>Password</th>-->
							<th>Opsi</th>
						</tr>
					</thead>
						
					<tbody>
						<?php
							$no = 1;
							$data = mysqli_query ($koneksi, " select * from user 
															  order by id ASC");
							while ($row = mysqli_fetch_array ($data))
							{
						?>
						<tr>
							<!--<td><?php echo $row['id']; ?></td>-->
							<td><?php echo $row['username']; ?></td>
							<!--<td><?php echo $row['password']; ?></td>-->
							<td>
								<a class="btn btn-success" href="edit_pengguna-<?php echo $row['id']; ?>.html">Edit</a>
								<!--<a class="btn btn-danger" href="hapus_pengguna-<?php echo $row['id']; ?>.html">Hapus</a>-->
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
					
				</table>
			</div>
			
