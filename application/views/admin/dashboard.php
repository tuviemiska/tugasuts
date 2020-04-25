 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
      	<div class="col-md-12">
          <?php if($this->session->flashdata('info')) { ?>
         <div class="alert alert-success alert-dismissible">
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <h4><i class="icon fa fa-check"></i> Berhasil !</h4>
           <?php echo $this->session->flashdata('info') ?>
          </div>
         <?php } ?>
      		<div class="box">
      			<div class="box-header width-border">
      				<h3 class="box-title">
      					Daftar Barang Masuk
      				</h3>
      			</div>
      			<div class="box-body">
      				<table class="table table-bordered">
      					<thead>
      						<th>No</th>
      						<th>Nama Barang</th>
      						<th>Kategori</th>
      						<th>Stok</th>
      						<th>Harga</th>
      						<th>Aksi</th>
      					</thead>
      					<tbody>
      						<?php $no=1; foreach ($barang as $b) {
      						?>
      						<tr>
      							<td><?php echo $no++ ?></td>
      							<td><?php echo $b->nama_barang ?></td>
      							<td><?php echo $b->kategori ?></td>
      							<td><?php echo $b->stok ?></td>
      							<td><?php echo $b->harga ?></td>
      							<td align="center">
      								<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modaledit<?php echo $b->idbarang ?>"><i class="fa fa-pencil"></i></button>
      								<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></center>
      							</td>
      						</tr>
      					<?php } ?>
      				</body>
      			</table>
      			</div>
      		</div>
      		<button class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i>Tambah Barang</button>
      	</div>
      </div>

    </section>
    <!-- /.content -->
  </div>
 

<div class="modal fade" id="modaltambah">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Barang</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('dashboard/tambah') ?>" method="POST">
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Barang" required>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Kategori" required>
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" class="form-control" name="stok" placeholder="Stok" required>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" name="harga" placeholder="Harga" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<?php foreach ($barang as $b) { ?>
<div class="modal fade" id="modaledit<?php echo $b->idbarang ?>">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Barang</h4>
              </div>
              <div class="modal-body">
                <form action="" method="POST">
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" class="form-control" name="nama" placeholder="Nama Barang" value="<?php echo $b->nama_barang ?>" required>
                </div>
                <div class="form-group">
                  <label>Kategori</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="<?php echo $b->kategori ?>" required>
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input type="number" class="form-control" name="stok" placeholder="Stok" value="<?php echo $b->stok ?>" required>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" name="harga" placeholder="Harga" value="<?php echo $b->harga ?>" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<?php } ?>