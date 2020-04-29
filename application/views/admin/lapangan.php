 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        INFO :
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Lapangan</li>
      </ol>
    </section>
    
    <section class="content">
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
      					Lapangan
      				</h3>
      			</div>
      			<div class="box-body">
      			 <table class="table table-bordered">
      					<thead>
      						<th>No</th>
      						<th>Lapangan</th>
      						<th>Flooring</th>
      						<th>Harga</th>
      					</thead>
      					<tbody>
      						<?php $no=1; foreach ($lapangan as $lp) {
      						?>
      						<tr>
      							<td><?php echo $no++ ?></td>
      							<td><?php echo $lp->lapangan ?></td>
      							<td><?php echo $lp->flooring ?></td>
      							<td><?php echo 'Rp. ' . $lp->harga . '/Jam' ?></td>
      						</tr>
      					<?php } ?>
      				  </tbody>
      			 </table>
      			</div>
      		</div>
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