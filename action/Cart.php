<?php 
	if (!isset($_SESSION)) {session_start();}
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
		if ($act === 'add') {
			if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += 1;
                    echo '<script>window.history.back();</script>';
                } else {
                    $_SESSION['items'][$barang_id] = 1; 
                    echo '<script>window.history.back();</script>';
                }
            }
		} elseif ($act === 'plus') {
			if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] += 1;
                    echo '<script>window.history.back();</script>';
                }
            }
		} elseif ($act === 'minus') {
			if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    $_SESSION['items'][$barang_id] -= 1;
                    echo '<script>window.history.back();</script>';

                }
            }
		} elseif ($act === 'delete') {
			if (isset($_GET['barang_id'])) {
                $barang_id = $_GET['barang_id'];
                if (isset($_SESSION['items'][$barang_id])) {
                    unset($_SESSION['items'][$barang_id]);
                    echo '<script>window.history.back();</script>';

                }
            }
		} elseif ($act === 'clear') {
			if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                    echo '<script>window.history.back();</script>';
                }
                unset($_SESSION['items']);
                echo '<script>window.history.back();</script>';

            }	
		}
	} else {
		header("location:404.php");
	}
?>