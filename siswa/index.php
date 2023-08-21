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
				<h1>Data Siswa</h1>
				<a class="btn btn-primary pull-left" style="margin-bottom: 10px;" href="form_siswa.html">Tambah</a>
			</p><br><br><br>
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Kelas</th>
							<th>Jenis Kelamin</th>
							<th>Tempat Lahir</th>
							<th>Tanggal Lahir</th>
							<th>Alamat</th>
							<th>Opsi</th>
						</tr>
					</thead>
						
					<tbody>
						<?php
							$no = 1;
							$data = mysqli_query ($koneksi, " select *from siswa 
															  order by id_siswa ASC");
							while ($row = mysqli_fetch_array ($data))
							{
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['id_siswa']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['kelas']; ?></td>
							<td><?php echo $row['jenis_kelamin']; ?></td>
							<td><?php echo $row['tempat']; ?></td>
							<td><?php echo date('d-m-Y', strtotime(($row['tanggal']))) ; ?></td>
							<td><?php echo $row['alamat']; ?></td>
							<td>
								<a class="btn btn-success btn-xs" href="edit_siswa-<?php echo $row['id_siswa']; ?>.html">Edit</a>
								<a class="btn btn-danger btn-xs" href="hapus_siswa-<?php echo $row['id_siswa']; ?>.html">Hapus</a>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
					
				</table>
			</div>
			
