
<div class="main-panel">        
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Add Daily Expense</h3>
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
						<form class="forms-sample" action="<?php echo base_url('expense/save_expense'); ?>" method="post">
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Expense Date</label>
								<div class="col-sm-9">
									<input type="date" name="expense_date" class="form-control" placeholder="Enter Bike Name">
								</div>
							</div>
							
							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Amount</label>
								<div class="col-sm-9">
									<input type="number" name="amount" class="form-control" placeholder="Enter Amount">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputMobile" class="col-sm-3 col-form-label">Purpose</label>
								<div class="col-sm-9">
									<input type="text" name="purpose" class="form-control" placeholder="Enter Amount">
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