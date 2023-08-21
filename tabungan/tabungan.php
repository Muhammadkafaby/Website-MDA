
	
			<p>
				<h1>Data Tabungan Siswa</h1>
				<a class="btn btn-success pull-left" style="margin-right:10px; margin-bottom: 10px;" href="setoran.html" >Setoran</a>
				<a class="btn btn-danger pull-left" style="margin-bottom: 10px;" href="penarikan.html" >Penarikan</a>
			</p><br><br><br>
			<table class="table table-striped" id="example1">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama </th>
						<th>Kelas</th>
						<th>Saldo</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$data = mysqli_query ($koneksi, " select  tabungan.id_tabungan,
																  tabungan.id_siswa,
																  tabungan.setoran,
																  tabungan.penarikan,
																  tabungan.saldo,
																  sum(tabungan.penarikan) as jumlah_penarikan,
																  sum(tabungan.setoran) as jumlah_setoran,
																  
																  siswa.id_siswa,
																  siswa.nama,
																  siswa.jenis_kelamin,
																  siswa.kelas,
																  siswa.tempat
																		
																  from 
																  siswa, tabungan
																  where
																  tabungan.id_siswa = siswa.id_siswa
																  group by siswa.nama ASC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>

					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['kelas']; ?></td>
						<td><?php echo format_rupiah($row['jumlah_setoran'] - $row['jumlah_penarikan']); ?></td>
						<td><a href="detail-<?php echo $row['id_siswa'] ; ?>.html" class="btn btn-success btn-xs">Detail</a></td>
					</tr>
					<?php
						}
					?>
				</tbody>
				
					
				
			</table>