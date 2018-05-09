<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	session_start();
	include '../controller/Admin.php';
	$admin = new Admin();
	

	if (isset($_POST['act'])) {
		$act = $_POST['act'];
		if ($act === 'login') {
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			if ($admin->Login($email,$password) === TRUE) {
				header("location:/admin/dashboard");
			} else {
				header("location:/admin");
			}
		} elseif ($act === 'tambah') {
			$nama = $_POST['nama_pr'];
			$harga = $_POST['harga_pr'];
			$stok = $_POST['stok_pr'];
			$status = $_POST['status_pr'];
			$kategori = $_POST['kategori_pr'];
			$keterangan = $_POST['keterangan_pr'];
			$gambar = $_FILES['gambar_pr'];
			if ($admin->Tambah($nama,$harga,$stok,$status,$kategori,$keterangan,$gambar) === TRUE) {
				header("location:/admin/list");
			} else {
				header("location:/admin/tambah");
			}
		} elseif ($act === 'edit_post') {
			$nama = $_POST['nama_pr'];
			$harga = $_POST['harga_pr'];
			$stok = $_POST['stok_pr'];
			$status = $_POST['status_pr'];
			$kategori = $_POST['kategori_pr'];
			$keterangan = $_POST['keterangan_pr'];
			$id = $_POST['id'];
			if ($admin->Edit($nama,$harga,$stok,$status,$kategori,$keterangan,$id) === TRUE) {
				header("location:/admin/list");
			} else {
				header("location:/admin/tambah");
			}
		} elseif ($act === 'tambah_kategori') {
			$nama = $_POST['nama'];
			$ket = $_POST['keterangan'];
			if ($admin->TambahKategori($nama,$ket) === TRUE) {
				header("location:/admin/kategori");
			} else {
				echo 'NONO';
			}
		} elseif ($act === 'hapus_post') {
			$id = $_POST['id'];
			$tab = $_POST['table'];
			if ($admin->Hapus($id,$tab) === TRUE) {
				header("location:/admin/list/success"); 
			} else {
				header("location:/admin/list/gagal");
			}
		} elseif ($act === 'hapus_cat') {
			$id = $_POST['id'];
			$tab = $_POST['table'];
			if ($admin->Hapus($id,$tab) === TRUE) {
				header("location:/admin/kategori/success"); 
			} else {
				header("location:/admin/kategori/gagal");
			}
		}

	}

?>