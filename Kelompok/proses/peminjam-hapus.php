<?php
include'../koneksi.php';
$idpeminjam =$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbanggota
	WHERE idpeminjam='$idpeminjam'"
);
header("location:../index.php?p=peminjam");
?>