<?php

include("config.php");

if( isset($_GET['username']) ){
	
	// ambil id dari query string
	$username = $_GET['username'];
	
	// buat query hapus
	$sql = "DELETE FROM karyawan WHERE username='$username'";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: karyawan.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
