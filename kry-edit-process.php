<?php

include("config.php");

if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
    $uname = $_POST['uname'];
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];
	
	// buat query
    $sql = "UPDATE karyawan SET username='$username', password='$pwd' WHERE username ='$uname'";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman dengan status=sukses
		header('Location: karyawan.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman dengan status=gagal
		header('Location: karyawan.php?status=gagal');
	}
	
} else {
	die("Akses dilarang...");
}

?>
