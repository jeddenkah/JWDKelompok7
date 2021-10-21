<?php
include '../koneksi.php';

$idpeminjam=$_POST['idpeminjam'];
$nama=$_POST['nama'];
$jeniskelamin=$_POST['jeniskelamin'];
$alamat=$_POST['alamat'];
$status=$_POST['status'];

if(isset($_POST['simpan'])){
	mysqli_query($db,
		"UPDATE tbpeminjam
		SET nama='$nama',jeniskelamin='$jeniskelamin',alamat='$alamat',status='$status'
		WHERE idanggota='$id_anggota'"
	);
	header("location:../index.php?p=anggota");
}
?>
