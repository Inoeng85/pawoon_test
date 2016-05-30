<div id="container">
    <h1>Form Registrasi</h1>

	  <div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" action="<?php echo site_url('rest_client/simpan_form');?>" method="POST">
			  <div class="form-group">
				<label for="txt_id" class="col-sm-2 control-label">ID</label>
				<div class="col-sm-10">
				  <input type="text" readonly class="form-control" id="txt_id" name="hash" value="<?php echo hash('md5', rand());?>">
				</div>
			  </div>			
			  <div class="form-group">
				<label for="txt_nama" class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="txt_nama" name="nama" placeholder="Nama">
				</div>
			  </div>
			  <div class="form-group">
				<label for="txt_alamat" class="col-sm-2 control-label">Alamat</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="txt_alamat" placeholder="Alamat">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button type="submit" class="btn btn-default">Simpan</button>
				</div>
			  </div>
			</form>
		  </div>
	  </div>
	
</div>
<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
