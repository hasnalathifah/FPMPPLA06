<?php

include("config.php");

$server = "localhost";
$user = "id19962395_mppla06";
$password = "manajemenppl/A06";
$nama_database = "id19962395_db_spkt";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if(isset($_POST['tambah'])){
	
	// ambil data dari formulir
	$deterjen = $_POST['deterjen'];
	$fsoftener = $_POST['fsoftener'];
	$plaundry = $_POST['plaundry'];
	
	// buat query
    if($deterjen > 0) {
	    $sql="UPDATE barang SET stok = stok + $deterjen WHERE id = 'B01'";
        $query = mysqli_query($db, $sql);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbrg.php?status=gagal');
            }
    }
    if($fsoftener > 0) {
	    $sql="UPDATE barang SET stok = stok + $fsoftener WHERE id = 'B02'";
        $query = mysqli_query($db, $sql);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbrg.php?status=gagal');
            }
    }
    if($plaundry > 0) {
	    $sql="UPDATE barang SET stok = stok + $plaundry WHERE id = 'B03'";
        $query = mysqli_query($db, $sql);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbrg.php?status=gagal');
            }
    }
	
    header('Location: inputbrg2.php?status=sukses');
	
	
} else {
	die("Akses dilarang...");
}

?>
