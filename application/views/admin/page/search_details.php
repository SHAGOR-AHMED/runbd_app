
<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Search Payment Details</h3>
		</div>

		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form class="forms-sample" action="<?php echo base_url('payment/getSearchResult'); ?>" method="post">
							<div class="form-group row">
								<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Biker Name</label>
								<div class="col-sm-9">
									<select class="form-control" name="biker_name">
										<?= getMembers();?>
									</select>
								</div>
							</div>
							
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
									<button type="submit" class="btn btn-primary mr-2">Search</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  
		<div class="card">
			<div class="card-body">
				<div class="row grid-margin">
					<?php 
						if(!empty($message)){
					?>
						<div class="alert alert-block alert-success">
							<button type="button" class="close" data-dismiss="alert">
								<i class="ace-icon fa fa-times"></i>
							</button>
							<i class="ace-icon fa fa-check green"></i>
							<?php echo $message; ?>
						</div>
					<?php } ?>
                </div>
                <?php
                	if(!empty($search_result)){ ?>

                		<div class="row">
							<div class="col-12">
								<div class="table-responsive">
									<table id="order-listing" class="table">
										<thead>
											<tr>
												<th>SN</th>
												<th>Biker Name</th>
												<th>Payment Date</th>
												<th>Amount</th>
												<th>Payment Method</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$count = 0;
												$totalAmount=0;
												foreach($search_result as $val){
												$totalAmount = $totalAmount + $val->amount;
											?>
											<tr>
												<td class="center"><?php echo $count+1; ?></td>
												<td><?php echo $val->member_name; ?></td>
												<td><?php echo $val->payment_date; ?></td>
												<td><?php echo "BDT ".$val->amount; ?></td>
												<td><?php generatePaymentMethod($val->payment_method); ?></td>
											</tr>
											<?php
												$count++;
												}//foreach
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="minibox">
									<table id="order-listing" class="table">
										<thead>
											<tr>
												<th>Total Payment Days</th>
												<th>Total Payable</th>
												<th>Cash Paid</th>
												<th>bKash Paid</th>
												<th>Total Paid</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php $totalPayable = 400*26; ?>
												<td ><?php echo count($search_result).' Days'; ?></td>
												<td ><?php echo 'BDT '.$totalPayable; ?></td>
												<td ><?php echo 'BDT '.$cash_payment->amount; ?></td>
												<td ><?php echo 'BDT '.$bkash_payment->amount; ?></td>
												<td ><?php echo 'BDT '.$totalAmount; ?></td>
											</tr>		
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>

                <?php }else{
						echo '<tr>';
							echo '<td colspan="13">'.'No Data Found'.'</td>';
						echo '</tr>';
					}
				?>
			</div>
		</div>
	</div>
</div>