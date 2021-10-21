<div id="label-page"><h3 style="text-align: center; margin:30px 0">Tampil Data Peminjam</h3></div>
<div id="content">
<a class="btn btn-primary" href="index.php?p=peminjam-input">Tambah Peminjam</a>

	<table id="tabel-tampil" class="table mt-2" >
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Peminjam</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		

		
		<?php
		$sql="SELECT * FROM tbpeminjam ORDER BY idpeminjam DESC";
		$q_tampil_peminjam = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_peminjam=mysqli_fetch_array($q_tampil_peminjam)){
			
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_peminjam['idpeminjam']; ?></td>
			<td><?php echo $r_tampil_peminjam['nama']; ?></td>
			<td><?php echo $r_tampil_peminjam['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_peminjam['alamat']; ?></td>
			<td>

				<a href="index.php?p=peminjam-edit&id=<?php echo $r_tampil_peminjam['idpeminjam'];?>" class="btn btn-warning">Edit</a>
				<!-- <a onclick="runPopup()" href="proses/peminjam-hapus.php?id=<?php echo $r_tampil_peminjam['idpeminjam']; ?>" class="btn btn-danger">Hapus</a></div> -->
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="proses/peminjam-hapus.php?id=<?php echo $r_tampil_peminjam['idpeminjam']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

