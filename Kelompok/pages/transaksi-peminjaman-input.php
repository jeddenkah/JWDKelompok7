<div id="label-page">
	<h3 style="text-align: center;margin: 10px">Input Transaksi Peminjaman</h3>
</div>


<?php 

$query = mysqli_query($db, "SELECT max(idtransaksi) as kodeTerbesar FROM tbtransaksi");
$data = mysqli_fetch_array($query);
$kodeid = $data['kodeTerbesar'];

$urutan = (int) substr($kodeid, 3, 3);

$urutan++;

$huruf = "TR";
$kodeid = $huruf . sprintf("%03s", $urutan);

?>

<div class="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
		<div class="form-floating mb-3">
			<input readonly value="<?= $kodeid ?>" type="text" name="id_transaksi" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">ID Transaksi</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="id_anggota" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden> Pilih Data Peminjam </option>
					<?php
					$q_tampil_anggota = mysqli_query(
						$db,
						"SELECT * FROM tbpeminjam
							WHERE status='Tidak Meminjam'
							ORDER BY idpeminjam"
					);
					while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
						echo "<option value=$r_tampil_anggota[idpeminjam]>$r_tampil_anggota[idpeminjam] | $r_tampil_anggota[nama]</option>";
					}
					?>
				</select>
				<label for="floatingSelectGrid">Peminjam</label>
			</div>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="id_buku" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden>Pilih Film</option>
					<?php
					$q_tampil_buku = mysqli_query(
						$db,
						"SELECT * FROM tbfilm
							WHERE status='Tersedia'
							ORDER BY idfilm"
					);
					while ($r_tampil_buku = mysqli_fetch_array($q_tampil_buku)) {
						echo "<option value=$r_tampil_buku[idfilm]>$r_tampil_buku[idfilm] | $r_tampil_buku[judulfilm]</option>";
					}
					?>
				</select>
				<label for="floatingSelectGrid">Film</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="date" name="tgl_pinjam" class="form-control" id="floatingInputValue" value="<?php echo $tgl; ?>" placeholder="name@example.com" required>
			<label for="floatingInputValue">Tanggal Pinjam</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit Form</button>
		</div>
	</form>
</div>