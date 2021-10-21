<?php
include'../koneksi.php';
$id_peminjam =$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbpeminjam
	WHERE idpeminjam='$id_peminjam'"
);
header("location:../index.php?p=peminjam");
?>