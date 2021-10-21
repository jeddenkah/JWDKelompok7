<?php
include'../koneksi.php';
$id_film=$_GET['id'];

mysqli_query($db,
	"DELETE FROM tbfilm
	WHERE idfilm='$id_film'"
);
header("location:../index.php?p=film");
?> 