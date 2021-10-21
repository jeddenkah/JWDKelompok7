<?php
include'../koneksi.php';
$id_film=$_POST['id_film'];
$judul_film=$_POST['judul_film'];
$genre=$_POST['genre'];
$produser=$_POST['produser'];
$produksi=$_POST['produksi'];
$status="Tersedia";
	
if(isset($_POST['simpan'])){
	$sql = 
		"INSERT INTO tbfilm
		VALUES('$id_film','$judul_film','$genre','$produser','$produksi','$status')";
	$query = mysqli_query($db, $sql);
	header("location:../index.php?p=film");
}
?>