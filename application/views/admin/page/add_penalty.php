
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add Penalty</h3>
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
						<form class="forms-sample" action="<?php echo base_url('penalty/save_penalty'); ?>" method="post">
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
									<input type="date" name="joining_date" class="form-control" placeholder="Enter joining date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Release Date</label>
								<div class="col-sm-9">
									<input type="date" name="release_date" class="form-control" placeholder="Enter release date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Total Deposite</label>
								<div class="col-sm-9">
									<input type="number" name="total_deposite" class="form-control" placeholder="Enter total deposite amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Late Deposite</label>
								<div class="col-sm-9">
									<input type="number" name="late_deposite" class="form-control" placeholder="Enter late deposite amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Depreciation Amount</label>
								<div class="col-sm-9">
									<input type="number" name="depreciation" class="form-control" placeholder="Enter depreciation amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Purpose of Release</label>
								<div class="col-sm-9">
									<textarea name="purpose" class="form-control" placeholder="Enter purpose of loan"></textarea>
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