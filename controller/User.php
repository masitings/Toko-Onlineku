<?php

include '../library/Connection.php';

class User
{

    public function __construct()
    {
        $this->conn = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        if ($this->conn->connect_error) {
        	echo 'Connect error '.$this->conn->connect_error;
        	die();
        }
    }

    private function CheckUser($username,$email)
    {
    	$connect = $this->conn;
    	$ds = $connect->query("SELECT * FROM user WHERE username_usr = '$username' OR email_usr = '$email'");
    	if ($ds->num_rows > 0) {
    		return true;
    	} else {
    		return false;
    	}
    }

    public function Login($username,$password)
    {
    	$connect = $this->conn;
    	$ds = $connect->query("SELECT * FROM user WHERE username_usr = '$username' AND password_usr = '$password'");
    	if ($ds->num_rows > 0) {
    		$data = $ds->fetch_assoc();
    		$_SESSION['nama'] = $data['nama_usr'];
    		$_SESSION['email'] = $data['email_usr'];
    		$_SESSION['status'] = 'login';
    		$_SESSION['username'] = $data['username_usr'];
    		return true;
    	} else {
    		return false;
    	}

    }

    public function Register($nama,$username,$password,$email,$alamat,$kota,$telp)
    {
    	$connect = $this->conn;
    	if ($this->CheckUser($username,$email) === FALSE) {
    		$connect->query("INSERT INTO user VALUES('','$nama','$username','$password','$email','$alamat','$kota','$telp','0')");
    		$_SESSION['nama'] = $nama;
    		$_SESSION['email'] = $email;
    		$_SESSION['status'] = 'login';
    		$_SESSION['username'] = $username;
    		return true;
    	} else {
    		return false;
    	}
    }
}