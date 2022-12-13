<?php 
include 'config.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$login = mysqli_query($db, "select * from karyawan where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:kdashboard.php");
}else{
	$message = 'Username atau password salah!';

    echo "<SCRIPT> //not showing me this
        alert('$message')
        window.location.replace('klogin.php');
    </SCRIPT>";
}
 
?>