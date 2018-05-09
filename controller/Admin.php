<?php 

define( 'ABSPATH', dirname(dirname(__FILE__)) . '/' );
include ABSPATH.'library/Connection.php';

class Admin
{
    function __construct()
    {
        $this->conn = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);
        if ($this->conn->connect_error) {
        	echo 'Connect error '.$this->conn->connect_error;
        	die();
        }
    }

    public function connections()
    {
        return $this->conn;
    }

    public function Login($email,$password)
    {
    	$connect = $this->conn;
    	$ds = $connect->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
    	if ($ds->num_rows > 0) {
    		$data = $ds->fetch_assoc();
    		$_SESSION['nama'] = $data['nama'];
    		$_SESSION['email'] = $data['email'];
    		$_SESSION['status'] = 'login';
    		$_SESSION['permit'] = 'admin';
    		$_SESSION['username'] = $data['username'];
    		return true;
    	} else {
    		return false;
    	}
    }

    public function Tambah($nama,$harga,$stok,$status,$kategori,$keterangan,$gambar)
    {
        $connect = $this->conn;
        $nama_gambar = str_replace(' ', '-', strtolower($nama));
        $ext = explode(".", $gambar['name']);
        $nama_baru = $nama_gambar.'-'.mt_rand(100000,999999).'.'.end($ext);
        $date = date('Y-m-d');
        $user = $_SESSION['username'];
        $ket = $connect->real_escape_string($keterangan);
        if (move_uploaded_file($gambar['tmp_name'], ABSPATH.'media/'.$nama_baru)) {
            $connect->query("INSERT INTO item VALUES('','$nama','$kategori','$harga','$stok','$nama_baru','$ket','$status','$date','$user')");
            return true;
        } else {
            return false;
        }
    }

    public function getPost($id,$param)
    {
        $connect = $this->conn;
        $ds = $connect->query("SELECT * FROM item WHERE id = '$id'");
        if ($ds->num_rows > 0) {
            $data = $ds->fetch_assoc();
            return $data[$param];
        } else {
            header("location:/404.php");
        }
    }

    public function Edit($nama,$harga,$stok,$status,$kategori,$keterangan,$id)
    {
        $connect = $this->conn;
        $date = date('Y-m-d');
        $user = $_SESSION['username'];
            $connect->query("UPDATE item SET nama_br ='$nama', harga_br='$harga', kategori_br ='$kategori', stok_br ='$stok', ket_br = '$keterangan', status_br = '$status', tanggal_up = '$date', uplby ='$user' WHERE id = '$id'");
            return true;
    
    }

    public function TambahKategori($nama,$keterangan)
    {
        $connect = $this->conn;
        $slug = str_replace(' ', '-', strtolower($nama));
        $connect->query("INSERT INTO kategori VALUES('','$nama','$slug','$keterangan')");
        return true;
    }

    public function ListKategori()
    {
        $connect = $this->conn;
        $ds = $connect->query("SELECT * FROM kategori ORDER BY id DESC");
        return $ds;
    }

    public function StatusBarang($string)
    {
        if ($string === '0') {
            return '<b style="color:red;">Tidak Tersedia</b>';
        } elseif ($string === '1') {
            return '<b style="color:green;">Tersedia</b>';
        } else {
            return 'False';
        }
    }

    protected function KategoriList($string,$param)
    {
        $connect = $this->conn;
        $ds = $connect->query("SELECT * FROM kategori WHERE id = '$string'");
        if ($ds->num_rows > 0) {
            $dt = $ds->fetch_assoc();
            return $dt[$param];
        } else {
            return 'undifined';
        }
    }

    public function Hapus($id,$table)
    {
        $connect = $this->conn;
        $connect->query("DELETE FROM $table WHERE id = '$id'");
        return true;
    }

    public function ListPR()
    {
        $connect = $this->conn;
        $ds = $connect->query("SELECT * FROM item ORDER BY id DESC");
        if ($ds->num_rows > 0) {
            while ($data = $ds->fetch_assoc()) { 
            ?>
                <tr>
                    <td><?php echo $data['nama_br'];?></td>
                    <td><?php echo $this->KategoriList($data['kategori_br'], 'nama_kat');?></td>
                    <td><b>Rp.<?php echo number_format($data['harga_br']);?></b></td>
                    <td><?php echo $data['stok_br'];?></td>
                    <td><?php echo $this->StatusBarang($data['status_br']);?></td>
                    <td><?php echo date('j F Y', strtotime($data['tanggal_up']));?></td>
                    <td><a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/media/<?php echo $data['gambar_br'];?>" target="_blank"><?php echo $data['gambar_br'];?></a></td>
                    <td>

                        <form method="post" action="/action/Admin.php" style="float: left;margin-right: 5px;">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                            <input type="hidden" name="table" value="item">
                            <input type="hidden" name="act" value="hapus_post">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        <a href="/admin/edit/<?php echo $data['id'];?>/proses" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            <?php } 
        } else { ?>
            <tr>
                <td colspan="8" style="text-align: center;"><a href="/admin/tambah" class="btn btn-primary btn-sm">Tambah Barang</a></td>
            </tr>
        <?php }
        
    }

    public function ListProduk($limit)
    {
        $connect = $this->conn;
        $ds = $connect->query("SELECT * FROM item ORDER BY id DESC LIMIT $limit");
        return $ds;
    }
}