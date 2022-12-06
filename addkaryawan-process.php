<?php

include("config.php");

if(isset($_POST['tambahkan'])){
	
	// ambil data dari formulir
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	
	// buat query
    $sql = "INSERT INTO karyawan (username, password) VALUE ('$username', '$pwd')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: karyawan.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: karyawan.php?status=gagal');
	}
	
} else {
	die("Akses dilarang...");
}

?>
