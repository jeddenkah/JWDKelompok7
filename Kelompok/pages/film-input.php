<div id="label-page">
	<h3 style="text-align: center; margin:20px">Input Data Film</h3>
</div>

<?php 

$query = mysqli_query($db, "SELECT max(idfilm) as kodeTerbesar FROM tbfilm");
$data = mysqli_fetch_array($query);
$kodeid = $data['kodeTerbesar'];

$urutan = (int) substr($kodeid, 3, 3);

$urutan++;

$huruf = "FL";
$kodeid = $huruf . sprintf("%03s", $urutan);

?>

<div class="content">
	<form action="proses/film-input-proses.php" method="post">
		<div class="form-floating mb-3">
			<input readonly value="<?= $kodeid;?>" type="text" name="id_film" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">ID Film</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="judul_film" class="form-control" id="floatingInputValue" placeholder="name@example.com" required>
			<label for="floatingInputValue">Judul Film</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="genre" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" required>
					<option value="" selected hidden>-Pilih-</option>
					<option value="Horror">Horror</option>
					<option value="Komedi">Komedi</option>
					<option value="Drama">Drama</option>
				</select>
				<label for="floatingSelectGrid">Genre</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="produser" class="form-control" id="floatingInputValue" placeholder="Raditya Dika" required>
			<label for="floatingInputValue">Produser</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="produksi" class="form-control" id="floatingInputValue" placeholder="Warner Bros" required>
			<label for="floatingInputValue">Produksi</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>