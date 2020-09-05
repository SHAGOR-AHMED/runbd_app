
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add New Biker</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Forms</a></li>
					<li class="breadcrumb-item active" aria-current="page">Form elements</li>
				</ol>
			</nav>
		</div>
		
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?php echo base_url('BikeDistribution/save_biker'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Bike Name</label>
								<div class="col-sm-9">
									<input type="text" name="bike_name" class="form-control" placeholder="Enter Bike Name">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Bike No</label>
								<div class="col-sm-9">
									<select class="form-control" name="bike_no">
										<?= getBikesNo();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Distribution Date</label>
								<div class="col-sm-9">
									<input type="date" name="distribution_date" class="form-control" placeholder="Enter Distribution Date">
									<div class="help-block"><?php echo form_error('distribution_date'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Initial Kilometer</label>
								<div class="col-sm-9">
									<input type="number" name="kilometer" class="form-control" placeholder="Enter Initial Kilometer">
									<div class="help-block"><?php echo form_error('kilometer'); ?></div>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputPassword2" class="col-sm-3 col-form-label">Security Money</label>
								<div class="col-sm-9">
									<input type="number" name="security_money" class="form-control" placeholder="Enter Security Money">
									<div class="help-block"><?php echo form_error('security_money'); ?></div>
								</div>
							</div>
							
							<button type="submit" class="btn btn-primary mr-2">Save</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>