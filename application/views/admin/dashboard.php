  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INFO :
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Pemesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pemesan</span>
              <span class="info-box-number">5 <small>tim</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-soccer-ball-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lapangan</span>
              <span class="info-box-number">2 <small>jenis</small></span>
            </div>
            <!-- /.info-box-content -->

        <!-- /.col -->

        <!-- fix for small devices only -->
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
      </div>


    <!-- Main content -->
    
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
      					Pemesanan
      				</h3>
      			</div>
      			<div class="box-body">
      			 <table class="table table-bordered">
      					<thead>
      						<th>No</th>
      						<th>Nama pemesan</th>
      						<th>Lapangan</th>
      						<th>Durasi</th>
      						<th>Harga</th>
                  <th>Total Harga</th>
      						<th>Aksi</th>
      					</thead>
      				  <tbody>
      						<?php $no=1; foreach ($pemesanan as $ps) {
      						?>
      						<tr>
      							<td><?php echo $no++ ?></td>
      							<td><?php echo $ps->nama_pemesan ?></td>
      							<td><?php echo $ps->lapangan ?></td>
      							<td><?php echo $ps->durasi . ' Jam' ?></td>
      							<td><?php echo 'Rp. ' . $ps->harga . ' /Jam' ?></td>
                    <td><?php echo 'Rp. ' . $ps->totalharga ?></td>
                    <td>
      								<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalupdate<?php echo $ps->idadmin; ?>"><i class="fa fa-pencil"></i></button>
      								<a href="<?php echo base_url("dashboard/hapus/") ?><?php echo $ps->idadmin ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></button>
      							</td>
      						</tr>
      					<?php } ?>
      				  </tbody>
      			 </table>
      			</div>
      		</div>
      		<button class="btn btn-success" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i>Tambah Pemesanan</button>
      	</div>
      </div>

    </section>
    <!-- /.content -->
  </div>

<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      From Zero to Hero
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">Futsal Jepara City</a>.</strong> All member.
</footer>
  <div class="modal fade" id="modaltambah">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Pemesanan</h4>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('dashboard/tambah') ?>" method="POST">
                <div class="form-group">
                  <label>Nama Pemesan</label>
                  <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama Pemesan" required>
                </div>
                
                <div class="form-group">
                  <select name="lapangan" width="100%" class="form-control select2">
                    <option>Pilih Lapangan</option>
                    <?php foreach ($lapangan as $lp) { ?>
                    <option name="lapangan" value="<?php echo $lp->lapangan ?>"><?php echo $lp->lapangan ?> (<?php echo 'Rp. ' . $lp->harga . '/Jam' ?>)</option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Durasi</label>
                  <input type="number" class="form-control" name="durasi" placeholder="Durasi" required>
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="number" class="form-control" name="harga" placeholder="Harga" required value="lapangan">
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
        <!-- /.modal -->

<?php foreach ($pemesanan as $ps) { ?>
<div class="modal fade" id="modalupdate<?php echo $ps->idadmin ;?>">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Pemesanan</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('dashboard/edit') ?>" method="POST">
        <div class="form-group">
          <input type="hidden" name="idadmin" value="<?php echo $ps->idadmin ?>">
          <label>Nama Pemesan</label>
          <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama Pemesan" required value="<?php echo $ps->nama_pemesan ?>">
        </div>
        <div class="form-group">
          <label>Lapangan</label>
          <select name="lapangan" class="form-control select2">
            <option value="<?php echo $lp->lapangan ?>" name="lapangan" selected="selected"><?php echo $lp->lapangan ;?></option>

            <?php foreach ($lapangan as $lp) { ?>
            <option name="lapangan" value="<?php echo $lp->lapangan ?>"><?php echo $lp->lapangan ?> (<?php echo 'Rp. ' . $lp->harga . '/Jam' ?>)
            </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Durasi</label>
          <input type="number" class="form-control" name="durasi" placeholder="Durasi" required value="<?php echo $ps->durasi ?>">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" class="form-control" name="harga" placeholder="Harga" required value="<?php echo $ps->harga ?>">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
<?php } ?>