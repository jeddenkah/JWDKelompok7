<?php
include '../koneksi.php';

$id_peminjam=$_POST['id_peminjam'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbpeminjam
		SET nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat',status='$status'
		WHERE idpeminjam='$id_peminjam'"
	);
	header("location:../index.php?p=peminjam");
}
?>
