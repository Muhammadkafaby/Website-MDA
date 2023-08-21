<center>
	<a href="#" style="font-size: 30px;"><img src="assets/img/logo1.jpeg" width="10%">    TPQ & MDTA ATH-THAHIRIYAH</a>
	<hr>
	<h4>Buku Tabungan Siswa</h4>
</center>

<br>
<?php	
$data = mysqli_query ($koneksi, " select  *
										  
										  from 
										  siswa
										  where
										  id_siswa = $_GET[id]");
$row = mysqli_fetch_array ($data);
?>
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
			<br><br>
			<div class="pull-right">
				<h5>Diketahui oleh</h5>
				<h5>Staff TU</h5>
				<br><br><br>
				<h5>Abdurrohman S.Pd.I.</h5>
			</div>

				<script>
					window.print();
				</script>