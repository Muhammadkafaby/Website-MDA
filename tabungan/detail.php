<h3>Detail Tabungan Siswa</h3>
<br>
<?php	
$data = mysqli_query ($koneksi, " select  * from siswa where id_siswa = $_GET[id]");
$row = mysqli_fetch_array ($data);
?>
<p>
	<a class="btn btn-success" href="tabungan.html">Kembali</a>
	<a href="cetak-<?php echo $row['id_siswa'] ; ?>.html" class="btn btn-info">Cetak</a>
</p>
			<table class="table">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Kelas
					</td>
					<td>
						: <?php echo $row['kelas'] ; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Alamat
					</td>
					<td>
						: <?php echo $row['alamat'] ; ?>
					</td>
				</tr>
			</table>
			<br>
			<table class="table table-striped">
					<tr>
						<th>
							No
						</th>
						<th>
							Tanggal
						</th>
						<th>
							Setoran
						</th>
						<th>
							Penarikan
						</th>
						<th>
							Saldo
						</th>
					</tr>
					<?php 
						$no = 1;
							$data = mysqli_query ($koneksi, " select  *
																	  from 
																	  tabungan
																	  where
																	  id_siswa = $_GET[id]
																	  order by id_tabungan asc");
							while ($rw = mysqli_fetch_array ($data))
							
						{
					?>
					<tr>
						<td>
							<?php echo $no ; ?>
						</td>
						<td>

							<?php echo date('d-m-Y', strtotime(($rw['tanggal']))) ; ?>
						</td>
						<td>
							<?php if ($rw['setoran'] == '') {} else { echo "Rp. ".format_rupiah($rw['setoran']) ;} ?>
						</td>
						<td>
							<?php if ($rw['penarikan'] == '') {} else { echo "Rp. ".format_rupiah($rw['penarikan']) ;} ?>
						</td>
						<td>
							<?php if ($rw['saldo'] == '') {} else { echo "Rp. ".format_rupiah($rw['saldo']) ;} ?>
						</td>
					</tr>
					<?php
					$no++;
						}
					?>
				</table>