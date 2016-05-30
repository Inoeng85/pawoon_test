<div id="container">
    <h1>REST Client Tests</h1>
	<h3>Accessing the REST Server Using the Curl Library</h3>
	<br/>
    <div id="body">

        <h4><a href="<?php echo site_url('curl-test/get_users'); ?>">Testing a GET all user request</a></h4>
		<h4><a href="<?php echo site_url('curl-test/get_users/037a8f749f990fd51edd27f9bae8d36c:d3'); ?>">Testing a GET users/$1 request</a></h4>

        <h4><a href="<?php echo site_url('post-test'); ?>">Testing a POST request</a></h4>

    </div>
	<br/>
	
</div>

	  <div class="row">
		<div class="col-md-9">
		  <div class="table-responsive">
			<p>
			  <button type="button" class="btn btn-primary btn-sm">Refresh</button>
			  <a class="btn btn-default btn-sm" href="<?php echo site_url('rest_client/form_registrasi');?>" role="button">Form Registrasi</a>
			</p>
			<table class="table table-bordered table-striped">
			  <colgroup>
				<col class="col-md-3" />
				<col class="col-md-3" />
				<col class="col-md-3" />
			  </colgroup>
			  <thead>
				<tr>
				  <th>ID Customer</th>
				  <th>Nama</th>
				  <th>Alamat</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php 
			  
			  foreach($response as $key=>$value){
			  ?>
				<tr>
				  <th scope="row">
					<?php echo $value['uuid'];?>
				  </th>
				  <td><?php echo $value['nama'];?></td>
				  <td><?php echo $value['alamat'];?></td>
				</tr>
				
			  <?php 
				}
			  ?>				
				
			  </tbody>
			</table>
			
		  </div>
		  </div>
	  </div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
