
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Print Daily Payment Report</h3>
		</div>

		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?php echo base_url('report/getPDFReport'); ?>" method="post">
							
							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">From</label>
								<div class="col-sm-9">
									<input type="date" name="from_date" class="form-control" placeholder="Enter from date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label">To</label>
								<div class="col-sm-9">
									<input type="date" name="to_date" class="form-control" placeholder="Enter to date">
								</div>
							</div>

							<div class="form-group row">
								<label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
								<div class="col-sm-9">
									<button type="submit" class="btn btn-primary mr-2"><i class="fa fa-print"></i> Print</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>