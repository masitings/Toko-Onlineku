<?php 
ob_start();
	session_start();
	include 'functions.php';
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
		if ($page === 'login') {
			include 'view/partials/header-login.php';
				include 'view/login.php';
			include 'view/partials/footer-login.php';
		} elseif ($page === 'register') {
			include 'view/partials/header-register.php';
				include 'view/register.php';
			include 'view/partials/footer-login.php';
		} elseif ($page === 'admin') {
			$permit = $_SESSION['permit'];
			if ($permit === 'admin') {
				if (isset($_GET['go'])) {
					$go = $_GET['go'];
					if ($go === 'tambah') {
						include 'view/partials/header-admin.php';
							include 'view/admin/tambah.php';
						include 'view/partials/footer-admin.php';
					} elseif ($go === 'dashboard') {
						include 'view/partials/header-admin.php';
							include 'view/admin/dashboard.php';
						include 'view/partials/footer-admin.php';
					} elseif ($go === 'list') {
						include 'view/partials/header-admin.php';
							include 'view/admin/list.php';
						include 'view/partials/footer-admin.php';
					} elseif ($go === 'kategori') {
						include 'view/partials/header-admin.php';
							include 'view/admin/kategori.php';
						include 'view/partials/footer-admin.php';
					} elseif ($go === 'edit') {
						include 'view/partials/header-admin.php';
							include 'view/admin/edit.php';
						include 'view/partials/footer-admin.php';
					} elseif ($go === 'test') {
						include 'view/admin/test.php';
					}
				} else {
					// include 'view/partials/header-admin.php';
					// 	include 'view/admin/dashboard.php';
					// include 'view/partials/footer-admin.php';
				}

				
			} else {
				include 'view/admin/login.php';
			}
		} elseif ($page === 'logout') {
			session_destroy();
			header("location:/");
		} elseif ($page === 'single') {
			
		}
	} else {
		include 'view/partials/header-home.php';
			include 'view/home.php';
		include 'view/partials/footer-home.php';
	}
ob_end_flush();
?>