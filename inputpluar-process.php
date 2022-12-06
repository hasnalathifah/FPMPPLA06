<?php

include("config.php");

if(isset($_POST['Add'])){
	
	// ambil data dari formulir
	$jumlah = $_POST['jmlpluar'];
	$keperluan = $_POST['keperluan'];
	$keterangan = $_POST['keterangan'];
    $tanggal = date("Y/m/d");
	
	// buat query
    $sql = "INSERT INTO pengeluaran (tanggal, jml_pengeluaran, keperluan, keterangan) VALUE ('$tanggal', '$jumlah', '$keperluan', '$keterangan')";
    $sql_1 = "UPDATE catatan_keuangan SET total_pengeluaran = total_pengeluaran + $jumlah WHERE id=1";
	$query = mysqli_query($db, $sql);
    $query = mysqli_query($db, $sql_1);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: inputpluar2.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: inputpluar.php?status=gagal');
	}
	
} else {
	die("Akses dilarang...");
}

?>
