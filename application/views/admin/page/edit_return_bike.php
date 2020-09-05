
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Update Return Bike Record</h3>
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
						<form name="return" class="forms-sample" action="<?php echo base_url('bike/update_returnBike'); ?>" method="post">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
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
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Last Kilometer</label>
								<div class="col-sm-9">
									<input type="number" name="last_kilometer" value="<?= $selected_info->last_kilometer;?>" class="form-control" placeholder="Enter Last Kilometer">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Distribution Date</label>
								<div class="col-sm-9">
									<input type="date" name="distribution_date" value="<?= $selected_info->distribution_date;?>" class="form-control" placeholder="Enter Distribution Date">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Return Date</label>
								<div class="col-sm-9">
									<input type="date" name="return_date" value="<?= $selected_info->return_date;?>" class="form-control" placeholder="Enter Return Date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Purpose of Return</label>
								<div class="col-sm-9">
									<textarea name="purpose" class="form-control" placeholder="Enter Purpose"><?= $selected_info->purpose;?></textarea>
								</div>
							</div>

							<input type="hidden" name="return_id" value="<?= $selected_info->return_id;?>" class="form-control" >
							
							<button type="submit" class="btn btn-primary mr-2">Update</button>
							<button class="btn btn-light">Cancel</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.forms['return'].elements['biker_name'].value = '<?= $selected_info->biker_name;?>';
	document.forms['return'].elements['bike_no'].value = '<?= $selected_info->bike_no;?>';
</script>