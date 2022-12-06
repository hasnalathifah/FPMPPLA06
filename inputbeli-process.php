<?php
use LDAP\Result;

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Kirim'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$notelp = $_POST['notelp'];
	$deterjen = $_POST['deterjen'];
	$fsoftener = $_POST['fsoftener'];
	$plaundry = $_POST['plaundry'];
    $tanggal = date("Y/m/d");
    session_start();
    $karyawan = $_SESSION['username'];
    $marketplace = 'N/A';
    $No_resi = 'N/A';
    $pmethod = 'CASH';
    
	
	// buat query
    if($deterjen > 0) {
        $sql = "INSERT INTO transaksi (Nama_customer, Tanggal, Alamat, No_telp, Marketplace, No_resi, Payment_method, qty, kode_barang, pencatat) VALUE ('$nama','$tanggal', '$marketplace', '$No_resi', '$pmethod', '$alamat', '$notelp', $deterjen, 'B01', '$karyawan')";
	    $sql_1 ="UPDATE barang SET stok = stok - $deterjen WHERE id = 'B01'";
        $harga = mysqli_query($db, "SELECT harga FROM barang WHERE id = 'B01'");
        $result = mysqli_fetch_array($harga);
        $price = $result['harga'];
        $sql_2 = "UPDATE catatan_keuangan SET total_pemasukan=total_pemasukan + ($deterjen * $price) where id=1";
        $query = mysqli_query($db, $sql);
        $query = mysqli_query($db, $sql_1);
        $query = mysqli_query($db, $sql_2);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbeli.php?status=gagal');
            }
    }
    if($fsoftener > 0) {
        $sql = "INSERT INTO transaksi (Nama_customer, Tanggal, Alamat, No_telp, Marketplace, No_resi, Payment_method, qty, kode_barang, pencatat) VALUE ('$nama','$tanggal', '$marketplace', '$No_resi', '$pmethod', '$alamat', '$notelp', $deterjen, 'B02', '$karyawan')";
        $sql_1 = "UPDATE barang SET stok = stok - $fsoftener WHERE id = 'B02'";
        $harga = mysqli_query($db, "SELECT harga FROM barang WHERE id = 'B02'");
        $result = mysqli_fetch_array($harga);
        $price = $result['harga'];
        $sql_2 = "UPDATE catatan_keuangan SET total_pemasukan=total_pemasukan + ($fsoftener * $price) where id=1";
        $query = mysqli_query($db, $sql);
        $query = mysqli_query($db, $sql_1);
        $query = mysqli_query($db, $sql_2);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbeli.php?status=gagal');
            }
    }
    if($plaundry > 0) {
        $sql = "INSERT INTO transaksi (Nama_customer, Tanggal, Alamat, No_telp, Marketplace, No_resi, Payment_method, qty, kode_barang, pencatat) VALUE ('$nama','$tanggal', '$marketplace', '$No_resi', '$pmethod', '$alamat', '$notelp', $deterjen, 'B03', '$karyawan')";
	    $sql_1 = "UPDATE barang SET stok = stok - $plaundry WHERE id = 'B03'";
        $harga = mysqli_query($db, "SELECT harga FROM barang WHERE id = 'B03'");
        $result = mysqli_fetch_array($harga);
        $price = $result['harga'];
        $sql_2 = "UPDATE catatan_keuangan SET total_pemasukan=total_pemasukan + ($plaundry * $price) where id=1";
        $query = mysqli_query($db, $sql);
        $query = mysqli_query($db, $sql_1);
        $query = mysqli_query($db, $sql_2);
            // apakah query simpan berhasil?
            if( !$query ) {
                header('Location: inputbeli.php?status=gagal');
            }
    }
	
    header('Location: inputbeli2.php?status=sukses');
    
	
} else {
	die("Akses dilarang...");
}

?>
