
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add New Bike</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><i class="ace-icon fa fa-home home-icon"></i>&nbsp;<a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">
						<?php 
							$url = current_url();
							// $end = end(explode('/', $url));
							// echo "<a href='$end'>".$end."</a>";
							$end = explode('/', $url);
							$length = sizeof($end);
							$lasttwo=$end[$length-2].' > '.$end[$length-1];
							echo '<a href="">'.$lasttwo.'</a>';
						?>
					</li>
				</ol>
			</nav>
		</div>
		
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?php echo base_url('bike/save_bike'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Bike Category</label>
								<div class="col-sm-9">
									<select class="form-control" name="bike_category" id="exampleSelectGender">
										<option value="0">--Select Category--</option>
										<option value="1">TVS</option>
										<option value="2">RUNNER</option>
										<option value="3">RKS</option>
										<option value="4">SUZUKI</option>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Bike Number</label>
								<div class="col-sm-9">
									<input type="text" name="bike_no" class="form-control" placeholder="Enter Bike Number">
									<div class="help-block"><?php echo form_error('bike_no'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Chasis Number</label>
								<div class="col-sm-9">
									<input type="text" name="chasis_no" class="form-control" placeholder="Enter Chasis Number">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Engine Number</label>
								<div class="col-sm-9">
									<input type="text" name="engine_no" class="form-control" placeholder="Enter Engine Number">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Stored Date</label>
								<div class="col-sm-9">
									<input type="date" name="stored_date" class="form-control" placeholder="Bike Stored Date">
									<div class="help-block"><?php echo form_error('stored_date'); ?></div>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">File upload</label>
								<div class="col-sm-9">
									<input type="file" name="img" class="file-upload-default">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
										<span class="input-group-append">
											<button class="file-upload-browse btn btn-primary" type="button">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary mr-2">Submit</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>