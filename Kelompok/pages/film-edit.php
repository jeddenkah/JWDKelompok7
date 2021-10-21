<?php
$id_film = $_GET['id'];
$q_tampil_film = mysqli_query($db, "SELECT * FROM tbfilm WHERE idfilm='$id_film'");
$r_tampil_film = mysqli_fetch_array($q_tampil_film);

?>
<div id="label-page">
	<h3 style="text-align: center; margin:10px">Edit Data Film</h3>
</div>

<div class="content">
	<form action="proses/film-edit-proses.php" method="post">
		<div class="form-floating mb-3">
			<input type="text" name="id_film" class="form-control" value="<?php echo $r_tampil_film['idfilm']; ?>" id="floatingInputValue" readonly required>
			<label for="floatingInputValue">ID Film</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="judul_film" class="form-control" value="<?php echo $r_tampil_film['judulfilm']; ?>" id="floatingInputValue" placeholder="Marmut Merah Jambu" required>
			<label for="floatingInputValue">Judul Film</label>
		</div>

		<div class="col-md mb-3">
			<div class="form-floating">
				<select name="genre" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
					<option value="<?php echo $r_tampil_film['genre']; ?>" selected hidden><?php echo $r_tampil_film['genre']; ?></option>
					<option value="Horror">Horror</option>
					<option value="Komedi">Komedi</option>
					<option value="Drama">Drama</option>
				</select>
				<label for="floatingSelectGrid">Genre</label>
			</div>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="produser" class="form-control" value="<?php echo $r_tampil_film['produser']; ?>" id="floatingInputValue" placeholder="Raditya Dika" required>
			<label for="floatingInputValue">Produser</label>
		</div>

		<div class="form-floating mb-3">
			<input type="text" name="produksi" class="form-control" value="<?php echo $r_tampil_film['produksi']; ?>" id="floatingInputValue" placeholder="Starvision Plus" required>
			<label for="floatingInputValue">Produksi</label>
		</div>

		<div class="col-12">
			<button class="btn btn-primary" name="simpan" type="submit">Submit form</button>
		</div>
	</form>
</div>