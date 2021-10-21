<div id="label-page"><h3 style="text-align: center; margin:20px 0">Tampil Data Film</h3></div>
<div id="content">
	<a href="index.php?p=film-input" class="btn btn-primary">Tambah Data Film</a>
	<table id="tabel-tampil" class="table mt-2">
		<tr>
			<th id="label-tampil-no" >No</td>
			<th>ID Film</th>
			<th>Judul Film</th>
			<th>Genre</th>
			<th>Produser</th>
			<th>Produksi</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbfilm ORDER BY idfilm DESC";
		$q_tampil_film = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_film=mysqli_fetch_array($q_tampil_film)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_film['idfilm']; ?></td>
			<td><?php echo $r_tampil_film['judulfilm']; ?></td>
			<td><?php echo $r_tampil_film['genre']; ?></td>
			<td><?php echo $r_tampil_film['produser']; ?></td>
			<td><?php echo $r_tampil_film['produksi']; ?></td>
			<td>
				<a href="index.php?p=film-edit&id=<?php echo $r_tampil_film['idfilm'];?>" class="btn btn-warning">Edit</a></div>
				<a onclick="return confirm('Yakin ingin menghapus data ?')" href="proses/film-hapus.php?id=<?php echo $r_tampil_film['idfilm']; ?>" class="btn btn-danger">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>