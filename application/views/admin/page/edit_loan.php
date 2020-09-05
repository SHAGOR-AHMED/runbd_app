
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Update Loan</h3>
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
						<form name="loan" class="forms-sample" action="<?php echo base_url('loan/update_loan'); ?>" method="post">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Payment Date</label>
								<div class="col-sm-9">
									<input type="date" name="payment_date" value="<?= $selected_info->payment_date;?>" class="form-control" placeholder="Enter Bike Name">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Amount</label>
								<div class="col-sm-9">
									<input type="number" name="amount" value="<?= $selected_info->amount;?>" class="form-control" placeholder="Enter Amount">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Payment Method</label>
								<div class="col-sm-9">
									<select class="form-control" name="payment_method">
										<option value="0">-- Select a method --</option>
										<option value="1">Cash</option>
										<option value="2">bKash</option>
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Purpose</label>
								<div class="col-sm-9">
									<textarea name="purpose" class="form-control" placeholder="Enter purpose of loan"><?= $selected_info->purpose;?></textarea>
								</div>
							</div>

							<input type="hidden" name="loan_id" value="<?= $selected_info->loan_id;?>" class="form-control">
							
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
	document.forms['loan'].elements['biker_name'].value = '<?= $selected_info->biker_name; ?>';
	document.forms['loan'].elements['payment_method'].value = '<?= $selected_info->payment_method; ?>';
</script>