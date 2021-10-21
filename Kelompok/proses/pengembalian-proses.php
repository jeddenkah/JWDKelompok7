<?php
include'../koneksi.php';


$tgl_kembali=date('Y-m-d');
$id_transaksi=$_GET['id'];
$q_transaksi=mysqli_query($db,
	"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'"
);
$r_transaksi=mysqli_fetch_array($q_transaksi);
$id_peminjam=$r_transaksi['idpeminjam'];
$status_peminjam="Tidak Meminjam";
$id_film=$r_transaksi['idfilm'];
$status_film="Tersedia";
	
if(isset($_GET['id'])){
	mysqli_query($db,
		"UPDATE tbtransaksi
		SET tglkembali='$tgl_kembali'
		WHERE idtransaksi='$id_transaksi'"
	);
	mysqli_query($db,
		"UPDATE tbpeminjam
		SET status='$status_peminjam'
		WHERE idpeminjam='$id_peminjam'"
	);
	mysqli_query($db,
		"UPDATE tbfilm
		SET status='$status_film'
		WHERE idfilm='$id_film'"
	);
	header("location:../index.php?p=transaksi-peminjaman");
}
?>