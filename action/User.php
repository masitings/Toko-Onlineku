<?php 
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
	include '../controller/User.php';
	$user = new User();
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$kota = $_POST['kota'];

	if (isset($_POST['act'])) {
		
		$act = $_POST['act'];
		if ($act === 'login') {
			session_start();
			if ($user->Login($username, $password) === TRUE) {
				header("location:/");
			} else {
				header("location:/login");
			}
		} elseif ($act === 'register') {
			session_start();
			if ($user->Register($nama,$username,$password,$email,$alamat,$kota,$telp) === TRUE) {
				header("location:/profile");
			} else {
				header("location:/register");
			}
		} elseif ($act === 'update-profile') {
			
		}
	}

?>