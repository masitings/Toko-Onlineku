<div class="main-content">
     <div class="panel-content">
          <div class="main-title-sec">
               <div class="row">
                    <div class="col-md-3 column">
                         <div class="heading-profile">
                              <h2>Kategori Produk</h2>
                              <span>Kategori untuk produk anda</span>
                         </div>
                    </div>
               </div>
          </div><!-- Heading Sec -->
          <ul class="breadcrumbs">
               <li><a href="javascript:void(0)" title="">Home</a></li>
               <li>Kategori</li>
          </ul>
          <div class="main-content-area">
               <div class="row">
                    <div class="col-md-12">
                         <div class="widget blank">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".large-modal">Tambah Kategori</button>
                              <table class="table table-striped">
                                <thead>
                                   <tr>
                                     <th>Nama Kategori</th>
                                     <th>Slug</th>
                                     <th>Keterangan</th>
                                     <th>Action</th>
                                   </tr>
                                </thead>
                                <tbody>
                                  <?php ListKategories();?>
                                </tbody>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<div class="modal fade large-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Kategori</h4>
      </div>
      <div class="modal-body">
          <form method="post" action="/action/Admin.php">
               <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" class="form-control">
               </div>
               <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control" name="keterangan"></textarea>
               </div>   
               <div class="form-group">
                    <input type="hidden" name="act" value="tambah_kategori">
                    <button type="submit" class="btn btn-primary">Tambah</button>
               </div>
          </form>
      </div>
    </div>
  </div>
</div>