<?php
include'../koneksi.php';

$id_film=$_POST['id_film'];
$judul_film=$_POST['judul_film'];
$genre=$_POST['genre'];
$produser=$_POST['produser'];
$produksi=$_POST['produksi'];

If(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbfilm
		SET judulfilm='$judul_film',genre='$genre',produser='$produser',produksi='$produksi'
		WHERE idfilm='$id_film'"
	);
	header("location:../index.php?p=film");
}
?>