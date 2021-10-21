<?php
include'../koneksi.php';
$id_peminjam=$_POST['id_peminjam'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbpeminjam
		VALUES('$id_peminjam','$nama','$jenis_kelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=peminjam");
}
?>