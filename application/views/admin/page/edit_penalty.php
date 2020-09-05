
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Update Penalty</h3>
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
						<form name="penalty" class="forms-sample" action="<?php echo base_url('penalty/update_penalty'); ?>" method="post">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Joining Date</label>
								<div class="col-sm-9">
									<input type="date" name="joining_date" value="<?= $selected_info->joining_date;?>" class="form-control" placeholder="Enter joining date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Release Date</label>
								<div class="col-sm-9">
									<input type="date" name="release_date" value="<?= $selected_info->release_date;?>" class="form-control" placeholder="Enter release date">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Working Days</label>
								<div class="col-sm-9">
									<input type="number" name="working_days" value="<?= $selected_info->working_days;?>" class="form-control" placeholder="Enter working days">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Total Deposite</label>
								<div class="col-sm-9">
									<input type="number" name="total_deposite" value="<?= $selected_info->total_deposite;?>" class="form-control" placeholder="Enter total deposite amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Late Deposite</label>
								<div class="col-sm-9">
									<input type="number" name="late_deposite" value="<?= $selected_info->late_deposite;?>" class="form-control" placeholder="Enter late deposite amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Depreciation Amount</label>
								<div class="col-sm-9">
									<input type="number" name="depreciation" value="<?= $selected_info->depreciation;?>" class="form-control" placeholder="Enter depreciation amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Purpose of Release</label>
								<div class="col-sm-9">
									<textarea name="purpose" class="form-control" placeholder="Enter purpose of loan"><?= $selected_info->purpose;?></textarea>
								</div>
							</div>

							<input type="hidden" name="penalty_id" value="<?= $selected_info->penalty_id;?>" class="form-control" >
							
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
	document.forms['penalty'].elements['biker_name'].value = '<?= $selected_info->biker_name; ?>';
</script>