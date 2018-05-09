<div class="main-content">
     <div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Tambah Produk</h2>
                              <span>Welcome back, John</span>
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="javascript:void(0)" title="">Dashboard</a></li>
               <li>Tambah</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
                    <div class="col-md-12">
                         <div class="widget white with-padding">
                              <form method="post" action="/action/Admin.php">
                                <fieldset>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Nama Produk</label>
                                     <input type="text" class="form-control" name="nama_pr" value="<?php echo $admin->getPost($_GET['id'],'nama_br');?>">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Harga Produk</label>
                                     <input type="text" class="form-control" name="harga_pr" value="<?php echo $admin->getPost($_GET['id'],'harga_br');?>">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Stok Produk</label>
                                     <input type="text" class="form-control" name="stok_pr" value="<?php echo $admin->getPost($_GET['id'],'stok_br');?>">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Status Produk</label>
                                     <select class="form-control" name="status_pr">
                                      <option selected value="<?php echo $admin->getPost($_GET['id'],'status_br');?>"><?php echo $admin->StatusBarang($admin->getPost($_GET['id'],'status_br'));?></option>
                                     	<option value="1">Tersedia</option>
                                     	<option value="0">Tidak Tersedia</option>
                                     </select>
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Kategory Produk</label>
                                     <select class="form-control" name="kategori_pr">
                                      <?php SelectCat();?>
                                     </select>
                                   </div>
                                   <div class="form-group">
                                     <textarea class="form-control" name="keterangan_pr"><?php echo $admin->getPost($_GET['id'],'ket_br');?></textarea>
                                   </div>
                                   <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                   <input type="hidden" name="act" value="edit_post">
                                   <button class="btn green-bg btn-primary" type="submit">Submit</button>
                                </fieldset>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
