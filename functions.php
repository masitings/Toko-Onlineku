<?php 
	include 'controller/Admin.php';
	$admin = new Admin();

	function ListProduk(){
		global $admin;
		echo $admin->ListPR();
	}

	function SelectCat(){
		global $admin;
		$ds = $admin->ListKategori();
		if ($ds->num_rows > 0) {
			while ($data = $ds->fetch_assoc()) {
			    echo '<option value="'.$data['id'].'">'.$data['nama_kat'].'</option>';
			}
		} else {
			echo '<option>NO CATEGORY</option>';
		}
	}

	function ListKategories(){
		global $admin;
		$ds = $admin->ListKategori();
		if ($ds->num_rows > 0) {
			while ($data = $ds->fetch_assoc()) { ?>
				<tr>
					<td><?php echo $data['nama_kat'];?></td>
					<td><code><?php echo $data['slug'];?></code></td>
					<td><?php echo $data['keterangan'];?></td>
					<td>
						<form method="post" action="/action/Admin.php">
                            <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                            <input type="hidden" name="table" value="kategori">
                            <input type="hidden" name="act" value="hapus_cat">
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
					</td>
				</tr>
			<?php }
		} else { ?>
			<tr>
				<td colspan="4">No Category</td>
			</tr>
		<?php }
	}

	function listFeatured(){
		global $admin;
		$ds = $admin->ListProduk('10');
		while ($data = $ds->fetch_assoc()) { ?>
		    <div class="item">
               <div class="item-wrap">
                  <div class="item-image">
                     <a class="product-image no-touch" href="#" title="Ipad Air and iOS7">
                     <img class="first_image" src="/media/<?php echo $data['gambar_br'];?>" alt="<?php echo $data['nama_br'];?>" style="height: 220px;" /> 
                     </a>
                     <div class="item-btn">
                        <div class="box-inner">
                           <a title="Add to wishlist" href="#" class="link-wishlist">&nbsp;</a>
                           <a title="Add to compare" href="#" class="link-compare">&nbsp;</a>
                           <span class="qview">
                           <a class="vt_quickview_handler" data-original-title="Quick View" data-placement="left" data-toggle="tooltip" href="#"><span>Quick View</span></a>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="pro-info">
                     <div class="pro-inner">
                        <div class="pro-title product-name" style="padding: 0px;"><a href="detail.html"><?php echo $data['nama_br'];?></a></div>
                        <div class="pro-content">
                           <div class="wrap-price">
                              <div class="price-box">
                                 <span class="regular-price">
                                 <span class="price">Rp.<?php echo number_format($data['harga_br']);?></span></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <form method="get" action="/action/Cart.php">
                  	<input type="hidden" name="act" value="add">
                  	<input type="hidden" name="barang_id" value="<?php echo $data['id'];?>">
                  	<button type="submit" class="add-to-cart" href="#">Add to cart</button>

                  </form>
               </div>
               <!--end item wrap -->
            </div>
		<?php }
	}

	function sessionCart(){
		global $admin;
		$item = $_SESSION['items'];
		$myarray = array();
		$koneksi = $admin->connections();
		foreach ($item as $key => $value) {
			$quer = $koneksi->query("SELECT * FROM item WHERE id = '$key'");
			while ($data = $quer->fetch_assoc()) { 
			?>
				<li class="item">
					<a href="#" title="<?php echo $data['nama_br'];?>" class="product-image">
					<img style="width: 50px;height: 50px;" src="media/<?php echo $data['gambar_br'];?>" alt="<?php echo $data['nama_br'];?>s" />
					</a>
					<a href="/action/Cart.php?act=delete&barang_id=<?php echo $key;?>" class="btn-remove">Remove This Item</a>
					<div class="product-details">
					   <p class="product-name"><a title="Fashion Product 09" href="#"><?php echo $data['nama_br'];?></a></p>
					   <span class="price">Rp.<?php echo number_format($data['harga_br']);?></span>       
						<div class="qty-abc">
					   <a title="Decrement" class="qty-change-left" href="/action/Cart.php?act=minus&barang_id=<?php echo $key;?>&ref=">down</a>
					   <input class="input-text qty" type="text" value="<?php echo $value;?>" />
					   <a title="Increment" class="qty-change-right" href="/action/Cart.php?act=plus&barang_id=<?php echo $key;?>&ref=">up</a>
					   </div>
					</div>
				 </li>
			<?php }
		}
	}

	function cart_total(){
		global $admin;
		if (isset($_SESSION['items'])) {
			foreach ($_SESSION['items'] as $key => $value) {
				$koneksi = $admin->connections();
				$sql = "SELECT * FROM item WHERE id = '$key'";
				$das = $koneksi->query($sql);
				$data = $das->fetch_assoc();

				$jumlah_harga = $data['harga_br'] * $value;
				$total += $jumlah_harga;
				$no = 1;
			}
			echo number_format($total);
		}
	}
?>