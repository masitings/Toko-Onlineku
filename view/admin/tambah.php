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
                              <form method="post" action="/action/Admin.php" enctype="multipart/form-data">
                                <fieldset>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Nama Produk</label>
                                     <input type="text" class="form-control" name="nama_pr">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Harga Produk</label>
                                     <input type="text" class="form-control" name="harga_pr">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Stok Produk</label>
                                     <input type="text" class="form-control" name="stok_pr">
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Status Produk</label>
                                     <select class="form-control" name="status_pr">
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
                                     <textarea class="form-control" name="keterangan_pr"></textarea>
                                   </div>
                                   <div class="form-group">
                                     <label for="disabledTextInput">Gambar Produk</label>
                                     <input type="file" class="form-control" name="gambar_pr">
                                     <input type="hidden" name="act" value="tambah">
                                   </div>
                                   <button class="btn green-bg btn-primary" type="submit">Submit</button>
                                </fieldset>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
