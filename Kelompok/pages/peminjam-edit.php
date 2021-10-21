<?php
$id_peminjam = $_GET['id'];
$q_tampil_peminjam = mysqli_query($db, "SELECT * FROM tbpeminjam WHERE idpeminjam='$id_peminjam'");
$r_tampil_peminjam = mysqli_fetch_array($q_tampil_peminjam);
?>
<div id="label-page">
	<h3 style="text-align: center;margin:10px 0">Edit Data Peminjam</h3>
</div>

<div class="content">
	<form action="proses/peminjam-edit-proses.php" method="POST">
		<div class="form-floating mb-3">
			<input type="text" name="id_peminjam" class="form-control" id="floatingInputValue" value="<?php echo $r_tampil_peminjam['idpeminjam']; ?>" readonly>
			<label for="floatingInputValue">ID Peminjam</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="nama" value="<?php echo $r_tampil_peminjam['nama']; ?>" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Nama</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="jeniskelamin" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected disabled>Pilih Jenis Kelamin</option>
					<option value="Pria" <?php echo ($r_tampil_peminjam['jeniskelamin'] == 'Pria') ? 'selected' : ''; ?> >Pria</option>
					<option value="Wanita" <?php echo ($r_tampil_peminjam['jeniskelamin'] == 'Wanita') ? 'selected' : ''; ?> >Wanita</option>
				</select>
				<label for="floatingSelectGrid">Jenis Kelamin</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<textarea class="form-control" name="alamat" id="floatingTextarea2" style="height: 100px"><?php echo $r_tampil_peminjam['alamat']; ?></textarea>
			<label for="floatingTextarea2">Alamat</label>
		</div>

		<div class="col-12">
			<button  class="btn btn-primary" type="submit" name="simpan" value="Simpan">Simpan</button>
		</div>
	</form>
</div>